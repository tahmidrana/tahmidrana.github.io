<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => 'http://localhost:3000',
    'production' => false,
    'siteName' => 'Tahmidur Rahman',
    'siteDescription' => 'Personal Blog of Tahmidur Rahman',
    'siteAuthor' => 'Tahmidur Rahman',
    'contact_email' => 'tahmidrana@gmail.com',

    // collections
    'collections' => [
        'posts' => [
            'author' => 'Tahmidur Rahman', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'articles/{filename}',
        ],
        'categories' => [
            'path' => '/articles/categories/{filename}',
            'posts' => function ($page, $allPosts) {
                return $allPosts->filter(function ($post) use ($page) {
                    return $post->categories ? in_array($page->getFilename(), $post->categories, true) : false;
                });
            },
        ],
        'snippets' => [
            'author' => 'Tahmidur Rahman', // Default author, if not provided in a post
            'sort' => '-date',
            'path' => 'snippets/{filename}',
        ],
    ],

    // helpers
    'getDate' => function ($page) {
        return Datetime::createFromFormat('U', $page->date);
    },
    'getExcerpt' => function ($page, $length = 255) {
        if ($page->excerpt) {
            return $page->excerpt;
        }

        $content = preg_split('/<!-- more -->/m', $page->getContent(), 2);
        $cleaned = trim(
            strip_tags(
                preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content[0]),
                '<code>'
            )
        );

        if (count($content) > 1) {
            return $content[0];
        }

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
    'allCategories' => function ($page, $posts) {
        return $posts->pluck('categories')->flatten()->unique();
    },
    'countPostsInCategory' => function ($page, $posts, $category) {
        return $posts->reduce(function ($carry, $post) use ($category) {
            return $carry + collect($post->categories)->contains($category);
        });
    },
];
