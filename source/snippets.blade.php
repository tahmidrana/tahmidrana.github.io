---
pagination:
    collection: snippets
    perPage: 15
---
@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} Snippets" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="The list of snippets for {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>Snippets</h1>

    <hr class="border-b my-6">

    <div class="">
        @foreach ($pagination->items as $post)
            {{-- @include('_components.snippet-preview-inline') --}}
            <a href="{{ $post->getUrl() }}" title="Read more - {{ $post->title }}" class="flex items-center bg-gray-200 hover:bg-gray-300 px-4 py-3 rounded my-2 block w-full">
                <img src="/assets/img/snippet.jpg" alt="" class="w-16 h-16 rounded-full">
                <div class="mx-4">
                    <p class="text-gray-900 my-0">{{ $post->title }}</p>
                    <p class="my-0 text-sm font-medium text-gray-700">{{ $post->getDate()->format('F j, Y') }}</p>
                </div>
            </a>
    
            {{-- @if ($post != $pagination->items->last())
                <hr class="border-b my-6">
            @endif --}}
        @endforeach
    </div>

    {{-- <div class="grid grid-cols-3 gap-3">
        @foreach ($pagination->items as $post)
            @include('_components.snippet-preview-inline')
        @endforeach
    </div> --}}

    @if ($pagination->pages->count() > 1)
        <nav class="flex text-base my-8">
            @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Previous Page"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
                >&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Go to Page {{ $pageNumber }}"
                    class="bg-gray-200 hover:bg-gray-400 text-blue-700 rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-blue-600' : '' }}"
                >{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Next Page"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
                >&RightArrow;</a>
            @endif
        </nav>
    @endif
@stop
