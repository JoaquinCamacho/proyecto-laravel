<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}} | MATEANDO</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="{{url('css/estilos.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Carter+One&display=swap" rel="stylesheet">
</head>
<body >
    
    <div id="app">
    <nav class="fixed top-0 left-0  w-full flex justify-between items-center p-4 bg-amber-800 ">

        <div class="flex items-center w-full">
            <x-nav-link route="home">MATEANDO</x-nav-link>

            <div class="flex ml-5 gap-4 w-full ">

            <x-nav-link route="productos" >Productos</x-nav-link>
            <x-nav-link route="post">Post</x-nav-link>

            </div>

        </div>
    </nav>

    <main class="pt-20 px-4">

    <h1>{{$slot}}</h1>
    
    </main>

    <footer class="bg-amber-900 text-center text-white">
        <p>Copyright &copy; ISEC 2024</p>
    </footer>
</div>


</body>
</html>