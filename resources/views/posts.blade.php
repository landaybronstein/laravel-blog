<x-layout>

	@include("_posts-header")
	
  <main class="max-w-6xl mx-auto mt-6 space-y-6 lg:mt-20">
    <x-post-featured-card :post="$posts[0]" />
		
    <div class="lg:grid lg:grid-cols-2">
      <x-post-card :post="$posts" />
      <x-post-card />
    </div>

    <div class="lg:grid lg:grid-cols-3">
      <x-post-card />
      <x-post-card />
      <x-post-card />
    </div>
  </main>
  {{-- <h1>Nick's Blog</h1>
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
    </section> --}}
</x-layout>
