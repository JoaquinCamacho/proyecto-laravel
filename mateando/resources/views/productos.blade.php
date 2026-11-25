<?php

   /*  @var Illuminate\Database\Eloquent\Collection|\App\Models\Product[] $products*/ 

?>


<x-layout>

    <x-slot:title>Productos</x-slot:title>

    <h2 class="text-center text-4xl underline">Pagina de productos</h2>

    
    <div class="grid grid-cols-3 gap-6 my-20">
    
        @foreach($products as $product)
    
        <div class="bg-orange-100 p-6 rounded-xl text-center shadow-lg">
            <h3 class="text-3xl font-bold">{{ $product->nombre}}</h3>
            <p class="mt-2 text-lg">
                Categoría: {{ $product->category->nombre }}
            </p>
            <p class="mt-2 text-lg"> ${{$product->precio}}</p>
            <p class="mt-4 text-lg font-bold"> Stock: {{$product->stock}}</p>
            <button class="bg-amber-500 text-white px-5 py-2 rounded-lg my-4 hover:bg-amber-900"><a href="{{ route('productos.view', ['id' =>$product->id])}}">Ver producto</a></button>
        </div>
        
        
        @endforeach
        
    </div>



</x-layout>