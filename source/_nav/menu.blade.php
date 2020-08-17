<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="Articles" href="/articles"
        class="ml-6 text-gray-700 hover:text-gray-900 hover:underline {{ $page->isActive('/articles') ? 'active text-gray-900 underline' : '' }}">
        Articles
    </a>

    <a title="Snippets" href="/snippets"
        class="ml-6 text-gray-700 hover:text-gray-900 hover:underline {{ $page->isActive('/snippets') ? 'active text-gray-900 underline' : '' }}">
        Snippets
    </a>

    <a title="About" href="/about"
        class="ml-6 text-gray-700 hover:text-gray-900 hover:underline {{ $page->isActive('/about') ? 'active text-gray-900 underline' : '' }}">
        About
    </a>

    <a title="{{ $page->siteName }}'s Github" href="https://github.com/tahmidrana" target="_blank"
        class="ml-6 text-gray-700 hover:text-blue-600">
        <i class="fab fa-github"></i>
    </a>
    <a title="{{ $page->siteName }}'s LinkedIn" href="https://www.linkedin.com/in/tahmidr/" target="_blank"
        class="ml-6 text-blue-700 hover:text-blue-600">
        <i class="fab fa-linkedin"></i>
    </a>
</nav>
