@props(['status' => 'info'])

@php
if ($status === 'info') {
    $bgColor = 'bg-blue-300';
}
if ($status === 'error') {
    $bgColor = 'bg-red-500';
}
@endphp

@if (session('message'))
    <div class="{{ $bgColor }} w-full p-2 text-center">
        {{ session('message') }}
    </div>
@endif
