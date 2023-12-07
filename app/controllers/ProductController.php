<?php
require_once("app\models\Product.php");
require_once("app\models\Database.php");
require_once("app\controllers\Controller.php");
class ProductController extends Controller {
    private $model;
    public function __construct()
    {
        $db = Database::getInstance()->getConnection();
        $this->model = new Product($db);
    }
    public function index()
    {   
        $products = $this->model->findAll();
        $controller = $this;
        include("app/views/Home/demo21-product.php");
    }
    public function show($id)
    {
        $product = $this->model->find($id);
        $controller = "ProductController";
        include("app/views/Product/demo21-product.php");
    }
    public function create()
    {
        $controller = "ProductController";
        include("app/views/Product/create.php");
    }
    public function createProcess()
    {
        $data['name'] = $_POST['name'];
        $data['description'] = $_POST['description'];
        $data['price'] = $_POST['price'];
        $data['category_id'] = $_POST['category_id'];
        $this->model->save($data);
        header("Location: /products");
    }
    public function edit($id)
    {
        $product = $this->model->find($id);
        $controller = "ProductController";
        include("app/views/Product/edit.php");
    }
    public function editProcess($id)
    {
        $data['id'] = $id;
        $data['name'] = $_POST['name'];
        $data['description'] = $_POST['description'];
        $data['price'] = $_POST['price'];
        $data['category_id'] = $_POST['category_id'];
        $this->model->update($id,$data);
        header("Location: /products");
    }
    public function delete($id)
    {
        $this->model->delete($id);
        header("Location: /products");
    }
}

?>