<?php require "Router.php";
$router = new Router();

// Define routes
$router->addRoute('/', 'ProductController@index');
$router->addRoute('/products', 'ProductController@index');
$router->addRoute('/products/show', 'ProductController@show');
$router->addRoute('/products/create', 'ProductController@create');
$router->addRoute('/products/createProcess', 'ProductController@createProcess');
//$router->addRoute('/products/edit/{id}', 'ProductController@edit');
$router->addRoute('/products/edit', 'ProductController@edit');
$router->addRoute('/products/delete', 'ProductController@delete');
?>