<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-x-4">
            <a href="{{ route('threads') }}">
                <img src="/left_arrow.png" width="30" height="30" alt="">
            </a>&emsp;
            <div class="max-w-4x1">
                <h1 class="font-semibold text-xl text-gray-800 leading-tight">{{ $thread->title }}</h1>
            </div>
        </div>
    </x-slot>
    
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200">
            @if ($comments->count())
                @foreach ($comments as $comment)
                <x-comment-card :comment="$comment" />
                @endforeach
            @else
                No comments
            @endif
            
            <form action="{{ route('comments.store', $thread) }}" method="POST" class="m-4">
                @csrf
                <label for="body">{{ __('Comment') }}</label>
                <textarea name="body" id="body" cols="30" rows="4" class="w-full rounded-lg border-2 bg-gray-100 @error('comment') border-red-500 @enderror"></textarea>
                <div class="mt-4">
                                <button type="submit" class"bg-bule-500 rounded font-medium px-4 py-2 text-white">{{ __('Submit') }}</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</x-app-layout>