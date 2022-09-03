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

            <!-- 業界 -->
            <div class="mt-4">
                <x-label for="industry" :value="__('業界')" />
                <select id="industry"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    name="industry">
                    <option class="hidden" selected disabled>選択してください</option>
                    @foreach ($industries as $industry)
                        <option value="{{ $industry->id }}" @if ($industry->id === (int) old('industry_id')) selected @endif>
                            {{ $industry->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- 住所 -->
            {{-- <div class="mt-4">
                <x-label for="prefecture" :value="__('住所')" />
                <select id="prefecture"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    name="prefecture">
                    <option value="" selected disabled>都道府県</option>
                    @foreach ($prefectures as $prefecture)
                        <option value="{{ $prefecture->id }}">{{ $prefecture->name }}</option>
                    @endforeach
                </select>

                <x-label for="city" :value="__('')" />
                <select id="city"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"
                    name="city">
                    <option value="" selected disabled>市区町村</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>

                <x-label for="address" :value="__('')" />
                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
                    placeholder="町名番地" required autofocus />
            </div> --}}

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
