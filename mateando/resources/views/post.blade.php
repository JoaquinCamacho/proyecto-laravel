<x-layout>

    <x-slot:title>Blog</x-slot:title>

    <h2 class="text-center text-4xl">Pagina de Blog</h2>

    
    <div class="grid grid-cols-3 gap-6 my-20">
    
        @foreach($posts as $post)
    
        <div class="bg-amber-100 p-6 rounded-xl text-center shadow-lg">
            <h3 class="text-2xl font-bold">{{ $post->titulo}}</h3>
            <p class="mt-2 text-lg bg-yellow-300 rounded-lg ">{{$post->categoria}}</p>
            <p class="mt-4 text-xs font-bold">Autor: {{$post->autor}}</p>
            <button class="bg-amber-800 text-white px-2 rounded-lg my-4"><a href="{{ route('post.view', ['id' =>$post->id])}}">Ver</a></button>
        </div>
        
        
        @endforeach
        
    </div>

</x-layout>