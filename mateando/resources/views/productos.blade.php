<?php

   /*  @var Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products*/ 

?>


<x-layout>

    <x-slot:title>Productos</x-slot:title>

    <h2 class="text-center text-4xl">Pagina de productos</h2>

    
    <div class="grid grid-cols-3 gap-6 my-20">
    
        @foreach($products as $product)
    
        <div class="bg-amber-100 p-6 rounded-xl text-center shadow-lg">
            <h3 class="text-2xl font-bold">{{ $product->nombre}}</h3>
            <p class="mt-2 text-lg">{{$product->precio}}</p>
            <p class="mt-4 text-lg font-bold"> Stock: {{$product->stock}}</p>
            <button class="bg-amber-800 text-white px-2 rounded-lg my-4"><a href="{{ route('productos.view', ['id' =>$product->id])}}">Ver</a></button>
        </div>
        
        
        @endforeach
        
    </div>



</x-layout>