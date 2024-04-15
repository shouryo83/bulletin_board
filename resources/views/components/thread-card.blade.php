@props(['thread' => $thread])

<div class="vorder-b-2 p-2">
    <a href="{{ route('threads.show', $thread) }}" class="p-4 block grid bg-white sm:rounded-lg border-1 shadow-sm">
        <span>
            {{ $thread->title }}
        </span>
        <span class="text-gray-600 text-sm">
            {{ $thread->created_at->diffForHumans() }}
        </span>
    </a>
    @can('delete', $thread)
         <form action="{{ route('threads.destory', $thread) }}" method="post" class="mt-2">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-bulu-500">{{ __('Delete') }}</button>
        </form>
    @endcan
</div>