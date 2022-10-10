<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div>
            <p>ユーザー用 登録画面</p>
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('user.register') }}">
            @csrf

            <!-- 名前(姓) -->
            <div class="my-4">
                <x-label for="family_name" :value="__('名前(姓)')" />
                <x-input id="family_name" class="block mt-1 w-full" type="text" name="family_name" :value="old('family_name')"
                    placeholder="姓" required autofocus />
            </div>

            <!-- 名前(名) -->
            <div class="my-4">
                <x-label for="last_name" :value="__('名前(名)')" />
                <x-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')"
                    placeholder="名" required autofocus />
            </div>

            <!-- 名前(セイ) -->
            <div class="my-4">
                <x-label for="family_name_read" :value="__('名前(セイ)')" />
                <x-input id="family_name" class="block mt-1 w-full" type="text" name="family_name_read"
                    :value="old('family_name_read')" placeholder="セイ" required autofocus />
            </div>

            <!-- 名前(メイ) -->
            <div class="my-4">
                <x-label for="last_name_read" :value="__('名前(メイ)')" />
                <x-input id="last_name_read" class="block mt-1 w-full" type="text" name="last_name_read"
                    :value="old('last_name_read')" placeholder="メイ" required autofocus />
            </div>

            <!-- メールアドレス -->
            <div class="mt-4">
                <x-label for="email" :value="__('メールアドレス')" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    placeholder="メールアドレス" required />
            </div>

            <!-- パスワード -->
            <div class="mt-4">
                <x-label for="password" :value="__('パスワード')" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                    placeholder="半角英数字8文字以上でご記入ください" required autocomplete="new-password" />
            </div>

            <!-- パスワード(確認) -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('パスワード(確認)')" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" placeholder="半角英数字8文字以上でご記入ください" required />
            </div>

            <!-- 電話番号 -->
            <div class="mt-4">
                <x-label for="phone" :value="__('電話番号')" />
                <x-input id="phone" class="block mt-1 w-full" type="tel" name="phone"
                    placeholder="半角数字のみでご記入ください" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('user.login') }}">
                    {{ __('すでにご登録の方はこちら') }}
                </a>

                <x-button class="ml-4">
                    {{ __('登録する') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
