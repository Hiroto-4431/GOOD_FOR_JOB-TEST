{{-- ユーザー用 エントリー一覧画面 --}}
<x-app-layout>
    {{-- コンテンツ --}}
    <div>
        {{-- <x-flash-message status="info"></x-flash-message> --}}
        <table class="mt-4 mb-4 w-full rounded-lg border border-gray-400 border-solid block">
            <tbody class="w-full block">
                <tr class="border-b border-gray-400 border-solid block w-full flex">
                    <th class="text-center p-4 w-4/12">
                        <p>応募求人</p>
                    </th>
                    <th class="text-center p-4 w-4/12">
                        <p>企業名</p>
                    </th>
                    <th class="text-center p-4 w-4/12">
                        <p>メッセージ</p>
                    </th>
                </tr>
                @foreach ($entries as $entry)
                    @if (Auth::id() === $entry->user_id)
                        <tr class="border-b border-gray-400 border-solid block w-full flex items-center">
                            <td class="text-center p-4 w-4/12">
                                <p>
                                    @foreach ($jobs as $job)
                                        @if ($job->id === $entry->job_id)
                                            {{ $job->title }}
                                        @endif
                                    @endforeach
                                </p>
                            </td>
                            <td class="text-center p-4 w-4/12">
                                <p>
                                    @foreach ($companies as $company)
                                        @foreach ($jobs as $job)
                                            @if ($job->id === $entry->job_id)
                                                @if ($job->company_id === $company->id)
                                                    {{ $company->name }}
                                                @endif
                                            @endif
                                        @endforeach
                                    @endforeach
                                </p>
                            </td>

                            <td class="block text-left p-4 w-4/12 relative">

                                <a href="{{ route('user.message.show', ['message' => $entry->id]) }}"
                                    class="absolute left-1/2 top-1/2 -translate-x-2/4 -translate-y-2/4 items-center px-4 py-2 bg-red-500 rounded-md font-semibold text-white hover:bg-red-400 active:bg-red-600 focus:outline-none focus:border-red-600 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">メッセージ</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

    </div>
</x-app-layout>
