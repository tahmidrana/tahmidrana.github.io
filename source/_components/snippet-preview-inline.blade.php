<div class="w-full bg-gray-200 rounded px-6 py-6">
    <img src="/assets/img/logo.svg" alt="" class="mx-2 my-2">
    <a
        href="{{ $post->getUrl() }}"
        title="Read more - {{ $post->title }}"
        class="text-gray-900 hover:text-gray-800 font-bold text-sm"
    >{{ $post->title }}</a>
</div>