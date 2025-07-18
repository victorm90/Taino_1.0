@extends('dashboard.layouts.main')

@section('titulo', $titulo)

@section('contenido')
    <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
        <div class="card mb-6">
            <div class="card-header flex flex-col md:flex-row md:items-center">
                <div class="flex items-center mb-4 md:mb-0">
                    <div class="header-icon">
                        <i class="fas fa-folder-tree"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-slate-800 dark:text-white">Gestión de Categorías</h1>
                        <p class="text-slate-500 dark:text-slate-400 mt-1">Administra todas las categorías de productos</p>
                    </div>
                </div>
                <ul class="breadcrumb flex text-sm md:ml-auto">
                    <li><a href="#" class="text-slate-500 hover:text-custom-500 transition-colors">Dashboard</a>
                    </li>
                    <li class="text-custom-500 font-medium">Categorías</li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="grid grid-cols-1 gap-5 mb-5 xl:grid-cols-2">
                    <div>
                        <form action="{{ route('admin.categoria') }}" method="GET">
                            <div class="relative xl:w-4/6">
                                <input type="text" name="search" value="{{ request('search') }}"
                                    class="ltr:pl-10 rtl:pr-10 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Buscar categorías..." autocomplete="off">
                                <i data-lucide="search"
                                    class="inline-block size-4 absolute ltr:left-3.5 rtl:right-3.5 top-2.5 text-slate-500 dark:text-zink-200"></i>
                            </div>
                        </form>
                    </div>

                    <div class="ltr:md:text-end rtl:md:text-start">
                        <button type="button" onclick="openEditCategoriaModal()" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                             <i class="align-bottom ri-add-line me-1"></i> Nueva Categoría
                        </button>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <thead class="bg-slate-100 dark:bg-zink-600">
                            <tr>
                                <th
                                    class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right">
                                    ID
                                </th>
                                <th
                                    class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right">
                                    Nombre
                                </th>
                                <th
                                    class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right">
                                    Slug
                                </th>
                                <th
                                    class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right">
                                    Descripción
                                </th>
                                <th
                                    class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right">
                                    Productos
                                </th>
                                <th
                                    class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right">
                                    Acciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categorias as $categoria)
                                <tr id="categoria-{{ $categoria->id }}"
                                    class="border-b border-slate-200 dark:border-zink-500">
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
                                                onclick="openEditCategoriaModal({{ json_encode($categoria->only(['id', 'name', 'slug', 'descripcion'])) }})"
                                                class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 dark:bg-zink-600 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-slate-200 dark:hover:bg-zink-500"
                                                data-tooltip="Editar">
                                                <i data-lucide="pencil" class="size-4"></i>
                                            </a>
                                            <button
                                                onclick="openDeleteModal({{ $categoria->id }}, '{{ $categoria->name }}', '{{ $categoria->slug }}')"
                                                class="flex items-center justify-center size-8 transition-all duration-200 ease-linear rounded-md bg-slate-100 dark:bg-zink-600 text-slate-500 dark:text-zink-200 hover:text-red-500 dark:hover:text-red-500 hover:bg-slate-200 dark:hover:bg-zink-500"
                                                data-tooltip="Eliminar">
                                                <i data-lucide="trash-2" class="size-4"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6"
                                        class="px-3.5 py-8 text-center border-b border-slate-200 dark:border-zink-500">
                                        <div class="flex flex-col items-center mx-auto">
                                            <img src="{{ asset('assets/images/empty.png') }}" alt=""
                                                class="h-16">
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
                            <span
                                class="font-semibold text-slate-700 dark:text-zink-100">{{ $categorias->firstItem() }}</span>
                            a
                            <span
                                class="font-semibold text-slate-700 dark:text-zink-100">{{ $categorias->lastItem() }}</span>
                            de
                            <span class="font-semibold text-slate-700 dark:text-zink-100">{{ $categorias->total() }}</span>
                            categorías
                        </p>
                    </div>

                    <div class="flex gap-2 pagination-wrap">
                        {{ $categorias->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Nuevo Modal para Categorías -->
    <div id="categoriaModal" class="fixed inset-0 z-50 flex items-center justify-center hidden transition-all duration-300">
        <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300" id="categoriaModalBackdrop">
        </div>
        <div class="relative w-full max-w-sm mx-4 transform transition-all duration-300 scale-95 opacity-0"
            id="categoriaModalContent">
            <div class="bg-white shadow rounded-md dark:bg-zink-600 flex flex-col">
                <div class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                    <h5 class="text-16" id="modalTitle">Nueva Categoría</h5>
                    <button data-modal-close="categoriaModal"
                        class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500">
                        <i data-lucide="x" class="size-5"></i>
                    </button>
                </div>
                <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                    <form id="categoriaForm" method="POST">
                        @csrf
                        <input type="hidden" name="id" id="id-field">
                        <!-- Mostrar errores generales -->
        @if($errors->any())
            <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-600 rounded-md">
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
                        <div class="mb-3">
                            <label for="name-field" class="inline-block mb-2 text-base font-medium">Nombre <span
                                    class="text-red-500">*</span></label>
                            <input type="text" name="name" id="name-field"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                placeholder="Nombre de la categoría" required>
                        </div>
                        <div class="mb-3">
                            <label for="slug-field" class="inline-block mb-2 text-base font-medium">Slug <span
                                    class="text-red-500">*</span></label>
                            <div class="relative">
                                <input type="text" name="slug" id="slug-field"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Slug" required readonly>
                                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                    <span id="slug-status" class="text-xs text-slate-500 dark:text-zink-300">
                                        <i class="fas fa-lock mr-1"></i> Automático
                                    </span>
                                </div>
                            </div>
                            <p class="mt-1 text-xs text-slate-500 dark:text-zink-300">
                                El slug se genera automáticamente desde el nombre
                            </p>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion-field"
                                class="inline-block mb-2 text-base font-medium">Descripción</label>
                            <textarea name="descripcion" id="descripcion-field"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                placeholder="Descripción" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div
                    class="flex items-center justify-end p-4 mt-auto border-t border-slate-200 dark:border-zink-500 gap-2">
                    <button type="button" data-modal-close="categoriaModal"
                        class="text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100 dark:ring-slate-400/10">
                        Cerrar
                    </button>
                    <button type="submit" form="categoriaForm"
                        class="text-white bg-green-500 border-green-500 btn hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/10">
                        Guardar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de Confirmación para Eliminar -->
    <div id="deleteConfirmModal"
        class="fixed inset-0 z-[60] flex items-center justify-center hidden transition-all duration-300">
        <div class="absolute inset-0 bg-black opacity-0 transition-opacity duration-300" id="deleteModalBackdrop">
        </div>

        <div class="relative w-full max-w-md mx-4 transform transition-all duration-300 scale-95 opacity-0"
            id="deleteModalContent">
            <div class="bg-white rounded-lg shadow-lg dark:bg-zink-600">
                <div class="p-6 text-center">
                    <i data-lucide="trash-2" class="size-16 mx-auto text-red-500 mb-4"></i>
                    <h3 class="text-2xl font-bold text-slate-800 dark:text-white mb-2">¿Eliminar categoría?</h3>
                    <p class="text-slate-600 dark:text-zink-200 mb-6">
                        Estás a punto de eliminar la categoría:
                        <span class="font-semibold text-slate-800 dark:text-white" id="categoriaNombre"></span>
                    </p>
                    <p class="text-sm text-slate-500 dark:text-zink-300 mb-6">
                        Esta acción no se puede deshacer. ¿Estás seguro de continuar?
                    </p>

                    <div class="flex justify-center gap-3">
                        <button type="button" onclick="closeDeleteModal()"
                            class="px-5 py-2 text-white bg-slate-500 rounded-md hover:bg-slate-600 focus:outline-none transition-colors">
                            Cancelar
                        </button>
                        <form id="deleteForm" method="POST" class="m-0">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="px-5 py-2 text-white bg-red-500 rounded-md hover:bg-red-600 focus:outline-none transition-colors">
                                Sí, eliminar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        // ================ Funciones para generar el slug ================
        function generateSlug(text) {
            return text
                .toString()
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '')
                .toLowerCase()
                .trim()
                .replace(/\s+/g, '-')
                .replace(/[^\w\-]+/g, '')
                .replace(/\-\-+/g, '-');
        }
        
        function updateSlugField() {
            const nameField = document.getElementById('name-field');
            const slugField = document.getElementById('slug-field');
            slugField.value = generateSlug(nameField.value);
        }

        // ================ Funciones para el Modal de Categorías ================
        function toggleCategoriaModal(show) {
            const modal = document.getElementById('categoriaModal');
            const backdrop = document.getElementById('categoriaModalBackdrop');
            const content = document.getElementById('categoriaModalContent');

            if (show) {
                modal.classList.remove('hidden');
                setTimeout(() => {
                    backdrop.classList.remove('opacity-0');
                    backdrop.classList.add('opacity-50');
                    content.classList.remove('scale-95', 'opacity-0');
                    content.classList.add('scale-100', 'opacity-100');
                }, 10);
            } else {
                backdrop.classList.remove('opacity-50');
                backdrop.classList.add('opacity-0');
                content.classList.remove('scale-100', 'opacity-100');
                content.classList.add('scale-95', 'opacity-0');
                setTimeout(() => {
                    modal.classList.add('hidden');
                }, 300);
            }
        }

        function openEditCategoriaModal(editData = null) {
    const form = document.getElementById('categoriaForm');
    const slugField = document.getElementById('slug-field');
    
    form.reset();
    
    // Restablecer método a POST
    let methodInput = form.querySelector('input[name="_method"]');
    if (methodInput) methodInput.remove();
    
    if (editData) {
        document.getElementById('modalTitle').textContent = 'Editar Categoría';
        document.getElementById('id-field').value = editData.id;
        document.getElementById('name-field').value = editData.name;
        slugField.value = editData.slug;
        document.getElementById('descripcion-field').value = editData.descripcion || '';
        
        // Actualizar método a PUT
        methodInput = document.createElement('input');
        methodInput.type = 'hidden';
        methodInput.name = '_method';
        methodInput.value = 'PUT';
        form.appendChild(methodInput);

        form.action = "{{ route('admin.categoria.update', ['categoria' => 'slug']) }}".replace('slug', editData.slug);
    } else {
        document.getElementById('modalTitle').textContent = 'Nueva Categoría';
        document.getElementById('id-field').value = '';
        slugField.value = '';
        form.action = "{{ route('admin.categoria.store') }}";
    }

    toggleCategoriaModal(true);
}

// Asegurar que el slug se genere correctamente
document.addEventListener('DOMContentLoaded', function() {
    const nameField = document.getElementById('name-field');
    if (nameField) {
        nameField.addEventListener('input', function() {
            updateSlugField();
        });
    }
    
    // Inicializar el modal si hay errores de validación
    @if($errors->any())
        setTimeout(() => {
            openEditCategoriaModal();
            @if(old('id'))
                const editData = {
                    id: "{{ old('id') }}",
                    name: "{{ old('name') }}",
                    slug: "{{ old('slug') }}",
                    descripcion: "{{ old('descripcion') }}"
                };
                openEditCategoriaModal(editData);
            @else
                openEditCategoriaModal();
            @endif
        }, 300);
    @endif
});

        // ================ Funciones para el Modal de Eliminación ================
        function toggleDeleteModal(show) {
            const modal = document.getElementById('deleteConfirmModal');
            const backdrop = document.getElementById('deleteModalBackdrop');
            const content = document.getElementById('deleteModalContent');

            if (show) {
                modal.classList.remove('hidden');
                setTimeout(() => {
                    backdrop.classList.remove('opacity-0');
                    backdrop.classList.add('opacity-50');
                    content.classList.remove('scale-95', 'opacity-0');
                    content.classList.add('scale-100', 'opacity-100');
                }, 10);
            } else {
                backdrop.classList.remove('opacity-50');
                backdrop.classList.add('opacity-0');
                content.classList.remove('scale-100', 'opacity-100');
                content.classList.add('scale-95', 'opacity-0');
                setTimeout(() => {
                    modal.classList.add('hidden');
                }, 300);
            }
        }

        function openDeleteModal(id, nombre, slug) {
            document.getElementById('categoriaNombre').textContent = nombre;
            document.getElementById('deleteForm').action = "{{ route('admin.categoria.destroy', ['categoria' => 'slug']) }}"
                .replace('slug', slug);
            toggleDeleteModal(true);
        }

        function closeDeleteModal() {
            toggleDeleteModal(false);
        }


        // ================ Event Listeners ================
        document.addEventListener('DOMContentLoaded', function() {
            // Abrir modal nueva categoría
            document.querySelector('[data-modal-target="categoriaModal"]').addEventListener('click', () => {
                openEditCategoriaModal(null);
            });

            // Evento para generar slug automáticamente (siempre disponible)
            const nameField = document.getElementById('name-field');
            if (nameField) {
                nameField.addEventListener('input', function() {
                    updateSlugField();
                });
                
                nameField.addEventListener('paste', function() {
                    setTimeout(updateSlugField, 10);
                });
            }            
           
            // Cerrar modales al hacer clic en el fondo
            document.getElementById('categoriaModalBackdrop').addEventListener('click', () => {
                toggleCategoriaModal(false);
            });

            document.getElementById('deleteModalBackdrop').addEventListener('click', () => {
                closeDeleteModal();
            });

            // Cerrar modal con botón
            document.querySelectorAll('[data-modal-close="categoriaModal"]').forEach(button => {
                button.addEventListener('click', () => {
                    toggleCategoriaModal(false);
                });
            });

            // Manejar mensajes flash con scroll
            @if (Session::has('scroll_to'))
                setTimeout(() => {
                    const element = document.getElementById('{{ Session::get('scroll_to') }}');
                    if (element) {
                        element.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                        element.classList.add('highlight-row');
                    }
                }, 500);
            @endif
        });
    </script>

    <style>
        /* Efectos para los modales */
        #categoriaModal,
        #deleteConfirmModal {
            transition: opacity 0.3s, visibility 0.3s;
        }

        #categoriaModalContent,
        #deleteModalContent {
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), opacity 0.3s;
        }

        /* Highlight para categorías recién modificadas */
        @keyframes highlight {
            0% {
                background-color: rgba(59, 130, 246, 0.5);
            }

            100% {
                background-color: transparent;
            }
        }

        .highlight-row {
            animation: highlight 2s ease-out;
        }

        /* Tus estilos CSS actualizados */
        :root {
            --custom-500: #3b82f6;
            --custom-600: #2563eb;
            --slate-100: #f1f5f9;
            --slate-200: #e2e8f0;
            --slate-300: #cbd5e1;
            --slate-400: #94a3b8;
            --slate-500: #64748b;
            --slate-700: #334155;
            --zink-500: #71717a;
            --zink-600: #52525b;
            --zink-700: #3f3f46;
        }

        body.dark {
            --slate-100: #1e293b;
            --slate-200: #334155;
            --slate-300: #475569;
            --slate-400: #94a3b8;
            --slate-500: #cbd5e1;
            --slate-700: #e2e8f0;
            --zink-500: #a1a1aa;
            --zink-600: #d4d4d8;
            --zink-700: #f4f4f5;
        }

        .card {
            background: white;
            border-radius: 0.75rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            overflow: hidden;
            margin-bottom: 1.5rem;
        }

        .card.dark {
            background: #1e293b;
        }

        .card-header {
            padding: 1.25rem 1.5rem;
            border-bottom: 1px solid var(--slate-200);
        }

        .dark .card-header {
            border-bottom: 1px solid var(--slate-700);
        }

        .header-icon {
            background: linear-gradient(135deg, #dbeafe, #bfdbfe);
            color: var(--custom-500);
            width: 56px;
            height: 56px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-right: 16px;
            box-shadow: 0 4px 6px rgba(59, 130, 246, 0.15);
        }

        .dark .header-icon {
            background: linear-gradient(135deg, rgba(30, 64, 175, 0.2), rgba(37, 99, 235, 0.2));
        }

        .category-icon {
            background: var(--slate-100);
            border: 1px solid var(--slate-200);
            border-radius: 8px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--custom-500);
            font-size: 16px;
            margin-right: 12px;
            transition: all 0.2s ease;
        }

        .category-row:hover .category-icon {
            background: var(--custom-500);
            color: white;
            transform: scale(1.05);
        }

        .stats-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 500;
            background: var(--slate-100);
            color: var(--slate-700);
            border: 1px solid var(--slate-200);
        }

        .dark .stats-badge {
            background: var(--slate-700);
            color: var(--slate-200);
            border: 1px solid var(--slate-600);
        }

        .breadcrumb li:not(:last-child)::after {
            content: "/";
            margin: 0 8px;
            color: var(--slate-400);
        }
    </style>
@endsection
