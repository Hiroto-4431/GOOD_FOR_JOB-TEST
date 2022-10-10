<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div>
            <p>企業用 登録画面</p>
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('company.register') }}">
            @csrf

            <!-- 企業名 -->
            <div class="mt-4">
                <x-label for="name" :value="__('企業名')" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    placeholder="企業名" required autofocus />
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

            <!-- 代表者(姓) -->
            <div class="mt-4">
                <x-label for="president_family_name" :value="__('代表者(姓)')" />
                <x-input id="president_family_name" class="block mt-1 w-full" type="text"
                    name="president_family_name" :value="old('president_family_name')" placeholder="姓" required />
            </div>

            <!-- 代表者(名) -->
            <div class="mt-4">
                <x-label for="president_last_name" :value="__('代表者(名)')" />
                <x-input id="president_last_name" class="block mt-1 w-full" type="text" name="president_last_name"
                    :value="old('president_last_name')" placeholder="名" required />
            </div>

            <!-- 代表者(セイ) -->
            <div class="mt-4">
                <x-label for="president_family_name_read" :value="__('代表者(セイ)')" />
                <x-input id="president_family_name_read" class="block mt-1 w-full" type="text"
                    name="president_family_name_read" :value="old('president_family_name_read')" placeholder="セイ" required />
            </div>

            <!-- 代表者(メイ) -->
            <div class="mt-4">
                <x-label for="president_last_name_read" :value="__('代表者(メイ)')" />
                <x-input id="president_last_name_read" class="block mt-1 w-full" type="text"
                    name="president_last_name_read" :value="old('president_last_name_read')" placeholder="メイ" required />
            </div>

            <!-- 業界 -->
            <div class="mt-4">
                <x-label for="industry_id" :value="__('業界')" />
                <select id="industry_id"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    name="industry_id">
                    <option class="hidden" selected disabled>選択してください</option>
                    @foreach ($industries as $industry)
                        <option value="{{ $industry->id }}" @if ($industry->id === old('industry_id')) selected @endif>
                            {{ $industry->name }}</option>
                    @endforeach
                </select>
            </div>


            <!-- 電話番号 -->
            <div class="mt-4">
                <x-label for="phone" :value="__('電話番号')" />
                <x-input id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')"
                    placeholder="半角数字のみでご記入ください" required />
            </div>

            <!-- 従業員数 -->
            <div class="mt-4">
                <x-label for="employee" :value="__('従業員数')" />
                <div class="flex items-center">
                    <x-input id="employee" class="block mt-1 w-3/4" type="number" name="employee" :value="old('employee')"
                        placeholder="10" required />
                    <div class="ml-4">
                        <p>人</p>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('company.login') }}">
                    {{ __('既に登録されている方はこちら') }}
                </a>

                <x-button class="ml-4">
                    {{ __('登録する') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
