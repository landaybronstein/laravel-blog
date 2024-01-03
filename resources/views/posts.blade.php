<x-layout>
    <h1>Nick's Blog</h1>
    <section>
        @foreach ($posts as $post)
            <article>
                <h2>
                    <a href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h2>
                <p>{{ $post->excerpt }}</p>
                <p>
                    - Made by {{$post->author->name}} in {{ $post->category->name }} -
                </p>
            </article>
        @endforeach
    </section>
</x-layout>
