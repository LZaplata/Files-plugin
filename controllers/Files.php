<?php namespace LZaplata\Files\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Files extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'lzaplata.files.files',
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('LZaplata.Files', 'main-menu-item', 'side-menu-item2');
    }
}
