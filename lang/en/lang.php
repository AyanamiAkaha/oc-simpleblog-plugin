<?php return [
    'plugin' => [
        'name' => 'Simple Blog',
        'description' => 'Simple blog plugin, as the Rainlab.Blog didn\'t work well when I tried it.',
    ],
    'labels' => [
        'settings' => [
            'name' => 'Blog Settings',
            'description' => 'Common parameters and defaults for the blog',
            'with_category' => 'Show category',
            'withAuthor' => 'Show author',
            'urlParameter' => 'URL parameter',
        ],
        'category' => [
            'name' => 'Category Name',
            'id' => 'Category ID',
            'order' => 'Sort order',
        ],
        'tag' => [
            'name' => 'Tag name',
            'id' => 'Tag ID',
        ],
        'entry' => [
            'title' => 'Post title',
            'summary' => 'Short summary',
            'text' => 'Post content',
            'category' => 'Category',
            'tags' => 'Tags',
            'id' => 'Post ID',
        ],
    ],
    'comments' => [
        'category' => [
            'order' => 'Sort order, for menus &c',
            'name' => 'Name for this category',
        ],
        'entry' => [
            'summary' => 'Short post summary, to show e.g. in archives and searches. By default fills from the entry text.',
        ],
        'settings' => [
            'withCategory' => 'Include category in post view',
            'withAuhtor' => 'Show author name in blog entries',
            'urlParameter' => 'name of the URL parameter containing post ID',
        ],
    ],
    'menu' => [
        'categories' => 'Categories',
        'entries' => 'Blog Entries',
        'tags' => 'Tags',
    ],
    'settings' => [
        'withAuthor' => 'Show author',
        'withCategory' => 'Show category',
        'withAuthorDescription' => 'Show author name in the post footer',
        'withCategoryDescription' => 'Show category in the post footer',
        'postUrlParameter' => 'URL parameter',
        'postUrlParameterDescription' => 'URL parameter with post ID',
        'fields' => [
            'author' => 'Author name',
        ],
    ],
];