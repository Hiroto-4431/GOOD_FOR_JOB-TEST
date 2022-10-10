<x-app-layout>
    <x-slot name="title">
        <h1 class="text-3xl">
            メッセージ一覧
        </h1>
    </x-slot>
    {{-- コンテンツ --}}
    <p>{{ $entry->id }}</p>
    <div class="bg-slate-200 border-2 border-solid border-inherit p-8 relative">
        <div class="mb-20">

            @foreach ($messages as $message)
                @if ($entry->id === $message->entry_id)
                    <div class="mb-12">
                        <span class="p-4 bg-amber-300">{{ $message->content }}</span>
                    </div>
                @endif
            @endforeach
        </div>

        <div class="w-3/4 absolute bottom-2 left-1/2 -translate-x-2/4 flex justify-between items-center">
            <form method="POST"
                @if (auth('users')->user()) action="{{ route('user.message.store', ['message' => $entry->id]) }}" @endif
                @if (auth('companies')->user()) action="{{ route('company.message.store') }}" @endif
                class="block w-full">
                @csrf

                {{-- 1 = ユーザー側 / 2 = 企業側 --}}
                @if (auth('users')->user())
                    <input name="send_by" type="hidden" value="1">
                    <input name="receive_by" type="hidden" value="2">
                @elseif(auth('companies')->user())
                    <input name="send_by" type="hidden" value="2">
                    <input name="receive_by" type="hidden" value="1">
                @endif

                <input name="entry_id" type="hidden" value="{{ $entry->id }}">

                <input name="content" type="textarea" class="w-9/12 p-2" required>
                <input type="submit" class="w-2/12 p-2 border-2 border-solid border-black cursor-pointer">
            </form>
        </div>
    </div>

</x-app-layout>
