<x-layout>

<x-slot:title>Blog</x-slot:title>


<h1 class="text-4xl text-center">{{$post->titulo}}</h1>
<p class="mt-2 text-2xl text-center">
    Categoría: {{$post->category->nombre}}
</p>

    <div class="flex flex-col justify-center h-50 bg-orange-100 w-fit my-10 rounded-lg shadow-lg text-center p-10">
        <p>{{$post->contenido}}</p>
        <h5 class="mt-10"><b>Autor:</b> {{$post->autor}}</h5>
    </div>

</x-layout>