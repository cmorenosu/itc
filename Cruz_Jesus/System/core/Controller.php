<?php
class controller {
    protected function view($view, $data = []) {
        extract($data);
        require_once "programa/views/{$view}.php";
    }

    protected function model($model) {
        require_once "programa/models/{$model}.php";
        return new $model();
    }
}
