<?php namespace LZaplata\Files\Models;

use Model;
use October\Rain\Database\Traits\NestedTree;
use System\Models\File as SystemFile;

/**
 * Model
 */
class File extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    use NestedTree;

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
}
