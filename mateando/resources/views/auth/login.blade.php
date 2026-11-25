<x-layout>
    <x-slot:title>Iniciar sesión</x-slot:title>

    <h2 class="text-center text-3xl my-8">
        Iniciar sesión
    </h2>

    <form action="{{ route('login.store') }}" method="POST"
        class="max-w-xl mx-auto shadow-lg py-15 px-5 my-15 bg-orange-100 rounded-2xl">

        @csrf

        <label class="block mb-2">Email</label>
        <input type="email" name="email"
            value="{{ old('email') }}"
            class="border rounded-lg p-2 w-full mb-4 focus:border-yellow-400 focus:border-4">

        <label class="block mb-2">Contraseña</label>
        <input type="password" name="password"
            class="border rounded-lg p-2 w-full mb-4 focus:border-yellow-400 focus:border-4">

        @if($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <button type="submit"
            class="w-full bg-amber-500 p-3 rounded-lg">
            Iniciar sesión
        </button>

        <p class="text-center mt-4">
            ¿Todavía no tenés una cuenta?
            <a href="{{ route('registro') }}" class="text-amber-700 underline">
                Registrarme
            </a>
        </p>

    </form>
</x-layout>
