{{-- 会社用 応募者一覧画面 --}}
<x-app-layout>
    {{-- タイトル --}}
    <x-slot name="title">
        <h1 class="text-3xl">
            応募者一覧
        </h1>
    </x-slot>
    {{-- コンテンツ --}}
    <div>
        {{-- <x-flash-message status="info"></x-flash-message> --}}
        <table class="mt-4 mb-4 w-full rounded-lg border border-gray-400 border-solid block">
            <tbody class="w-full block">
                <tr class="border-b border-gray-400 border-solid block w-full flex">
                    <th class="text-center p-4 w-4/12">
                        <p>応募者名</p>
                    </th>
                    <th class="text-center p-4 w-4/12">
                        <p>応募求人</p>
                    </th>
                    <th class="text-center p-4 w-4/12">
                        <p>メッセージ</p>
                    </th>
                </tr>
                @foreach ($entries as $entry)
                    <tr class="border-b border-gray-400 border-solid block w-full flex items-center">
                        <td class="text-center p-4 w-4/12">
                            <p>
                                @foreach ($users as $user)
                                    @if ($user->id === $entry->user_id)
                                        {{ $user->family_name }}
                                        {{ $user->last_name }}
                                    @endif
                                @endforeach
                            </p>
                        </td>
                        <td class="text-center p-4 w-4/12">
                            <p>
                                @foreach ($jobs as $job)
                                    @if ($job->id === $entry->job_id)
                                        {{ $job->title }}
                                    @endif
                                @endforeach
                            </p>
                        </td>
                        <td class="block text-left p-4 w-4/12">
                            <button onclick="location.href='{{ route('company.entry.edit', ['entry' => $entry->id]) }}'"
                                class="inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-base text-white uppercase tracking-widest hover:bg-red-400 active:bg-red-600 focus:outline-none focus:border-red-600 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">メッセージ</button>
                            <form id="delete_{{ $entry->id }}"
                                action="{{ route('company.entry.destroy', ['entry' => $entry->id]) }}" method="POST"
                                class="inline">
                                @csrf
                                @method('delete')
                                <a href="#" data-id="{{ $entry->id }}" onclick="deletePost(this)"
                                    class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-base text-white uppercase tracking-widest hover:bg-blue-400 active:bg-blue-600 focus:outline-none focus:border-red-600 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">削除</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>


    <script>
        function deletePost(e) {
            'use strict';
            if (confirm('本当に削除してもよろしいですか？')) {
                document.getElementById('delete_' + e.dataset.id).submit();
            }
        }
    </script>
</x-app-layout>
