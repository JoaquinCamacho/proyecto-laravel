<x-layout>
    <x-slot:title>Crear cuenta</x-slot:title>

    <h2 class="text-center text-3xl my-8">
        Crear una cuenta
    </h2>

    <form action="{{ route('registro.store') }}" method="POST"
        class="max-w-md mx-auto bg-white p-6 rounded-lg shadow">

        @csrf

        <label class="block mb-2">Nombre</label>
        <input type="text" name="name"
            value="{{ old('name') }}"
            class="w-full border p-2 rounded mb-4">

        <label class="block mb-2">Email</label>
        <input type="email" name="email"
            value="{{ old('email') }}"
            class="w-full border p-2 rounded mb-4">

        <label class="block mb-2">Contraseña</label>
        <input type="password" name="password"
            class="w-full border p-2 rounded mb-4">

        <label class="block mb-2">Repetir contraseña</label>
        <input type="password" name="password_confirmation"
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

        <button type="submit"
            class="w-full bg-green-700 text-white py-2 rounded">
            Registrarme
        </button>

        <p class="text-center mt-4">
            ¿Ya tenés una cuenta?
            <a href="{{ route('login') }}" class="text-green-700 underline">
                Iniciar sesión
            </a>
        </p>

    </form>
</x-layout>
