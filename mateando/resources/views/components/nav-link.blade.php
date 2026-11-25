<a href="{{ route($route) }}" {{ $attributes }} class="{{ request()->routeIs($route) ? 'text-amber-500 font-bold' : 'text-white' }}">
    {{ $slot }}
</a>