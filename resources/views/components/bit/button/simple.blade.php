@props(['level' => 'primary'])

@php
    $levelClasses = [
        'primary' => 'bg-blue-600 hover:bg-blue-500 active:bg-blue-700 focus:ring-blue-500',
        'secondary' => 'bg-gray-600 hover:bg-gray-500 active:bg-gray-700 focus:ring-gray-500',
        'danger' => 'bg-red-600 hover:bg-red-500 active:bg-red-700 focus:ring-red-500',
        'success' => 'bg-green-600 hover:bg-green-500 active:bg-green-700 focus:ring-green-500',
    ];
@endphp

<button
    {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center justify-center px-3 py-1.5 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150 ' . $levelClasses[$level]]) }}>
    {{ $slot }}
</button>
