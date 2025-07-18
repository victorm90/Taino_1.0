<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class CategoriaController extends Controller
{
    public function index(Request $request)
    {
        $titulo = 'Categorías | Nacion Taino';

        $query = Categoria::withCount('productos')->latest();

        // Búsqueda mejorada con filtros
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'ILIKE', "%{$search}%")
                    ->orWhere('slug', 'ILIKE', "%{$search}%")
                    ->orWhere('descripcion', 'ILIKE', "%{$search}%");
            });
        }

        $categorias = $query->paginate(10)->withQueryString();

        return view('admin.categorias.index', compact('titulo', 'categorias'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categorias,name',
            'slug' => 'required|string|max:255|unique:categorias,slug',
            'descripcion' => 'nullable|string|max:500',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'name.unique' => 'Esta categoría ya existe.',
            'slug.required' => 'El slug es obligatorio.',
            'slug.unique' => 'Este slug ya está en uso.',
        ]);

        try {
            DB::beginTransaction();

            $categoria = Categoria::create($validated);

            DB::commit();

            return redirect()->route('admin.categoria')->with([
                'create' => 'Categoría creada: ' . $categoria->name,
                'scroll_to' => 'categoria-' . $categoria->id
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error creando categoría: ' . $e->getMessage());
            return back()->withInput()->with('error', 'Error al crear la categoría: ' . $e->getMessage());
        }
    }

    public function update(Request $request, Categoria $categoria)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('categorias')->ignore($categoria->id)
            ],
            'slug' => [
                'required',
                'string',
                'max:255',
                Rule::unique('categorias')->ignore($categoria->id)
            ],
            'descripcion' => 'nullable|string|max:500',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'slug.required' => 'El slug es obligatorio.',
            'slug.unique' => 'Este slug ya está en uso.',
        ]);

        try {
            DB::beginTransaction();

            $categoria->update($validated);

            DB::commit();

            return redirect()->route('admin.categoria')->with([
                'edit' => 'Categoría actualizada: ' . $categoria->name,
                'scroll_to' => 'categoria-' . $categoria->id
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error actualizando categoría: ' . $e->getMessage());
            return back()->withInput()->with('error', 'Error al actualizar la categoría: ' . $e->getMessage());
        }
    }

    public function destroy(Categoria $categoria)
    {
        try {
            // Verificar si tiene productos asociados
            if ($categoria->productos()->exists()) {
                return redirect()->route('admin.categoria')->with('error', 'No se puede eliminar: tiene productos asociados');
            }

            $nombreCategoria = $categoria->name;
            $categoria->delete();

            return redirect()->route('admin.categoria')->with([
                'delete' => 'Categoría eliminada: ' . $nombreCategoria,
                'scroll_to' => 'categoria-' . $categoria->id
            ]);
        } catch (\Exception $e) {
            Log::error('Error eliminando categoría: ' . $e->getMessage());
            return redirect()->route('admin.categoria')->with('error', 'Error al eliminar la categoría: ' . $e->getMessage());
        }
    }
}
