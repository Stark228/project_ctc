<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-white bg-black px-4 py-2 border border-white-2 rounded-0 hover:bg-gray-900 hover:text-orange-600 hover:border-orange-600 transition-colors']) }}>
    {{ $slot }}
</button>
