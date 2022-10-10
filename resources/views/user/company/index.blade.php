{{-- ユーザー用 企業一覧画面 --}}
<x-app-layout>
    {{-- コンテンツ --}}
    @foreach ($companies as $company)
        <a href="{{ route('user.company.show', ['company' => $company->id]) }}">
            <div class="mb-4 border-2 border-yellow-500 border-solid p-4 flex items-center">
                <!--写真-->
                <div class="w-1/3 mr-8 p-4">
                    @if (empty($company->image))
                        <img src="{{ asset('images/NoImage.png') }}" alt="">
                    @else
                        <img src="" alt="">
                    @endif
                </div>
                <!--テキスト-->
                <div>
                    <p class="text-2xl">{{ $company->name }}</p>
                </div>
            </div>
        </a>
    @endforeach

</x-app-layout>
