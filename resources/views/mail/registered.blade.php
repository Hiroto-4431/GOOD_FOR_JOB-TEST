@component('mail::message')
    # Introduction

    {{ $user_family_name }}{{ $user_last_name }}さん
    エントリーされました。

    @component('mail::button', ['url' => ''])
        Button Text
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
