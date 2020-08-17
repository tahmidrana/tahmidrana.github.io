@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->blogDescription }}" />
@endpush

@section('body')
    <div class="about bg-orange-200 px-4 sm:px-10 py-12 text-center">
        <h1 class="text-3xl sm:text-5xl">Hey, I’m Tahmidur Rahman</h1>
        <p class="mt-0 mb-2">I’m a full stack software developer & passionate about learning new things.</p>

        <p class="m-0">Currently, I am working as a software engineer @<a href="https://www.appinionbd.com/">Appinion BD Limited</a>. <br>
            I build applications with PHP, Laravel, Vuejs.</p>
    </div>

    <div class="mt-12">
        <h3 class="text-center text-4xl pt-8">Recent Articles</h3>
        @foreach ($posts->where('featured', true) as $featuredPost)
            <div class="w-full mb-6">
                @if ($featuredPost->cover_image)
                    <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}">
                        <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6">
                    </a>
                @endif

                <h2 class="text-3xl mt-0">
                    <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="text-gray-900 hover:text-gray-800 font-extrabold">
                        {{ $featuredPost->title }}
                    </a>
                </h2>

                <p class="mt-0 mb-4">{!! $featuredPost->getExcerpt() !!}</p>

                <a href="{{ $featuredPost->getUrl() }}" title="Read - {{ $featuredPost->title }}"class="uppercase font-semibold tracking-wide text-gray-700 hover:underline mb-4">
                    Read More →
                </a>
            </div>

            @if (! $loop->last)
                <hr class="border-b my-6">
            @endif
        @endforeach

        @foreach ($posts->where('featured', false)->take(6)->chunk(2) as $row)
            <div class="flex flex-col md:flex-row md:-mx-6">
                @foreach ($row as $post)
                    <div class="w-full md:w-1/2 md:mx-6">
                        @include('_components.post-preview-list', ['constrain_image_to_grid' => true])
                    </div>

                    @if (! $loop->last)
                        <hr class="block md:hidden w-full border-b mt-2 mb-6">
                    @endif
                @endforeach
            </div>

            @if (! $loop->last)
                <hr class="w-full border-b mt-2 mb-6">
            @endif
        @endforeach

        {{-- @foreach ($posts->take(4) as $featuredPost)
            <div class="w-full mb-6">
                <p class="text-gray-700 text-sm font-sm my-0">
                    {{ $featuredPost->getDate()->format('F j, Y') }}
                </p>
    
                <h2 class="text-xl mt-0">
                    <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="text-gray-900 hover:text-gray-900 font-extrabold hover:underline">
                        {{ $featuredPost->title }}
                    </a>
                </h2>
                <p class="mt-0 mb-4 text-sm text-gray-700">{!! $featuredPost->getExcerpt() !!}</p>
            </div>
    
            @if (! $loop->last)
                <hr class="border-b my-6">
            @endif
        @endforeach   --}}      
    </div>
@stop
