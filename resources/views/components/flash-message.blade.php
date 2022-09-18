@props(['status' => 'info'])

@php
if ($statys === 'info') {
    $bgColor = 'bg-blue-300';
}
if ($statys === 'error') {
    $bgColor = 'bg-red-500';
}
@endphp

@if (session('message'))
    <div class="{{ $bgColor }} w-1/2 p-2 text-white text-center">
        {{ session('message') }}
    </div>
@endif
