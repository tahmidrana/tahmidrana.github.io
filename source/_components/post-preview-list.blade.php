<div class="flex flex-col mb-4">

    <a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}" class="text-black font-extrabold">
        <img 
            src="{{ $post->cover_image ?? '/assets/img/post-cover-image-2.png' }}" 
            alt="{{ $post->title }} cover image" class="mb-2 w-full" 

            @if ($constrain_image_to_grid)
                style="max-height: 10rem; max-height: 10rem; object-fit: cover; object-position: center;"
            @endif
        />
        {{-- <div class="w-full h-40 bg-green-500 text-center flex flex-col justify-center px-4">
            <h3 class="mb-0 text-white font-extrabold inline-block text-center">{{ $post->title }}</h3>
            <p class="m-0 text-white text-center">~ {{ $post->author }}</p>
        </div> --}}
    </a>
    

    <div class="flex-auto w-full container mb-4 mt-2">
        @if ($post->categories)
            @foreach ($post->categories as $i => $category)
                <a
                    href="{{ '/articles/categories/' . $category }}"
                    title="View posts in {{ $category }}"
                    class="inline-block bg-gray-200 hover:bg-blue-200 leading-loose tracking-wide text-gray-900 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
                >{{ $category }}</a>
            @endforeach
        @endif
    </div>

    <h2 class="text-3xl mt-0">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="text-gray-900 hover:text-gray-800 font-extrabold"
        >{{ $post->title }}</a>
    </h2>

    <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="uppercase font-semibold tracking-wide text-gray-700 hover:underline mb-4"
    >Read More →</a>
</div>