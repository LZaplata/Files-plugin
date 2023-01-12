<?php


namespace LZaplata\Files\Components;


use Cms\Classes\ComponentBase;
use LZaplata\Files\Models\Category;
use LZaplata\Files\Models\File;
use October\Rain\Database\TreeCollection;

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
                "title"         => "lzaplata.files::lang.component.files.category.title",
                "description"   => "lzaplata.files::lang.component.files.category.description",
                "type" => "dropdown"
            ],
            "order" => [
                "title"         => "lzaplata.files::lang.component.files.order.title",
                "description"   => "lzaplata.files::lang.component.files.order.description",
                "type"          => "dropdown",
                "options" => [
                    "name asc"          => "lzaplata.files::lang.component.files.order.option.name_asc",
                    "name desc"         => "lzaplata.files::lang.component.files.order.option.name_desc",
                    "created_at asc"    => "lzaplata.files::lang.component.files.order.option.created_asc",
                    "created_at desc"   => "lzaplata.files::lang.component.files.order.option.created_desc",
                    "updated_at asc"    => "lzaplata.files::lang.component.files.order.option.updated_asc",
                    "updated_at desc"   => "lzaplata.files::lang.component.files.order.option.updated_desc",
                    "position asc"      => "lzaplata.files::lang.component.files.order.option.position_asc",
                    "position desc"     => "lzaplata.files::lang.component.files.order.option.position_desc",
                ],
                "default" => "position asc",
            ],
        ];
    }

    /**
     * @return array
     */
    public function getCategoryOptions(): array
    {
        return Category::orderBy("name", "ASC")->lists("name", "slug");
    }

    /**
     * @return Category|null
     */
    public function category(): ?Category
    {
        return Category::where("slug", $this->property("category"))->first();
    }

    /**
     * @return TreeCollection|null
     */
    public function files(): ?TreeCollection
    {
        list($column, $direction) = explode(" ", $this->property("order"));

        return File::whereRelation("categories", "slug", $this->property("category"))
            ->orderBy($column, $direction)
            ->get();
    }
}
