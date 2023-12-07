<?php
require_once("app\models\Product.php");
require_once("app\models\Database.php");
require_once("app\controllers\Controller.php");

class CartController {
    private $model;
    public function __construct()
    {
        $db = Database::getInstance()->getConnection();
        $this->model = new Product($db);
    }
    public function index()
    {
        include("app/views/Cart/cart.php");
    }
    public function updateCart()
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        $product = $this->model->find($_POST['id']);
        $new = [$product, $_POST['quantity']];
        if (isset($_SESSION['cart'][$product->id])) {
            $_SESSION['cart'][$product->id][1] += $_POST['quantity'];
        } else {
            $_SESSION['cart'][$product->id] = $new;
        }
        return http_response_code(200);
    }
    public function refreshCart()
    {
        return $_SESSION['cart'];
    }
}