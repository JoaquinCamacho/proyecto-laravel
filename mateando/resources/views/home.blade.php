<x-layout>

    <x-slot:title>Home</x-slot:title>

    <div class="flex flex-col  h-40 justify-center">
        <h1 class="text-5xl">MATEANDO</h1>
        <h5 class="text-lg">El mate que acompaña tus momentos</h5>
    </div>


    <div class="mb-10">
        <p>Descubrí nuestra selección de mates artesanales pensados para compartir, disfrutar y acompañar todos los días.  </p>
        <button class="bg-amber-300 rounded-lg p-2"><a href="{{ route('productos')}}">Ver productos</a></button>
    </div>


    <hr>

    <div class="my-10 text-center">
        <h2 class="text-3xl">Nuestros mates</h2>
        <h5>Mates seleccionados para cada estilo</h5>
    </div>

    <div class="grid grid-cols-3 gap-6 my-20">
        @foreach($products as $product)
    
        <div class="bg-amber-100 p-6 rounded-xl text-center shadow-lg">
            <h3 class="text-2xl font-bold">{{ $product->nombre}}</h3>
        </div>
        
        
        @endforeach

    </div>

<hr>

    <div class="my-10 text-center">
        <h2 class="text-2xl">SOBRE MATEANDO </h2>

        <p>En MATEANDO creemos que el mate es mucho más que una bebida: es una costumbre que compartimos todos los días. </p>
    </div>

<hr>

    <div class="my-10 text-center">
        <h2 class="text-2xl">Visita nuestro BLOG</h2>

        <button class="bg-amber-300 p-4 rounded-xl mt-10 "><a href="{{route('post')}}">BLOG</a></button>
    </div>

</x-layout>