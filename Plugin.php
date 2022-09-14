<?php namespace LZaplata\Files;

use October\Rain\Filesystem\Filesystem;
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
}
