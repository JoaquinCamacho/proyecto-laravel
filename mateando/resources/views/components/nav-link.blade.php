<a href="{{ route($route) }}" class="{{ request()->routeIs($route) ? 'text-amber-300 font-bold' : 'text-white' }}">
    {{ $slot }}
</a>