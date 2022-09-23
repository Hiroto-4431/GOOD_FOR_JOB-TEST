{{-- 会社用 求人一覧画面 --}}
<x-app-layout>
    {{-- タイトル --}}
    <x-slot name="title">
        <h1 class="text-3xl">
            求人一覧
        </h1>
    </x-slot>
    {{-- コンテンツ --}}
    <div>
        {{-- <x-flash-message status="info"></x-flash-message> --}}
        <button onclick="location.href='{{ route('company.job.create') }}'"
            class="ml-auto mr-0 block items-center px-12 py-2 border border-black rounded-md  text-base text-black font-normal uppercase tracking-widest hover:bg-gray-200 active:bg-gray-600 focus:outline-none focus:border-gray-600 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ">新規作成</button>
    </div>
    <table class="mt-4 mb-4 w-full rounded-lg border border-gray-400 border-solid block">
        <tbody class="w-full block">
            <tr class="border-b border-gray-400 border-solid block w-full flex">
                <th class="text-center p-4 w-4/12">
                    <p>タイトル</p>
                </th>
                <th class="text-center p-4 w-3/12">
                    <p>募集職種</p>
                </th>
                <th class="text-center p-4 w-2/12">
                    <p>公開</p>
                </th>
                <th class="text-center p-4 w-2/12">
                    <p>応募数</p>
                </th>
                <th class="text-center p-4 w-3/12">
                    <p>設定</p>
                </th>
            </tr>
            @foreach ($jobs as $job)
                @if (Auth::id() == $job->company_id)
                    <tr class="border-b border-gray-400 border-solid block w-full flex items-center">
                        <td class="text-center p-4 w-4/12">
                            <p>{{ $job->title }}</p>
                        </td>
                        <td class="text-center p-4 w-3/12">
                            <p>
                                @foreach ($occupations as $occupation)
                                    @if ($job->occupation_id === $occupation->id)
                                        {{ $occupation->name }}
                                    @endif
                                @endforeach
                            </p>
                        </td>
                        <td class="text-center p-4 w-2/12">
                            <p>
                                @if ($job->status === 1)
                                    公開
                                @endif
                                @if ($job->status === 0)
                                    非公開
                                @endif
                            </p>
                        </td>
                        <td class="text-center p-4 w-2/12">
                            <p>
                                {{-- {{ $test }} --}}

                                {{-- @foreach ($entries as $entry)
                                    @if ($entry->job_id === $job->id)
                                        {{ $entry }}
                                    @endif
                                @endforeach --}}
                            </p>
                        </td>
                        <td class="block text-left p-4 w-3/12">
                            <button onclick="location.href='{{ route('company.job.edit', ['job' => $job->id]) }}'"
                                class="inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-base text-white uppercase tracking-widest hover:bg-red-400 active:bg-red-600 focus:outline-none focus:border-red-600 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">編集</button>
                            <form id="delete_{{ $job->id }}"
                                action="{{ route('company.job.destroy', ['job' => $job->id]) }}" method="POST"
                                class="inline">
                                @csrf
                                @method('delete')
                                <a href="#" data-id="{{ $job->id }}" onclick="deletePost(this)"
                                    class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-base text-white uppercase tracking-widest hover:bg-blue-400 active:bg-blue-600 focus:outline-none focus:border-red-600 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">削除</a>
                            </form>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    {{ $jobs->links() }}
    <script>
        function deletePost(e) {
            'use strict';
            if (confirm('本当に削除してもよろしいですか？')) {
                document.getElementById('delete_' + e.dataset.id).submit();
            }
        }
    </script>
</x-app-layout>
