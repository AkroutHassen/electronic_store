<?php
class Router {
    protected $routes = [];
    protected $authMiddleware = [];

    public function addRoute($uri, $controllerAction, $authMiddleware = null) {
        $this->routes[$uri] = $controllerAction;
        if ($authMiddleware !== null) {
            $this->authMiddleware[$uri] = $authMiddleware;
        }
    }

    public function dispatch($uri) {
          
        $controllerAction = $this->getControllerAction($uri);
        
        if ($controllerAction === false) {
            // Handle 404: route not found
            echo '404 Not Found';
            return;
        }
        $middleware = $this->getAuthMiddleware($uri);
        if ($middleware == 'guest' && isset($_SESSION['user'])) {
            // Redirect to home page
            header('Location: /');
            return;
        }
        else if (($middleware == 'auth' || $middleware == 'admin' || $middleware == 'user') && isset($_SESSION['user'])) {
            // Check if user is logged in
            if (!isset($_SESSION['user'])) {
                // Redirect to login page
                header('Location: /?url=login');
                return;
            }
            // Check if user has the required role
            if($_SESSION['user']['role'] == 0)
                $role = 'admin';
            else if($_SESSION['user']['role'] == 1)
                $role = 'user';
            if ($middleware != "auth" && $role !== $middleware) {
                // Redirect to home page
                header('Location: /');
                return;
            }
        }


        list($controllerName, $actionName) = explode('@', $controllerAction);
        
        // Include the appropriate controller file
        require_once __DIR__ . '/../app/controllers/' . $controllerName . '.php';

        // Create an instance of the controller
        $controller = new $controllerName();
        
        // Call the action method
        $controller->$actionName();
    }

    protected function getControllerAction($uri) {
        
        return isset($this->routes[$uri]) ? $this->routes[$uri] : false;
    }

    protected function getAuthMiddleware($uri) {
        return isset($this->authMiddleware[$uri]) ? $this->authMiddleware[$uri] : false;
    }
}
?>