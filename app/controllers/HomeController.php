<?php
require_once("app\models\Product.php");
require_once("app\models\Category.php");
require_once("app\models\Database.php");
require_once("app\controllers\Controller.php");
class HomeController {
    private $model;
    public function __construct()
    {
        $db = Database::getInstance()->getConnection();
        $this->model = new Product($db);
    }
    public function index()
    {   
        $products = $this->model->findAll();
        
        $categories = (new Category(Database::getInstance()->getConnection()))->findAll();
        $controller = $this;
        include("app/views/Home/demo21.php");
    }
    public function about()
    {
        include("app/views/Home/demo21-about.php");
    }
    public function contact()
    {
        include("app/views/Home/demo21-contact.php");
    }
    public function shop()
    {
        include("app/views/Home/demo21-shop.php");
    }
    public function cart()
    {
        include("app/views/Home/cart.php");
    }
}

?>