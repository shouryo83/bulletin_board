<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-x-4">
            <a href="{{ route('threads') }}">
                <img src="/left_arrow.png" width="30" height="30" alt="">
            </a>
            <div class="max-w-4x1">
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">{{ $thread->title }}</h1>
            </div>
        </div>
    </x-slot>
    
    <div class="pt-6 max-w-4x1 mx-auto grid bg-white mt-4">
        @if ($comments->count())
            @foreach ($comments as $comment)
            <x-comment-card :comment="$comment" />
            @endforeach
        @else
            No comments
        @endif
    </div>
</x-app-layout>