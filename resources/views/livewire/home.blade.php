@section('body')
<div>
    <h1 class="text-3xl mb-2 font-bold dark:text-white">Recent Posts</h1>
    <hr>
    <ul class="divide-y divide-gray-200 dark:divide-gray-700">
        @foreach($recentPosts as $recentPost)
            <li class="py-4">
                <livewire:components.post :post="$recentPost"/>
            </li>
        @endforeach
    </ul>
    <div class="mx-auto text-center text-base font-medium leading-6 my-4">
        <a class="text-primary-500 hover:text-primary-600 dark:hover:text-primary-400" aria-label="all posts"
           href="/posts">Show All Posts
        </a>
    </div>
    @include('sections.newsletter')
</div>
@endsection
