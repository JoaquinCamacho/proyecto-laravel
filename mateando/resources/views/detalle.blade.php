

<x-layout>

<x-slot:title>Detalle de producto</x-slot:title>

    <h1 class="text-4xl">{{$product->nombre}}</h1>

    <div class="flex flex-col justify-evenly h-50 bg-amber-100 w-fit my-10 rounded-lg shadow-lg">
        <h4>Precio: {{$product->precio}}</h4>
        <h5>Stock: {{$product->stock}}</h5>
        <p>{{$product->descripcion}}</p>
    </div>



</x-layout> 