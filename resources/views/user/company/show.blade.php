{{-- ユーザー用 企業詳細画面 --}}
<x-app-layout>
    {{-- コンテンツ --}}
    <div class="">
        <div class="mb-8 border-4 border-solid rounded-2xl border-yellow-500 p-8">
            <p class="text-center text-3xl">{{ $company->name }}</p>
            <p class="text-center text-md mt-8">
                業界：
                @foreach ($industries as $industry)
                    @if ($company->industry_id === $industry->id)
                        {{ $industry->name }}
                    @endif
                @endforeach
            </p>
        </div>
        <table class="block">
            <tbody class="block">
                <tr class="block flex bg-gray-200 p-4">
                    <th class="block w-1/4">
                        <p>会社名</p>
                    </th>
                    <td class="block w-3/4">
                        <p>{{ $company->name }}</p>
                    </td>
                </tr>
                <tr class="block flex p-4">
                    <th class="block w-1/4">
                        <p>業界</p>
                    </th>
                    <td class="block w-3/4">
                        <p>
                            @foreach ($industries as $industry)
                                @if ($company->industry_id === $industry->id)
                                    {{ $industry->name }}
                                @endif
                            @endforeach
                        </p>
                    </td>
                </tr>
                <tr class="block flex bg-gray-200 p-4">
                    <th class="block w-1/4">
                        <p>代表者名</p>
                    </th>
                    <td class="block w-3/4">
                        <p>
                            {{ $company->president_family_name }}
                            {{ $company->president_last_name }}
                        </p>
                    </td>
                </tr>
                <tr class="block flex p-4">
                    <th class="block w-1/4">
                        <p>従業員数</p>
                    </th>
                    <td class="block w-3/4">
                        <p>{{ $company->employee }}人</p>
                    </td>
                </tr>
            </tbody>
        </table>
        {{-- <div class="">
            @if (empty($company->image))
                <img src="{{ asset('images/NoImage.png') }}" alt="">
            @else
                <img src="" alt="">
            @endif
        </div> --}}
    </div>

</x-app-layout>
