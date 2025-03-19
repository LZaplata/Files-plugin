<?php namespace LZaplata\Files\Models;

use Cms\Classes\Theme;
use Cms\Models\PageLookupItem;
use Model;
use October\Rain\Database\Builder;
use October\Rain\Database\Scopes\NestedTreeScope;
use RainLab\Pages\Classes\MenuItem;
use System\Models\File as SystemFile;

/**
 * Model
 */
class File extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'lzaplata_files_files';

    /**
     * @var array Validation rules
     */
    public $rules = [
        "file" => "required",
        "name" => "required",
    ];

    public $attachOne = [
        "file" => SystemFile::class,
    ];

    public $belongsToMany = [
        "categories" => [
            Category::class,
            "table" => "lzaplata_files_files_categories",
        ],
    ];

    /**
     * @param Builder $query
     * @param array $categories
     * @return Builder
     */
    public function scopeFilterCategories(Builder $query, array $categories): Builder
    {
        return $query->whereHas("categories", function($q) use ($categories) {
            $q->withoutGlobalScope(NestedTreeScope::class)->whereIn("id", $categories);
        });
    }

    /**
     * @param string $type
     * @return array
     */
    public static function getMenuTypeInfo(string $type): array
    {
        $result = [];

        if ($type == "file") {
            $result = [
                "nesting"       => false,
                "dynamicItems"  => false,
                "references"    => self::all()->sortBy("name")->pluck("name", "id"),
            ];
        }

        return $result;
    }

    /**
     * @param PageLookupItem $item
     * @param string $url
     * @param Theme $theme
     * @return array|null
     */
    public static function resolveMenuItem(PageLookupItem $item, string $url, Theme $theme): ?array
    {
        $result = null;

        if ($item->type == "file") {
            $file = self::find($item->reference);

            $result = [
                "url"   => $file->file->getPath(),
            ];
        }

        return $result;
    }
}
