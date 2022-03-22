<?php


namespace LZaplata\Files\Components;


use Cms\Classes\ComponentBase;
use LZaplata\Files\Models\Category;

class Files extends ComponentBase
{
    /**
     * @return array
     */
    public function componentDetails(): array
    {
        return [
            "name" => "lzaplata.files::lang.component.files.name",
            "description" => "lzaplata.files::lang.component.files.description"
        ];
    }

    /**
     * @return array
     */
    public function defineProperties(): array
    {
        return [
            "category" => [
                "title" => "lzaplata.files::lang.component.files.category.title",
                "description" => "lzaplata.files::lang.component.files.category.description",
                "type" => "dropdown"
            ]
        ];
    }

    /**
     * @return array
     */
    public function getCategoryOptions(): array
    {
        return Category::orderBy("name", "ASC")->lists("name", "id");
    }

    /**
     * @return Category
     */
    public function category(): Category
    {
        return Category::find($this->property("category"));
    }
}
