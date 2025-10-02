@props(['width' => '7xl'])

{{-- 
@php
switch ($width) {
    case '7xl':
        $width = 'max-w-7xl';          
        break;    
    default:
        # code...
        break;
}    
@endphp
--}}


<div {{ $attributes->merge(['class' => $width . ' max-w- mx-auto px-4 sm:px-6 lg:px-8']) }}>
    {{ $slot }}
</div>