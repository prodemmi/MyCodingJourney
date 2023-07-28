@section('title')
    My Coding Journey | Tags
@endsection

@section('body')
    <h1 class="text-4xl mb-2 font-bold dark:text-white">Tags</h1>
    <hr class="my-4">
    <div class="text-justify word-wrap">
        @foreach($tags as $tag)
            <livewire:components.tag :tag="$tag" :count="$tag->posts->count()">
        @endforeach
    </div>
@endsection
