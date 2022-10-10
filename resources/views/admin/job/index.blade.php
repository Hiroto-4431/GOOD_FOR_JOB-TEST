{{-- 会社用 求人作成画面 --}}
<x-app-layout>
    {{-- タイトル --}}
    <x-slot name="title">
        <h1 class="text-3xl">
            求人一覧
        </h1>
    </x-slot>
    {{-- コンテンツ --}}
    <table class="mt-4 mb-4 w-full rounded-lg border border-gray-400 border-solid block">
        <tbody class="w-full block">
            <tr class="border-b border-gray-400 border-solid block w-full flex">
                <th class="text-center p-4 w-2/12">
                    <p>タイトル</p>
                </th>
                <th class="text-center p-4 w-3/12">
                    <p>募集企業</p>
                </th>
                <th class="text-center p-4 w-2/12">
                    <p>募集職種</p>
                </th>
                <th class="text-center p-4 w-2/12">
                    <p>公開状況</p>
                </th>
                <th class="text-center p-4 w-3/12">
                    <p>設定</p>
                </th>
            </tr>
            @foreach ($jobs as $job)
                <tr class="border-b border-gray-400 border-solid block w-full flex items-center">
                    <td class="text-center p-4 w-2/12">
                        <p>{{ $job->title }}</p>
                    </td>
                    <td class="text-center p-4 w-3/12">
                        <p>
                            @foreach ($companies as $company)
                                @if ($job->company_id === $company->id)
                                    {{ $company->name }}
                                @endif
                            @endforeach
                        </p>
                    </td>
                    <td class="text-center p-4 w-2/12">
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
                    <td class="block text-center p-4 w-3/12">
                        <button onclick="location.href='{{ route('company.job.edit', ['job' => $job->id]) }}'"
                            class="inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-base text-white uppercase tracking-widest hover:bg-red-400 active:bg-red-600 focus:outline-none focus:border-red-600 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">編集</button>
                        <form id="delete_{{ $job->id }}"
                            action="{{ route('admin.company.destroy', ['company' => $job->id]) }}" method="POST"
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


</x-app-layout>
