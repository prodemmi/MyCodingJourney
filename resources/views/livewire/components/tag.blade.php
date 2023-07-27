<span class="tag">
    <a href="/posts?tag={{ $tag->slug }}">
    {{ $tag->title }}
</a>
    @if($count)
        <span class="text-black">({{ $count }})</span>
    @endunless
</span>
