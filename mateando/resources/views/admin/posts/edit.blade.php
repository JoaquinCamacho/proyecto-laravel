<x-layout>
    <x-slot:title>Editar publicación</x-slot:title>

    <h2 class="text-center text-4xl my-10">
        Editar publicación
    </h2>

    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" class="max-w-xl mx-auto shadow-lg py-15 px-5 my-15 bg-orange-100 rounded-2xl">

        @csrf

        @method('PUT')

        <label>Título</label>
        <input type="text" name="titulo"
            value="{{ $post->titulo }}"
            class="border rounded-lg p-2 w-full mb-4 focus:border-yellow-400 focus:border-4">

        <label>Contenido</label>
        <textarea name="contenido"
            class="border rounded-lg p-2 w-full mb-4 focus:border-yellow-400 focus:border-4">{{ $post->contenido }}</textarea>

        <label>Autor</label>
        <input type="text" name="autor"
            value="{{ $post->autor }}"
            class="border rounded-lg p-2 w-full mb-4 focus:border-yellow-400 focus:border-4">

        <label>Categoría</label>
        <select name="category_id" class="border rounded-lg p-2 w-full mb-4 focus:border-yellow-400 focus:border-4">
            @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    {{ $post->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->nombre }}
                </option>

            @endforeach
        </select>

        <label>Fecha de publicación</label>
        <input type="date" name="fecha_publicacion"
            value="{{ $post->fecha_publicacion }}"
            class="border rounded-lg p-2 w-full mb-4 focus:border-yellow-400 focus:border-4">

        <button type="submit" class="bg-amber-500 p-3 rounded-lg">
            Actualizar publicación
        </button>

    </form>
</x-layout>
