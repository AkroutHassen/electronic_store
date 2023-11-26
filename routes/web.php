<?php require "Router.php";
$router = new Router();

// Define routes
$router->addRoute('/', 'HomeController@index');
$router->addRoute('/home', 'HomeController@index');
$router->addRoute('/about', 'HomeController@about');
$router->addRoute('/contact', 'HomeController@contact');
$router->addRoute('/products', 'HomeController@products');
$router->addRoute('/shop', 'HomeController@shop');

$router->addRoute('/login', 'AuthController@login');
$router->addRoute('/register', 'AuthController@register');
$router->addRoute('/confirmLogin', 'AuthController@confirmLogin');
$router->addRoute('/confirmRegister', 'AuthController@confirmRegister');
$router->addRoute('/logout', 'AuthController@logout', 'auth');
$router->addRoute('/profile', 'AuthController@profile', 'auth');

$router->addRoute('/products', 'ProductController@index', 'auth');
$router->addRoute('/products/show', 'ProductController@show', 'auth');
$router->addRoute('/products/create', 'ProductController@create', 'admin');
$router->addRoute('/products/createProcess', 'ProductController@createProcess', 'admin');
$router->addRoute('/products/edit/{id}', 'ProductController@edit', 'admin');
$router->addRoute('/products/edit', 'ProductController@edit', 'admin');
$router->addRoute('/products/delete', 'ProductController@delete', 'admin');
?>