@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex items-center px-1 pt-1 border-b-2 border-orange-400 font-semibold leading-5 text-orange-400 focus:outline-none focus:border-orange-700 transition'
: 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-semibold leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
  {{ $slot }}
</a>