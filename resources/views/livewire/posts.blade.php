@section('title')
    My Coding Journey | Posts
@endsection

@section('body')
    <h1 class="text-4xl font-bold dark:text-white">All Posts</h1>
    <hr class="my-4">
    <ul class="divide-y divide-gray-200 dark:divide-gray-700">
        @forelse($posts as $post)
            <li class="py-4">
                <livewire:components.post :post="$post"/>
            </li>
        @empty
            No Posts Found.
        @endforelse
    </ul>
    {{ $posts->links() }}
@endsection
