<x-layout>
    <x-slot:title>Crear publicación</x-slot:title>

    <h2 class="text-center text-4xl my-10">
        Crear publicación
    </h2>


    <form action="{{ route('admin.posts.store') }}" method="POST" class="max-w-xl mx-auto">

        @csrf

        <label>Título</label>
        <input type="text" name="titulo" class="border p-2 w-full mb-4">

        <label>Contenido</label>
        <textarea name="contenido" class="border p-2 w-full mb-4"></textarea>

        <label>Autor</label>
        <input type="text" name="autor" class="border p-2 w-full mb-4">

        <label>Categoría</label>
        <select name="category_id" class="border p-2 w-full mb-4">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">
                    {{ $category->nombre }}
                </option>
            @endforeach
        </select>

        <label>Fecha de publicación</label>
        <input type="date" name="fecha_publicacion" class="border p-2 w-full mb-4">

        <button type="submit" class="bg-amber-500 p-3 rounded-lg">
            Guardar publicación
        </button>

    </form>
</x-layout>
