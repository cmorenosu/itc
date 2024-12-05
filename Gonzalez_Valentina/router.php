<?php
class Router {
    public function dispatch($url) {
        $url = trim($url, '/');
        $segments = explode('/', $url);

        $controller = !empty($segments[0]) ? ucfirst($segments[0]) : 'Welcome';
        $method = $segments[1] ?? 'index';
        $params = array_slice($segments, 2);

        $controllerFile = "Programa/controllers/{$controller}.php";
        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controllerInstance = new $controller();
            if (method_exists($controllerInstance, $method)) {
                call_user_func_array([$controllerInstance, $method], $params);
                return;
            }
        }
        require_once 'Programa/views/errors.php';
    }
}
