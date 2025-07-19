<?php
namespace App\Core;

class Controller
{
    public function model($model)
    {
        $modelClass = "App\\Models\\" . $model;
        return new $modelClass();
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/layouts/header.php';
        require_once '../app/views/' . $view . '.php';
        require_once '../app/views/layouts/footer.php';
    }
}