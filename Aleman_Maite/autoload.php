<?php
spl_autoload_register(function ($class) {
    $paths = ['programa/controllers/', 'programa/models/', 'system/core/', 'system/libraries/'];
    foreach ($paths as $path) {
        $file = __DIR__ . '/' . $path . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});
