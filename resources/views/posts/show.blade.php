<x-app-layout>
    <article class="prose prose-lg">
        <h2>{{ $post->title }}</h2>
        <div>{{ $post->contents }}</div>
        <x-post-meta :post="$post" />
    </article>
</x-app-layout>
