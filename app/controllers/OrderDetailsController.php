<?php

require_once 'app/controllers/Controller.php';
require_once 'app/models/Database.php';
require_once 'app/models/OrderDetails.php';
require_once 'app/models/Order.php';
require_once 'app/models/Product.php';
require_once 'app/models/User.php';

class OrderDetailsController extends Controller
{
    private $model;
    public function __construct()
    {
        $db = Database::getInstance()->getConnection();
        $this->model = new OrderDetails($db);
    }
    public function index()
    {
        
        $orderDetails = $this->model->findAll();
        $allOrders = (new Order(Database::getInstance()->getConnection()))->findAll();
        $productsAvailable = (new Product(Database::getInstance()->getConnection()))->findAvailable();
        $user = $_SESSION['user'];
        if($user['role'] == 0){
            include("app/views/Admin/orderDetails.php");
        }else{
            header("Location: /");
            exit();
        }
    }

    public function show($id)
    {
       
    }

    public function create()
    {   
        $order = intval($_POST['order']);
        $product = intval($_POST['product']);
        $quantity = intval($_POST['quantity']);
        $price = floatval($_POST['price']);
        $qty_stock = (new Product(Database::getInstance()->getConnection()))->find($product)->qty_stock;
        
        if($order == '' || $product == '' || $quantity == '' || $price == ''){
            header("Location: /?url=orderdetails&success=0&message=Failed to create the order detail.");
            exit();
        }
        if($quantity < 0 || $price < 0){
            header("Location: /?url=orderdetails&success=0&message=Failed to create the order detail.");
            exit();
        }
        if($quantity > $qty_stock){
            header("Location: /?url=orderdetails&success=0&message=Failed to create the order detail.");
            exit();
        }
        $data = [
            'order_id' => $order,
            'product_id' => $product,
            'qty' => $quantity,
            'price' => $price
        ];
        $this->model->save($data);
        $allOrderDetails = (new OrderDetails(Database::getInstance()->getConnection()))->findByOrder($order); 
        $total = 0;
        foreach($allOrderDetails as $orderDetail){
            $total += $orderDetail->price * $orderDetail->quantity;
        }
        $orderData = [
            'id' => $order,
            'total_amount' => $total
        ];
        (new Order(Database::getInstance()->getConnection()))->update($order,$orderData);
        $productData = [
            'id' => $product,
            'qty_stock' => $qty_stock - $quantity
        ];  
        (new Product(Database::getInstance()->getConnection()))->update($product,$productData);
        header("Location: /?url=orderdetails&success=1&message=Order detail created successfully.");
    }

    public function edit($id)
    {
        // Your code here
    }

    public function update()
    {
        $id = htmlspecialchars($_POST['id']);
        $order = intval($_POST['order']);
        $product = intval($_POST['product']);
        $quantity = intval($_POST['quantity']);
        $price = floatval($_POST['price']);
        $qty_stock = (new Product(Database::getInstance()->getConnection()))->find($product)->qty_stock;
        if($order == '' || $product == '' || $quantity == '' || $price == ''){
            header("Location: /?url=orderdetails&success=0&message=Failed to update the order detail.");
            exit();
        }
        if($quantity < 0 || $price < 0){
            header("Location: /?url=orderdetails&success=0&message=Failed to update the order detail.");
            exit();
        }
        if($quantity > $qty_stock){
            header("Location: /?url=orderdetails&success=0&message=Failed to update the order detail.");
            exit();
        }
        $data = [
            'id' => $id,
            'order_id' => $order,
            'product_id' => $product,
            'qty' => $quantity,
            'price' => $price
        ];
        $oldQuantite = $this->model->find($id)->quantity;
        $newQuantite = $quantity - $oldQuantite;
        $productData = [
            'id' => $product,
            'qty_stock' => $qty_stock - $newQuantite
        ];  
        (new Product(Database::getInstance()->getConnection()))->update($product,$productData);
        $this->model->update($id,$data);
        $allOrderDetails = (new OrderDetails(Database::getInstance()->getConnection()))->findByOrder($order); 
        $total = 0;
        foreach($allOrderDetails as $orderDetail){
            $total += $orderDetail->price * $orderDetail->quantity;
        }
        $orderData = [
            'id' => $order,
            'total_amount' => $total
        ];
        (new Order(Database::getInstance()->getConnection()))->update($order,$orderData);
        
        $allOrderDetails = (new OrderDetails(Database::getInstance()->getConnection()))->findByOrder($order);
    }

    public function delete()
    {
        $id = htmlspecialchars($_POST['id']);
        $this->model->delete($id);
        header("Location: /?url=orderdetails&success=1&message=Order Detail deleted successfully.");
    }
}


?>
