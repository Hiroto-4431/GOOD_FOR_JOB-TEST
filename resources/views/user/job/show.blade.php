{{-- ユーザー用 企業詳細画面 --}}
<x-app-layout>
    {{-- コンテンツ --}}
    <div class="">
        <div class="mb-8 border-4 border-solid rounded-2xl border-yellow-500 p-8">
            <p class="text-center text-3xl">{{ $job->title }}</p>
            <p class="text-center text-md mt-8">
                職種：
                @foreach ($occupations as $occupation)
                    @if ($job->occupation_id === $occupation->id)
                        {{ $occupation->name }}
                    @endif
                @endforeach
            </p>
        </div>

        <x-flash-message status="info" />

        <div class="mb-8">
            @if (empty($job->image))
                <img src="{{ asset('images/NoImage.png') }}" alt="">
            @else
                <img src="{{ asset('storage/job/' . $job->image) }}" alt="">
            @endif
        </div>

        <table class="block">
            <tbody class="block">
                <tr class="block flex bg-gray-200 p-4">
                    <th class="block w-1/4">
                        <p>募集元企業</p>
                    </th>
                    <td class="block w-3/4">
                        <p>
                            @foreach ($companies as $company)
                                @if ($job->company_id === $company->id)
                                    {{ $company->name }}
                                @endif
                            @endforeach
                        </p>
                    </td>
                </tr>
                <tr class="block flex p-4">
                    <th class="block w-1/4">
                        <p>メッセージ</p>
                    </th>
                    <td class="block w-3/4">
                        <p>
                            {{ $job->message }}
                        </p>
                    </td>
                </tr>
                <tr class="block flex bg-gray-200 p-4">
                    <th class="block w-1/4">
                        <p>雇用形態</p>
                    </th>
                    <td class="block w-3/4">
                        <p>
                            @foreach ($employments as $employment)
                                @if ($job->employment_type_id === $employment->id)
                                    {{ $employment->name }}
                                @endif
                            @endforeach
                        </p>
                    </td>
                </tr>
                <tr class="block flex p-4">
                    <th class="block w-1/4">
                        <p>アクセス</p>
                    </th>
                    <td class="block w-3/4">
                        <p>{{ $job->access }}</p>
                    </td>
                </tr>
                <tr class="block flex p-4 bg-gray-200">
                    <th class="block w-1/4">
                        <p>給与</p>
                    </th>
                    <td class="block w-3/4">
                        <p>{{ $job->salary }}</p>
                    </td>
                </tr>

                <tr class="block flex p-4 bg-gray-200">
                    <th class="block w-1/4">
                        <p>仕事内容</p>
                    </th>
                    <td class="block w-3/4">
                        <p>{{ $job->job_description }}</p>
                    </td>
                </tr>
            </tbody>
        </table>
        <form class="block mt-20" action="{{ route('user.job.entry', ['job' => $job->id]) }}" method="POST">
            @csrf
            <input type="hidden" name="room" value="{{ $job->id }}">
            <button
                class="block mx-auto text-block bg-yellow-500 border-1 py-2 px-8 focus:outline-none hover:bg-yellow-600 rounded text-lg">エントリーする</button>
        </form>
    </div>

</x-app-layout>
