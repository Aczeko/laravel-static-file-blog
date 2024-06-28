<article class="prose">
    <h2 class="not-prose">
        <a href="{{ route('posts.show', $post->slug) }}" class="hover:text-blue-500 transition-colors duration-100">{{ $post->title }}</a>
    </h2>
    <div>{{ $post->teaser }}</div>
    <x-post-meta :post="$post" />
</article>
