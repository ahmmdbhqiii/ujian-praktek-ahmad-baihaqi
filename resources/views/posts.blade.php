<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <h3 class="text-xl font-bold mb-6">Welcome to My Blog!</h3>

    @foreach ($posts as $post)
        <article class="py-4 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post->slug }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post->title }}</h2>
            </a>
            
            <div class="text-base text-gray-500 mb-2">
                By <a href="#" class="hover:underline font-medium text-gray-900">{{ $post->author }}</a> | {{ $post->created_at->diffForHumans() }}
            </div>
            
            <p class="font-light text-gray-500 mb-4">
                {{ Str::limit($post->body, 150) }}
            </p>
            
            <a href="/posts/{{ $post->slug }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach

</x-layout>