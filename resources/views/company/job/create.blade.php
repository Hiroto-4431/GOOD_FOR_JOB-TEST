{{-- 会社用 求人作成画面 --}}
<x-app-layout>
    {{-- タイトル --}}
    <x-slot name="title">
        <h1 class="text-3xl">
            求人作成
        </h1>
    </x-slot>
    {{-- コンテンツ --}}
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <form method="POST" action="{{ route('company.job.store') }}" enctype="multipart/form-data">
        @csrf
        {{-- タイトル --}}
        <div class="mt-4 flex items-center">
            <x-label for="title" :value="__('タイトル')" class="w-1/4 text-black text-base" />
            <input id="title"
                class="block mt-1 w-3/4 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="text" name="title" value="{{ old('title') }}" placeholder="タイトル" required autofocus />
        </div>

        {{-- メッセージ --}}
        <div class="mt-4 flex items-center">
            <x-label for="message" :value="__('メッセージ')" class="w-1/4 text-black text-base" />
            <textarea name="message" id="message"
                class="block mt-1 w-3/4 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                placeholder="メッセージ" required>{{ old('message') }}</textarea>
        </div>

        {{-- 募集職種 --}}
        <div class="mt-4 flex items-center">
            <x-label for="occupation_id" :value="__('募集職種')" class="w-1/4 text-black text-base" />
            <select name="occupation_id" id="occupation_id"
                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-3/4"
                required>
                <option class="hidden" selected disabled>募集職種</option>
                @foreach ($occupations as $occupation)
                    <option value="{{ $occupation->id }}"
                        {{ old('occupation_id') == $occupation->id ? 'selected' : '' }}>{{ $occupation->name }}</option>
                @endforeach
            </select>
        </div>

        {{-- 雇用形態 --}}
        <div class="mt-4 flex items-center">
            <x-label for="employment_type_id" :value="__('雇用形態')" class="w-1/4 text-black text-base" />
            <select name="employment_type_id" id="employment_type_id"
                class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-3/4"
                required>
                <option class="hidden" selected disabled>雇用形態</option>
                @foreach ($employment_types as $employment_type)
                    <option value="{{ $employment_type->id }}"
                        {{ old('emlpoyment_type_id') == $employment_type->id ? 'selected' : '' }}>
                        {{ $employment_type->name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- イメージ --}}
        {{-- <div class="mt-4 flex items-center">
            <x-label for="image" :value="__('イメージ')" class="w-1/4 text-black text-base" />
            <x-input id="image" class="block mt-1 w-3/4" type="file" name="image" required />
        </div> --}}

        {{-- アクセス --}}
        <div class="mt-4 flex items-center">
            <x-label for="access" :value="__('アクセス')" class="w-1/4 text-black text-base" />
            <textarea name="access" id="access"
                class="block mt-1 w-3/4 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                placeholder="アクセス" required>{{ old('message') }}</textarea>
        </div>

        {{-- 給与 --}}
        <div class="mt-4 flex items-center">
            <x-label for="salary" :value="__('給与')" class="w-1/4 text-black text-base" />
            <textarea name="salary" id="salary"
                class="block mt-1 w-3/4 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                placeholder="給与" required>{{ old('message') }}</textarea>
        </div>

        {{-- 特徴 --}}
        {{-- <div class="mt-4 flex items-center">
            <x-label for="feature_id" :value="__('特徴')" class="w-1/4 text-black text-base" />
            <div class="w-3/4">
                @foreach ($features as $feature)
                    <label for="{{ $feature->id }}" class="inline-block">
                        <input type="checkbox" id="{{ $feature->id }}"
                            name="feature_id[]"><span>{{ $feature->name }}</span>
                    </label>
                @endforeach
            </div>
        </div> --}}


        {{-- 仕事内容 --}}
        <div class="mt-4 flex items-center">
            <x-label for="job_description" :value="__('仕事内容')" class="w-1/4 text-black text-base" />
            <textarea name="job_description" id="job_description"
                class="block mt-1 w-3/4 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                placeholder="仕事内容" required>{{ old('message') }}</textarea>
        </div>


        {{-- 公開設定 --}}
        <div class="mt-4 flex items-center">
            <x-label for="status" :value="__('公開設定')" class="w-1/4 text-black text-base" />
            <label for="public" class="block flex items-center">
                <input type="radio" id="public" name="status" value="1" class="block">
                <span class="ml-2 block">公開する</span>
            </label>
            <label for="private" class="ml-8 block flex items-center">
                <input type="radio" id="private" name="status" value="0" class="block">
                <span class="ml-2 block">非公開にする</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                登録する
            </button>
        </div>

    </form>
</x-app-layout>
