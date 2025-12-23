@props(['disabled' => false, 'rows' => 4])

<textarea {{ $disabled ? 'disabled' : '' }} rows="{{ $rows }}" {!! $attributes->merge(['class' => 'block w-full px-3 py-2 rounded-lg border-gray-200 bg-gray-50 text-brand-primary text-sm focus:bg-white focus:ring-2 focus:ring-brand-primary focus:border-transparent transition-all duration-200 outline-none resize-none']) !!}></textarea>
