@props(['for'])

<label {{ $attributes->merge(['class' => 'block text-xs font-bold text-brand-primary mb-1', 'for' => $for]) }}>
    {{ $slot }}
</label>
