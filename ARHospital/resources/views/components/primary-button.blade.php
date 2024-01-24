<a href="{{ $link ?? '#' }}" {{ $attributes->merge(['class'=>'p-4 bg-gray-950 text-white rounded-3xl shadow-xl w-40 text-center mt-4 transition-all duration-300 ease-in-out hover:bg-amber-800'])}} >
    {{ $slot }}
</a>