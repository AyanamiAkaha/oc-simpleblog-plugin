<?php return [
    'plugin' => [
        'name' => 'Simple Blog',
        'description' => 'Simple blog plugin, as the Rainlab.Blog didn\'t work well when I tried it.',
    ],
    'labels' => [
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
    ],
    'menu' => [
        'categories' => 'Categories',
        'entries' => 'Blog Entries',
        'tags' => 'Tags',
    ],
];