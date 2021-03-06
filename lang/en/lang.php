<?php return [
    'plugin' => [
        'name' => 'Files',
        'description' => 'Plugin for files management',
    ],
    'category' => [
        'field' => [
            'name' => [
                'label' => 'Name',
            ],
            'slug' => [
                'label' => 'URL',
            ],
            'parent' => [
                'label' => 'Parent category',
                'prompt' => '--None--',
            ],
            'files' => [
                'label' => 'Files',
            ],
        ],
        'column' => [
            'name' => [
                'label' => 'Name',
            ],
            'slug' => [
                'label' => 'URL',
            ],
            'files_count' => [
                'label' => 'Files',
            ],
            'created_at' => [
                'label' => 'Created',
            ],
        ],
        'name' => 'Categories',
        'create' => [
            'title' => 'Create category',
            'flash' => 'Category has been successfully created',
        ],
        'update' => [
            'title' => 'Edit category',
            'flash' => [
                'update' => 'Category has been successfully edited',
                'delete' => 'Category has been successfully deleted',
            ],
        ],
        'reorder' => [
            'title' => 'Reorder categories',
        ],
    ],
    'privileges' => [
        'default' => 'Plugin access',
        'category' => [
            'default' => 'Categories management',
            'create' => 'Creating categories',
            'delete' => 'Deleting categories',
            'reorder' => 'Reordering categories',
        ],
        'file' => [
            'default' => 'Files management',
            'create' => 'Creating files',
            'delete' => 'Deleting files',
        ],
    ],
    'file' => [
        'field' => [
            'file' => [
                'label' => 'File',
            ],
            'name' => [
                'label' => 'Name',
            ],
            'categories' => [
                'label' => 'Categories',
            ],
        ],
        'column' => [
            'file' => [
                'label' => 'File',
            ],
            'name' => [
                'label' => 'Name',
            ],
            'created_at' => [
                'label' => 'Created',
            ],
            'categories' => [
                'label' => 'Categories',
            ],
        ],
        'name' => 'Files',
        'create' => [
            'title' => 'Create file',
            'flash' => 'File has been successfully created',
        ],
        'update' => [
            'title' => 'Edit file',
            'flash' => [
                'update' => 'File has been successfully edited',
                'delete' => 'File has been successfully deleted',
            ],
        ],
    ],
    'filter' => [
        'categories' => [
            'label' => 'Categories',
        ],
    ],
];
