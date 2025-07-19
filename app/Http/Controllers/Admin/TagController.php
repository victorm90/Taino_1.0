<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class TagController extends Controller
{
    public function index(Request $request)
    {
        $titulo = 'Etiquetas | Nacion Taino';

        $query = Tag::withCount('posts')->latest();

        // Búsqueda
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'ILIKE', "%{$search}%")
                    ->orWhere('slug', 'ILIKE', "%{$search}%")
                    ->orWhere('descripcion', 'ILIKE', "%{$search}%");
            });
        }

        $tags = $query->paginate(10)->withQueryString();

        return view('admin.tags.index', compact('titulo', 'tags'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:tags,name',
            'slug' => 'required|string|max:255|unique:tags,slug',
            'descripcion' => 'nullable|string|max:500',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'name.unique' => 'Esta etiqueta ya existe.',
            'slug.required' => 'El slug es obligatorio.',
            'slug.unique' => 'Este slug ya está en uso.',
        ]);

        try {
            DB::beginTransaction();

            $tag = Tag::create($validated);

            DB::commit();

            return redirect()->route('admin.tags.index')->with([
                'create' => 'Etiqueta creada: ' . $tag->name,
                'scroll_to' => 'tag-' . $tag->id
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error creando etiqueta: ' . $e->getMessage());
            return back()->withInput()->with('error', 'Error al crear la etiqueta: ' . $e->getMessage());
        }
    }

    public function update(Request $request, Tag $tag)
    {
        $validated = $request->validate([
            'name' => [
                'required',
                'string',
                'max:255',
                Rule::unique('tags')->ignore($tag->id)
            ],
            'slug' => [
                'required',
                'string',
                'max:255',
                Rule::unique('tags')->ignore($tag->id)
            ],
            'descripcion' => 'nullable|string|max:500',
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'slug.required' => 'El slug es obligatorio.',
            'slug.unique' => 'Este slug ya está en uso.',
        ]);

        try {
            DB::beginTransaction();

            $tag->update($validated);

            DB::commit();

            return redirect()->route('admin.tags.index')->with([
                'edit' => 'Etiqueta actualizada: ' . $tag->name,
                'scroll_to' => 'tag-' . $tag->id
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error actualizando etiqueta: ' . $e->getMessage());
            return back()->withInput()->with('error', 'Error al actualizar la etiqueta: ' . $e->getMessage());
        }
    }

    public function destroy(Tag $tag)
    {
        try {
            // Verificar si tiene posts asociados
            if ($tag->posts()->exists()) {
                return redirect()->route('admin.tags.index')->with('error', 'No se puede eliminar: tiene posts asociados');
            }

            $nombreTag = $tag->name;
            $tag->delete();

            return redirect()->route('admin.tags.index')->with([
                'delete' => 'Etiqueta eliminada: ' . $nombreTag,
                'scroll_to' => 'tag-' . $tag->id
            ]);
        } catch (\Exception $e) {
            Log::error('Error eliminando etiqueta: ' . $e->getMessage());
            return redirect()->route('admin.tags.index')->with('error', 'Error al eliminar la etiqueta: ' . $e->getMessage());
        }
    }
}
