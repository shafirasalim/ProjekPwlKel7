@php
    $colors = [
        'cyan' => 'from-cyan-500 to-cyan-600',
        'blue' => 'from-blue-500 to-blue-600',
        'green' => 'from-green-500 to-green-600',
        'purple' => 'from-purple-500 to-purple-600',
    ];
    $bgColor = $colors[$color] ?? $colors['cyan'];
@endphp

<div class="bg-gradient-to-br {{ $bgColor }} rounded-xl shadow-lg p-6 text-white">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-sm font-medium mb-1">{{ $title }}</p>
            <p class="text-3xl font-bold">{{ $value }}</p>
        </div>
        <div class="bg-white/20 rounded-full p-3">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
        </div>
    </div>
</div>