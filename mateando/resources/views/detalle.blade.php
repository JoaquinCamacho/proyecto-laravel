

<x-layout>

<x-slot:title>Detalle de producto</x-slot:title>

    <h1 class="text-4xl text-center">{{$product->nombre}}</h1>
    <p class="text-center text-2xl">Categoría: {{$product->category->nombre}}</p>
    <div class="flex justify-center">
        <div class="flex flex-col text-center p-10 justify-evenly h-50 bg-orange-100 w-fit my-10 rounded-lg shadow-lg ">
            <h4> <b class="text-2xl">Precio:</b> <span class="text-xl text-red-950">${{$product->precio}}</span></h4>
            <h5> <b>Stock:</b> {{$product->stock}}</h5>
            <p> {{$product->descripcion}}</p>
        </div>
    </div>
    



</x-layout> 