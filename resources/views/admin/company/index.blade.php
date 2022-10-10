{{-- 会社用 求人作成画面 --}}
<x-app-layout>
    {{-- タイトル --}}
    <x-slot name="title">
        <h1 class="text-3xl">
            企業一覧
        </h1>
    </x-slot>
    {{-- コンテンツ --}}
    <table class="mt-4 mb-4 w-full rounded-lg border border-gray-400 border-solid block">
        <tbody class="w-full block">
            <tr class="border-b border-gray-400 border-solid block w-full flex">
                <th class="text-center p-4 w-1/12">
                    <p>id</p>
                </th>
                <th class="text-center p-4 w-5/12">
                    <p>企業名</p>
                </th>
                {{-- <th class="text-center p-4 w-2/12">
                    <p>求人数</p>
                </th> --}}
                <th class="text-center p-4 w-3/12">
                    <p>登録日</p>
                </th>
                <th class="text-center p-4 w-3/12">
                    <p>設定</p>
                </th>
            </tr>
            @foreach ($companies as $company)
                <tr class="border-b border-gray-400 border-solid block w-full flex items-center">
                    <td class="text-center p-4 w-1/12">
                        <p>{{ $company->id }}</p>
                    </td>
                    <td class="text-center p-4 w-5/12">
                        <p>{{ $company->name }}</p>
                    </td>
                    {{-- <td class="text-center p-4 w-2/12">
                        <p>00</p>
                    </td> --}}
                    <td class="text-center p-4 w-3/12">
                        <p>{{ $company->created_at }}</p>
                    </td>
                    <td class="block text-center p-4 w-3/12">
                        <form id="delete_{{ $company->id }}"
                            action="{{ route('admin.job.destroy', ['job' => $job->id]) }}" method="POST"
                            class="inline">
                            @csrf
                            @method('delete')
                            <a href="#" data-id="{{ $job->id }}" onclick="deletePost(this)"
                                class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-base text-white uppercase tracking-widest hover:bg-blue-400 active:bg-blue-600 focus:outline-none focus:border-red-600 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">削除</a>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script>
        function deletePost(e) {
            'use strict';
            if (confirm('本当に削除してもよろしいですか？')) {
                document.getElementById('delete_' + e.dataset.id).submit();
            }
        }
    </script>


</x-app-layout>
