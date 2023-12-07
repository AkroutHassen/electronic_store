<?php require "Router.php";
$router = new Router();

// Define routes
$router->addRoute('/', 'HomeController@index');
$router->addRoute('/home', 'HomeController@index');
$router->addRoute('/about', 'HomeController@about');
$router->addRoute('/contact', 'HomeController@contact');
$router->addRoute('/shop', 'HomeController@shop');

$router->addRoute('/updateCart', 'CartController@updateCart');
$router->addRoute('/refreshCart', 'CartController@refreshCart');
$router->addRoute('/cart', 'CartController@index');

$router->addRoute('/login', 'AuthController@login', 'guest');
$router->addRoute('/register', 'AuthController@register', 'guest');
$router->addRoute('/confirmLogin', 'AuthController@confirmLogin', 'guest');
$router->addRoute('/confirmRegister', 'AuthController@confirmRegister', 'guest');
$router->addRoute('/logout', 'AuthController@logout', 'auth');
$router->addRoute('/profile', 'AuthController@profile', 'auth');

$router->addRoute('/products', 'ProductController@index');
$router->addRoute('/products/show/{id}', 'ProductController@show');
$router->addRoute('/products/create', 'ProductController@create', 'admin');
$router->addRoute('/products/createProcess', 'ProductController@createProcess', 'admin');
$router->addRoute('/products/edit/{id}', 'ProductController@edit', 'admin');
$router->addRoute('/products/edit', 'ProductController@edit', 'admin');
$router->addRoute('/products/delete', 'ProductController@delete', 'admin');
?>