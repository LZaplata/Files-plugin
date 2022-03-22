<?php namespace LZaplata\Files\Models;

use Model;
use October\Rain\Database\Traits\NestedTree;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    use NestedTree;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'lzaplata_files_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
        "name" => "required",
        "slug" => ["required", "regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i", "unique:lzaplata_files_categories,slug,NULL,id,deleted_at,NULL"]
    ];

    public $belongsTo = [
        "parent" => Category::class,
    ];

    public $belongsToMany = [
        "files" => [
            File::class,
            "table" => "lzaplata_files_files_categories",
        ],
        "files_count" => [
            File::class,
            "table" => "lzaplata_files_files_categories",
            "count" => true
        ],
    ];
}
