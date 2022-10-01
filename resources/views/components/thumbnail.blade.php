@php
if ($type === 'job') {
    $path = 'storage/job/';
}
if ($type === 'company') {
    $path = 'storage/company/';
}
@endphp

<div class="block mt-1 w-3/4">
    @if (empty($image))
        <img src="{{ asset('images/NoImage.png') }}">
    @else
        <img src="{{ asset($path . $image) }}">
    @endif
</div>
