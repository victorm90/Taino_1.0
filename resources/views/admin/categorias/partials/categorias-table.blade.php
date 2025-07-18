<div class="overflow-x-auto">
    <table class="w-full whitespace-nowrap">
        <thead class="bg-slate-100 dark:bg-zink-600">
            <tr>
                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 text-left">ID</th>
                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 text-left">Nombre
                </th>
                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 text-left">Slug
                </th>
                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 text-left">
                    Descripción</th>
                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 text-left">
                    Productos</th>
                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 text-left">Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categorias as $categoria)
                <tr class="border-b border-slate-200 dark:border-zink-500">
                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                        {{ $categoria->id }}
                    </td>
                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                        <div class="flex items-center gap-2">
                            <div class="bg-slate-100 dark:bg-zink-600 border rounded-md p-1.5 shrink-0">
                                <i data-lucide="folder" class="size-4 text-custom-500"></i>
                            </div>
                            <div class="font-medium">{{ $categoria->name }}</div>
                        </div>
                    </td>
                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                        <span
                            class="px-2 py-1 text-xs text-slate-500 bg-slate-100 dark:bg-zink-600 dark:text-zink-200 rounded-md">{{ $categoria->slug }}</span>
                    </td>
                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                        {{ \Illuminate\Support\Str::limit($categoria->descripcion, 50, '...') }}
                    </td>
                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                        <span
                            class="px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-zink-600 dark:text-zink-200">
                            {{ $categoria->productos_count }} productos
                        </span>
                    </td>
                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                        <div class="flex gap-2">
                            <a href="#"
                                class="edit-btn flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 dark:bg-zink-600 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-slate-200 dark:hover:bg-zink-500"
                                data-categoria='{{ json_encode($categoria->only(['id', 'name', 'slug', 'descripcion'])) }}'
                                data-tooltip="Editar">
                                <i data-lucide="pencil" class="size-4"></i>
                            </a>
                            <form action="{{-- {{ route('admin.categorias.destroy', $categoria->id) }} --}}" method="POST"
                                class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 dark:bg-zink-600 text-slate-500 dark:text-zink-200 hover:text-red-500 dark:hover:text-red-500 hover:bg-slate-200 dark:hover:bg-zink-500"
                                    data-tooltip="Eliminar">
                                    <i data-lucide="trash-2" class="size-4"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-3.5 py-8 text-center border-b border-slate-200 dark:border-zink-500">
                        <div class="flex flex-col items-center mx-auto">
                            <img src="{{ asset('assets/images/empty.png') }}" alt="" class="h-16">
                            <div class="mt-3">
                                <h5 class="mb-1">No se encontraron categorías</h5>
                                <p class="text-slate-500 dark:text-zink-200">Intenta con otros términos de
                                    búsqueda</p>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Paginación con estilos mejorados -->
<div class="flex flex-col items-center mt-4 md:flex-row">
    <div class="mb-4 grow md:mb-0">
        <p class="text-slate-500 dark:text-zink-200">
            Mostrando
            <span class="font-semibold text-slate-700 dark:text-zink-100">{{ $categorias->firstItem() }}</span>
            a
            <span class="font-semibold text-slate-700 dark:text-zink-100">{{ $categorias->lastItem() }}</span>
            de
            <span class="font-semibold text-slate-700 dark:text-zink-100">{{ $categorias->total() }}</span>
            categorías
        </p>
    </div>

    <div class="flex gap-2 pagination-wrap">
        {{-- Enlace anterior --}}
        @if ($categorias->onFirstPage())
            <span
                class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-400 dark:text-zink-300 cursor-not-allowed">
                <i data-lucide="chevron-left" class="size-4"></i>
            </span>
        @else
            <a href="{{ $categorias->previousPageUrl() }}"
                class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10">
                <i data-lucide="chevron-left" class="size-4"></i>
            </a>
        @endif

        {{-- Números de página --}}
        @foreach ($categorias->getUrlRange(1, $categorias->lastPage()) as $page => $url)
            @if ($page == $categorias->currentPage())
                <span
                    class="inline-flex items-center justify-center bg-custom-50 dark:bg-custom-500/10 size-8 transition-all duration-150 ease-linear border rounded border-custom-200 dark:border-custom-500/60 text-custom-500 dark:text-custom-500">{{ $page }}</span>
            @else
                <a href="{{ $url }}"
                    class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10">
                    {{ $page }}
                </a>
            @endif
        @endforeach

        {{-- Enlace siguiente --}}
        @if ($categorias->hasMorePages())
            <a href="{{ $categorias->nextPageUrl() }}"
                class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10">
                <i data-lucide="chevron-right" class="size-4"></i>
            </a>
        @else
            <span
                class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-400 dark:text-zink-300 cursor-not-allowed">
                <i data-lucide="chevron-right" class="size-4"></i>
            </span>
        @endif
    </div>
</div>
