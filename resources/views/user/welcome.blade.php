<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <header class="bg-white h-20 relative shadow-md relative">
        <a href="/dashboard" class="absolute left-24 top-1/2 -translate-y-2/4">
            <x-application-logo></x-application-logo>
        </a>
        <div class="flex items-center absolute right-24 top-1/2 -translate-y-2/4">
            <div class="mr-4">
                <a href="{{ url('/company') }}"
                    class="text-sm text-black-700 dark:text-black-500 underline pb-2">企業一覧</a>
            </div>
            <div class="mr-4">
                <a href="{{ url('/job') }}" class="text-sm text-black-700 dark:text-black-500 underline pb-2">求人一覧</a>
            </div>
            @if (Route::has('user.login'))
                <div class="">
                    @auth('users')
                        {{-- <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --}}

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('user.logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('user.logout')"
                                onclick="event.preventDefault();this.closest('form').submit();" class="text-black">
                                {{ __('ログアウト') }}
                            </x-dropdown-link>
                        </form>
                    @else
                        <a href="{{ route('user.login') }}"
                            class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a>
                        @if (Route::has('user.register'))
                            <a href="{{ route('user.register') }}"
                                class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">新規登録</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

    </header>
    <main class="main">
        <div class="m-12">
            <div class="mt-8 p-4">
                {{-- {{ $slot }} --}}
            </div>
        </div>
    </main>

</body>

</html>
