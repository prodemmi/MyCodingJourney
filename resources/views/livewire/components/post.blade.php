<article>
    <div class="space-y-2 xl:grid xl:grid-cols-4 xl:items-start xl:space-y-0">
        <div class="space-y-5 xl:col-span-3">
            <div class="flex justify-between">
                <h2 class="text-2xl font-bold leading-8 tracking-tight">{{ $post->title }}</h2>
                <i class="ri-time-line">
                    <time
                        datetime="{{ $post->created_at->format('Y m d') }}">{{ $post->created_at->diffForHumans() }}</time>
                </i>
            </div>
            <div class="prose min-h-12 max-w-none text-gray-500 dark:text-gray-400">{{ $post->summary }}</div>
            <div class="flex justify-between">
                <div>
                    @if($post->tags->count())
                        <span class="mr-2">Tags: </span>
                        @foreach($post->tags as $tag)
                            <livewire:components.tag :tag="$tag"/>
                        @endforeach
                    @endif
                </div>
                <div class="flex justify-between mr-2">
                    <div class="text-base font-medium leading-6">
                        <a class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400"
                           href="/posts/{{ $post->slug }}">
                            Read more →
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <img class="rounded-md m-auto" src="{{ $post->cover }}" alt="{{ $post->summary }}" width="200" height="200">
    </div>
</article>
