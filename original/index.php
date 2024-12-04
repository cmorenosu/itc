<?php
require_once 'autoload.php';
require_once 'router.php';

$router = new Router();
$router->dispatch($_GET['url'] ?? '');
