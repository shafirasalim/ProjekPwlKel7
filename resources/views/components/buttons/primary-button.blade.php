@props(['color' => 'cyan'])

@php
    $colors = [
        'cyan' => 'bg-cyan-500 hover:bg-cyan-600',
        'blue' => 'bg-blue-500 hover:bg-blue-600',
    ];
    $btnColor = $colors[$color] ?? $colors['cyan'];
@endphp

<button class="{{ $btnColor }} text-white px-4 py-2 rounded-lg transition-all">
    {{ $slot }}
</button>