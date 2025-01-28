<?php namespace LZaplata\Files\Controllers;

use Backend\Behaviors\RelationController;
use Backend\Classes\Controller;
use BackendMenu;

class Categories extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController',
        RelationController::class,
    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';
    public string $relationConfig = 'config_relation.yaml';

    public $requiredPermissions = [
        'lzaplata.files.categories',
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('LZaplata.Files', 'main-menu-item', 'side-menu-item');
    }
}
