@section('title')
    My Coding Journey | Tags
@endsection

@section('body')
    <div class="text-justify word-wrap">
        @foreach($tags as $tag)
            <livewire:components.tag :tag="$tag" :count="$tag->posts->count()">
        @endforeach
    </div>
@endsection
