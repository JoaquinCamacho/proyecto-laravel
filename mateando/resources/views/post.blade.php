<x-layout>

    <x-slot:title>Blog</x-slot:title>

    <h2 class="text-center text-4xl underline">Pagina de Blog</h2>

    
    <div class="grid grid-cols-3 gap-6 my-20">
    
        @foreach($posts as $post)
    
        <div class="bg-orange-100 p-6 rounded-xl text-center shadow-lg">
            <h3 class="text-2xl font-bold h-20">{{ $post->titulo}}</h3>
            <p class="mt-2 text-lg bg-amber-500 rounded-lg">
                {{$post->category->nombre}}
            </p>
            <p class="mt-4 text-md font-bold">Autor: {{$post->autor}}</p>
            <button class="bg-amber-500 text-white px-5 py-2 rounded-lg my-4 hover:bg-amber-900"><a href="{{ route('post.view', ['id' =>$post->id])}}">Ver posteo</a></button>
        </div>
        
        
        @endforeach
        
    </div>

</x-layout>