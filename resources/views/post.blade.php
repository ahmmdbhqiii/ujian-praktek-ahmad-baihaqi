<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <header class="mb-4 lg:mb-6 not-format">
                    <a href="/posts" class="font-medium text-xs text-blue-600 hover:underline mb-6 block">&laquo; Back to all posts</a>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl">{{ $post->title }}</h1>
                    <div class="flex items-center mr-3 text-sm text-gray-900">
                        <div>
                            <a href="#" rel="author" class="text-xl font-bold text-gray-900">{{ $post->author }}</a>
                            <p class="text-base text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </header>

                <p class="text-gray-700 leading-relaxed">{{ $post->body }}</p>
            </article>
        </div>
    </main>

</x-layout>