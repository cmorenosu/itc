<?php
spl_autoload_register(function ($class) {
    $paths = ['System/core', 'System/libraries', 'programa/models'];
    foreach ($paths as $path) {
        $file = $path . '/' . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
    die("Class $class not found.");
});