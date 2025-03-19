<?php namespace LZaplata\Files;

use Cms\Classes\Theme;
use Cms\Models\PageLookupItem;
use LZaplata\Files\Models\File;
use October\Rain\Filesystem\Filesystem;
use October\Rain\Support\Facades\Event;
use RainLab\Pages\Classes\MenuItem;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    /**
     * @return array
     */
    public function registerComponents(): array
    {
        return [
            "LZaplata\Files\Components\Files" => "Files"
        ];
    }

    /**
     * @return array
     */
    public function registerPageSnippets(): array
    {
        return [
            "LZaplata\Files\Components\Files" => "Files"
        ];
    }

    public function registerSettings()
    {
    }

    /**
     * @return array|void
     */
    public function registerMarkupTags()
    {
        return [
            "filters" => [
                "filesize" => function (int $bytes) {
                    $filesystem = new Filesystem;

                    return $filesystem->sizeToString($bytes);
                },
            ],
        ];
    }

    /**
     * @return void
     */
    public function boot(): void
    {
        Event::listen(["cms.pageLookup.listTypes"], function(): array {
            return [
                "file" => "lzaplata.files::lang.menuitem.list_type.file.label",
            ];
        });

        Event::listen(["cms.pageLookup.getTypeInfo"], function(string $type) {
            if ($type == "file") {
                return File::getMenuTypeInfo($type);
            }
        });

        Event::listen(["cms.pageLookup.resolveItem"], function(string $type, PageLookupItem $item, string $url, Theme $theme) {
            if ($type == "file") {
                return File::resolveMenuItem($item, $url, $theme);
            }
        });
    }
}
