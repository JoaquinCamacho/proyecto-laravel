<x-layout>
    <x-slot:title>Iniciar sesión</x-slot:title>

    <h2 class="text-center text-3xl my-8">
        Iniciar sesión
    </h2>

    <form action="{{ route('login.store') }}" method="POST"
        class="max-w-md mx-auto bg-white p-6 rounded-lg shadow">

        @csrf

        <label class="block mb-2">Email</label>
        <input type="email" name="email"
            value="{{ old('email') }}"
            class="w-full border p-2 rounded mb-4">

        <label class="block mb-2">Contraseña</label>
        <input type="password" name="password"
            class="w-full border p-2 rounded mb-4">

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
            class="w-full bg-green-700 text-white py-2 rounded">
            Iniciar sesión
        </button>

        <p class="text-center mt-4">
            ¿Todavía no tenés una cuenta?
            <a href="{{ route('registro') }}" class="text-green-700 underline">
                Registrarme
            </a>
        </p>

    </form>
</x-layout>
