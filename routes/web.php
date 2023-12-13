<?php require "Router.php";
$router = new Router();

// Define routes
$router->addRoute('/', 'HomeController@index');
$router->addRoute('/home', 'HomeController@index');
$router->addRoute('/about', 'HomeController@about');
$router->addRoute('/contact', 'HomeController@contact');

$router->addRoute('/updateCart', 'CartController@updateCart');
$router->addRoute('/refreshCart', 'CartController@refreshCart');
$router->addRoute('/removeFromCart/{id}', 'CartController@removeFromCart');
$router->addRoute('/cart', 'CartController@index');

$router->addRoute('/checkout', 'OrderController@indexUser', 'auth');
$router->addRoute('/confirmCheckout', 'OrderController@confirmCheckout', 'auth');

$router->addRoute('/login', 'AuthController@login', 'guest');
$router->addRoute('/register', 'AuthController@register', 'guest');
$router->addRoute('/confirmLogin', 'AuthController@confirmLogin', 'guest');
$router->addRoute('/confirmRegister', 'AuthController@confirmRegister', 'guest');
$router->addRoute('/logout', 'AuthController@logout', 'auth');
$router->addRoute('/profile', 'AuthController@profile', 'auth');

$router->addRoute('/products', 'ProductController@index');
$router->addRoute('/products/show/{id}', 'ProductController@show');
$router->addRoute('/products/create', 'ProductController@create', 'admin');
$router->addRoute('/products/update', 'ProductController@update', 'admin');
$router->addRoute('/products/delete', 'ProductController@delete', 'admin');
$router->addRoute('/products/getPrice', 'ProductController@getPrice', 'admin');
$router->addRoute('/products/getMaxQty', 'ProductController@getMaxQty', 'admin');

$router->addRoute('/categories', 'CategoryController@index', 'admin');
$router->addRoute('/categories/show/{id}', 'CategoryController@show', 'admin');
$router->addRoute('/categories/create', 'CategoryController@create', 'admin');
$router->addRoute('/categories/update', 'CategoryController@update', 'admin');
$router->addRoute('/categories/delete', 'CategoryController@delete', 'admin');

$router->addRoute('/discounts', 'DiscountController@index', 'admin');
$router->addRoute('/discounts/show/{id}', 'DiscountController@show', 'admin');
$router->addRoute('/discounts/create', 'DiscountController@create', 'admin');
$router->addRoute('/discounts/update', 'DiscountController@update', 'admin');
$router->addRoute('/discounts/delete', 'DiscountController@delete', 'admin');

$router->addRoute('/orders', 'OrderController@index', 'admin');
$router->addRoute('/orders/show/{id}', 'OrderController@show', 'admin');
$router->addRoute('/orders/create', 'OrderController@create', 'auth');
$router->addRoute('/orders/update', 'OrderController@update', 'admin');
$router->addRoute('/orders/delete', 'OrderController@delete', 'admin');

$router->addRoute('/orderdetails', 'OrderDetailsController@index', 'admin');
$router->addRoute('/orderdetails/show/{id}', 'OrderDetailsController@show', 'admin');
$router->addRoute('/orderdetails/create', 'OrderDetailsController@create', 'auth');
$router->addRoute('/orderdetails/update', 'OrderDetailsController@update', 'admin');
$router->addRoute('/orderdetails/delete', 'OrderDetailsController@delete', 'admin');

$router->addRoute('/users', 'UserController@index', 'admin');
$router->addRoute('/users/show/{id}', 'UserController@show', 'admin');
$router->addRoute('/users/create', 'UserController@create', 'admin');
$router->addRoute('/users/update', 'UserController@update', 'admin');
$router->addRoute('/users/delete', 'UserController@delete', 'admin');
?>