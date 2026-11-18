<x-layout>

    <x-slot:title>Administrar publicaciones</x-slot:title>

    <h2 class="text-center text-4xl">
        Administrar publicaciones
    </h2>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-4 rounded-lg text-center my-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-3 gap-6 my-20">

        @foreach($posts as $post)

            <div class="bg-amber-100 p-6 rounded-xl text-center shadow-lg">

                <h3 class="text-2xl font-bold">
                    {{ $post->titulo }}
                </h3>

                <p class="mt-2">
                    Categoría: {{ $post->category->nombre }}
                </p>

                <p class="mt-4">
                    Autor: {{ $post->autor }}
                </p>


                <a href="{{ route('admin.posts.edit', $post->id) }}"
                    class="bg-amber-500 text-white p-2 rounded-lg inline-block mt-4">
                    Editar
                </a>
            </div>

        @endforeach

    </div>

</x-layout>
