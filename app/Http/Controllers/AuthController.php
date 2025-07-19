<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Lang;

class AuthController extends Controller
{

    public function index()
    {
        return view('dashboard.layouts.auth');
    }

    public function login(Request $request)
    {
        try {
            // Mensajes personalizados en español
            $messages = [
                'login.required' => 'El usuario o correo electrónico es obligatorio.',
                'password.required' => 'La contraseña es obligatoria.',
            ];

            // Validar campos con mensajes personalizados
            $credentials = $request->validate([
                'login' => 'required|string', 
                'password' => 'required|string',
            ], $messages);

            // Verificar límite de intentos
            $this->checkTooManyFailedAttempts($request);

            // Determinar si el login es email o username
            $field = filter_var($credentials['login'], FILTER_VALIDATE_EMAIL)
                ? 'email'
                : 'username';

            // Crear credenciales dinámicas
            $authCredentials = [
                $field => $credentials['login'],
                'password' => $credentials['password']
            ];

            // Intentar autenticación
            if (Auth::attempt($authCredentials, $request->filled('remember'))) {
                $user = Auth::user();

                // VERIFICACIÓN DE USUARIO ACTIVO
                if (!$user->activo) {
                    Auth::logout();
                    $this->logInactiveAttempt($request);

                    return back()->withInput()->withErrors([
                        'login' => 'Cuenta desactivada',
                        'password' => ' '
                    ])->with('error', 'Su cuenta está desactivada. Contacte al administrador.');
                }

                // Resetear límites de intentos
                RateLimiter::clear($this->throttleKey($request));

                // Redirigir al dashboard
                $welcomeMessage = $user->name
                    ? "¡Bienvenido de nuevo, {$user->name}!"
                    : "¡Bienvenido de nuevo!";

                return redirect()->intended('inicio')->with('success', $welcomeMessage);
            }

            // Incrementar intentos fallidos
            RateLimiter::hit($this->throttleKey($request));

            return back()->withInput()->withErrors([
                'login' => 'Las credenciales proporcionadas no son correctas.',
                'password' => ' '
            ])->with('error', 'Credenciales incorrectas. Por favor verifique sus datos.');
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput()->with('error', 'Por favor corrija los errores en el formulario.');
        } catch (\Exception $e) {
            Log::error('Error en autenticación: ' . $e->getMessage());
            return back()->with('error', 'Ocurrió un error inesperado. Por favor intente nuevamente.');
        }
    }

    // Actualizar throttleKey para usar 'login'
    protected function throttleKey(Request $request)
    {
        return Str::transliterate(Str::lower($request->input('login')) . '|' . $request->ip());
    }

    // Actualizar logInactiveAttempt para usar 'login'
    protected function logInactiveAttempt(Request $request)
    {
        Log::warning('Intento de acceso de usuario inactivo', [
            'login' => $request->login, // Cambiado de email a login
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'time' => now()
        ]);
    }

    protected function checkTooManyFailedAttempts(Request $request)
    {
        $throttleKey = $this->throttleKey($request);

        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            event(new Lockout($request));

            $seconds = RateLimiter::availableIn($throttleKey);

            throw ValidationException::withMessages([
                'email' => Lang::get('auth.throttle', [
                    'seconds' => $seconds,
                    'minutes' => ceil($seconds / 60),
                ]),
            ])->status(429);
        }
    }
}
