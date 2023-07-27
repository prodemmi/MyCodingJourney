@section('title')
    My Coding Journey | Posts
@endsection

@section('body')
    <h1 class="text-3xl mb-2 font-bold dark:text-white">All Posts</h1>
    <hr>
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
