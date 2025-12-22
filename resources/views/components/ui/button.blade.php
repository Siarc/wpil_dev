@props([
    'variant' => 'primary',
    'href' => null,
])

@php
    $baseClasses = 'inline-flex items-center px-6 py-3 border border-transparent text-sm font-bold rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 transition-all duration-200 transform hover:-translate-y-0.5';
    
    $variants = [
        'primary' => 'text-white bg-brand-primary hover:bg-opacity-90 focus:ring-brand-primary',
        'secondary' => 'text-white bg-brand-secondary hover:bg-opacity-90 focus:ring-brand-secondary',
        'outline' => 'text-brand-primary bg-transparent border-brand-primary hover:bg-brand-primary hover:text-white focus:ring-brand-primary',
        'surface' => 'text-brand-primary bg-brand-surface hover:bg-gray-50 focus:ring-brand-primary',
        'whatsapp' => 'text-white bg-[#25D366] hover:bg-opacity-90 focus:ring-[#25D366]',
    ];

    $classes = $baseClasses . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

@if($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['type' => 'button', 'class' => $classes]) }}>
        {{ $slot }}
    </button>
@endif
