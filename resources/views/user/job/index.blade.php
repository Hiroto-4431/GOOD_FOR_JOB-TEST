{{-- ユーザー用 求人一覧画面 --}}
<x-app-layout>
    {{-- コンテンツ --}}
    @foreach ($jobs as $job)
        <a href="{{ route('user.job.show', ['job' => $job->id]) }}">
            <div class="mb-4 border-2 border-yellow-500 border-solid p-4 flex items-center">
                <!--写真-->
                <div class="w-1/3 mr-8 p-4">
                    @if (empty($job->image))
                        <img src="{{ asset('images/NoImage.png') }}" alt="">
                    @else
                        <img src="" alt="">
                    @endif
                </div>
                <!--テキスト-->
                <div>
                    <p class="text-2xl">{{ $job->title }}</p>
                    <p>
                        職種：
                        @foreach ($occupations as $occupation)
                            @if ($job->occupation_id === $occupation->id)
                                {{ $occupation->name }}
                            @endif
                        @endforeach
                    </p>
                </div>
            </div>
        </a>
    @endforeach
</x-app-layout>
