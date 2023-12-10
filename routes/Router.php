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
        //check if uri ends with a number (id), if yes, replace it with {id} and store the number without / in $id
        if (preg_match('/\/[0-9]+$/', $uri, $matches)) {
            $uri = preg_replace('/\/[0-9]+$/', '/{id}', $uri);
            $id = $matches[0];
            $id = substr($id, 1);
        }
          
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
        else if (($middleware == 'auth' || $middleware == 'admin' || $middleware == 'user')) {
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
        if (isset($id))
            $controller->$actionName($id);
        else
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