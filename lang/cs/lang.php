<?php return [
    'plugin' => [
        'name' => 'Soubory',
        'description' => 'Plugin pro správu souborů',
    ],
    'category' => [
        'field' => [
            'name' => [
                'label' => 'Název',
            ],
            'slug' => [
                'label' => 'URL',
            ],
            'parent' => [
                'label' => 'Nadřazená kategorie',
                'prompt' => '--Žádná--',
            ],
            'files' => [
                'label' => 'Soubory',
            ],
        ],
        'column' => [
            'name' => [
                'label' => 'Název',
            ],
            'slug' => [
                'label' => 'URL',
            ],
            'files_count' => [
                'label' => 'Počet souborů',
            ],
            'created_at' => [
                'label' => 'Vytvořeno',
            ],
        ],
        'name' => 'Kategorie',
        'create' => [
            'title' => 'Vytvořit kategorii',
            'flash' => 'Kategorie byla úspěšně vytvořena',
        ],
        'update' => [
            'title' => 'Upravit kategorii',
            'flash' => [
                'update' => 'Kategorie byla úspěšně upravena',
                'delete' => 'Kategorie byla úspěšně smazána',
            ],
        ],
        'reorder' => [
            'title' => 'Seřadit kategorie',
        ],
    ],
    'privileges' => [
        'default' => 'Přístup k pluginu',
        'category' => [
            'default' => 'Správa kategorií',
            'create' => 'Vytváření kategorií',
            'delete' => 'Mazání kategorií',
            'reorder' => 'Řazení kategorií',
        ],
        'file' => [
            'default' => 'Správa souborů',
            'create' => 'Vytváření souborů',
            'delete' => 'Mazání souborů',
        ],
    ],
    'file' => [
        'field' => [
            'file' => [
                'label' => 'Soubor',
            ],
            'name' => [
                'label' => 'Název',
            ],
            'description' => [
                'label' => 'Popis',
            ],
            'categories' => [
                'label' => 'Kategorie',
            ],
            'position' => [
                'label' => 'Pořadí',
            ],
        ],
        'column' => [
            'file' => [
                'label' => 'Soubor',
            ],
            'name' => [
                'label' => 'Název',
            ],
            'created_at' => [
                'label' => 'Vytvořeno',
            ],
            'categories' => [
                'label' => 'Kategorie',
            ],
            'position' => [
                'label' => 'Pořadí',
            ],
        ],
        'name' => 'Soubory',
        'create' => [
            'title' => 'Vytvořit soubor',
            'flash' => 'Soubor byl úspěšně vytvořen',
        ],
        'update' => [
            'title' => 'Upravit soubor',
            'flash' => [
                'update' => 'Soubor byl úspěšně upraven',
                'delete' => 'Soubor byl úspěšně smazán',
            ],
        ],
    ],
    'filter' => [
        'categories' => [
            'label' => 'Kategorie',
        ],
    ],
    'component' => [
        'files' => [
            'name' => 'Soubory',
            'description' => 'Zobrazí soubory z kategorie',
            'category' => [
                'title' => 'Kategorie',
                'description' => 'Vyberte kategorii souborů',
            ],
            'order' => [
                'title' => 'Řazení',
                'description' => 'Vyberte podle čeho se budou soubory řadit',
                'option' => [
                    'name_asc' => 'Název (vzestupně)',
                    'name_desc' => 'Název (sestupně)',
                    'created_asc' => 'Datum vytvoření (vzestupně)',
                    'created_desc' => 'Datum vytvoření (sestupně)',
                    'updated_asc' => 'Datum úpravy (vzestupně)',
                    'updated_desc' => 'Datum úpravy (sestupně)',
                    'position_asc' => 'Pořadí (vzestupně)',
                    'position_desc' => 'Pořadí (sestupně)',
                ],
            ],
        ],
    ],
];
