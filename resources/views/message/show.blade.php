<x-app-layout>
    <x-slot name="title">
        <h1 class="text-3xl">
            メッセージ一覧
        </h1>
    </x-slot>
    {{-- コンテンツ --}}
    <div class="bg-slate-200 border-2 border-solid border-inherit p-8 relative">
        <div class="mb-20">
            <div class="mb-12">
                <span class="p-4 bg-amber-300">ここにメッセージが表示されます</span>
            </div>
            <div class="mb-12">
                <span class="p-4 bg-amber-300">ここにメッセージが表示されます</span>
            </div>
            @foreach ($messages as $message)
                <div class="mb-12">
                    <span class="p-4 bg-amber-300">{{ $message->content }}</span>
                </div>
            @endforeach
        </div>

        <div class="w-3/4 absolute bottom-2 left-1/2 -translate-x-2/4 flex justify-between items-center">
            <form method="POST"
                @if (auth('users')->user()) action="{{ route('user.message.show', ['message' => $entry->id]) }}" @endif
                @if (auth('companies')->user()) action="{{ route('company.message.show', ['message' => $entry->id]) }}" @endif
                class="block w-full">
                @method('PUT')
                @csrf
                <input type="hidden" name="user_identifier" value={{ $user_identifier }}>
                <input name="content" type="textarea" class="w-9/12 p-2" required>
                <input type="submit" class="w-2/12 p-2 border-2 border-solid border-black cursor-pointer">
            </form>
        </div>
    </div>

</x-app-layout>
