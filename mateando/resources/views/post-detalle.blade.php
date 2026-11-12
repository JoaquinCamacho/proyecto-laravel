<x-layout>

<x-slot:title>Blog</x-slot:title>


<h1 class="text-4xl">{{$post->titulo}}</h1>

    <div class="flex flex-col justify-evenly h-50 bg-amber-100 w-fit my-10 rounded-lg shadow-lg">
        <h4>{{$post->contenido}}</h4>
        <h5>{{$post->autor}}</h5>
    </div>

</x-layout>