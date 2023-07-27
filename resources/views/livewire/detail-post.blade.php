@section('title')
    {{ $post->title }} | {{ $post->summary }}
@endsection
@section('meta')
    <meta name="{{ $post->title }}" content="{{ $post->summary }}">
@endsection

@section('body')
    <article>
        <h1>{{ $post->title }}</h1>
        <i class="ri-time-line">
            <time datetime="{{ $post->created_at->format('Y m d') }}">{{ $post->created_at->diffForHumans() }}</time>
        </i>
        @if($post->cover)
            <img class="mx-auto py-8" src="{{ $post->cover }}" alt="{{ $post->summary }}"/>
        @endif
        <section>{!! Illuminate\Mail\Markdown::parse($post->content) !!}</section>
        <br>
        <div>
            @if($post->tags->count())
                <span class="mr-2">Tags: </span>
                @foreach($post->tags as $tag)
                    <livewire:components.tag :tag="$tag"/>
                @endforeach
            @endif
        </div>
    </article>
@endsection
