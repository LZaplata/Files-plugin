<?php namespace LZaplata\Files;

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
}
