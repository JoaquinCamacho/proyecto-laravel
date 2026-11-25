<x-layout>
    <x-slot:title>Crear publicación</x-slot:title>

    <h2 class="text-center text-4xl my-5">
        Crear publicación
    </h2>


    @if($errors->any())
    <div class="bg-red-200 text-red-800 p-4 rounded-lg mb-4 max-w-xl mx-auto">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('admin.posts.store') }}" method="POST" class="max-w-xl mx-auto shadow-lg py-15 px-5 my-15 bg-orange-100 rounded-2xl">

        @csrf

        <label>Título</label>
        <input type="text" name="titulo" class="border rounded-lg p-2 w-full mb-4 focus:border-yellow-400 focus:border-4">

        <label>Contenido</label>
        <textarea name="contenido" class="border rounded-lg p-2 w-full mb-4 focus:border-yellow-400 focus:border-4""></textarea>

        <label>Autor</label>
        <input type="text" name="autor" class="border rounded-lg p-2 w-full mb-4 focus:border-yellow-400 focus:border-4"">

        <label>Categoría</label>
        <select name="category_id" class="border rounded-lg p-2 w-full mb-4 focus:border-yellow-400 focus:border-4"">
            @foreach($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->nombre }}
            </option>
            @endforeach
        </select>

        <label>Fecha de publicación</label>
        <input type="date" name="fecha_publicacion" class="border rounded-lg p-2 w-full mb-4 focus:border-yellow-400 focus:border-4"">

        <button type="submit" class="bg-amber-500 p-3 rounded-lg">
            Guardar publicación
        </button>

    </form>
</x-layout>