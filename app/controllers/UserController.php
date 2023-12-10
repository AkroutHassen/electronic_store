<?php 
require_once 'app/controllers/Controller.php';
require_once 'app/models/Database.php';
require_once 'app/models/User.php';
require_once 'app/models/Order.php';
require_once 'app/models/OrderDetails.php';

class UserController extends Controller {
    protected $model;

    public function __construct() {
        $db = Database::getInstance()->getConnection();
        $this->model = new User($db);
    }
    public function index() {
        $users = $this->model->findAll();
        if(isset($_SESSION['user'])){
            $user = $_SESSION['user'];
        
            if($user['role'] == 0){
                    include("app/views/Admin/users.php");
            }else{
                    header("Location: /");
                    exit();
            }
        }else{
            header("Location: /");
            exit();
        }
    }

    public function show($id) {
        // implementation goes here
    }

    public function create() {
        // implementation goes here
    }

    public function edit($id) {
        // implementation goes here
    }

    public function update() {
        // implementation goes here
    }

    public function delete() {
        $id = htmlspecialchars($_POST['id']);
        if($id == ''){
            header("Location: /?url=users&success=0&message=Failed to delete the user.");
            exit();
        }
        if($id == $_SESSION['user']['id']){
            header("Location: /?url=users&success=0&message=Failed to delete the user.");
            exit();
        }
        $orderDetailsModel = (new OrderDetails(Database::getInstance()->getConnection()));
        $ordersDetails = $orderDetailsModel->findByUser($id);
        foreach($ordersDetails as $orderDetail){
            $orderDetailsModel->delete($orderDetail->id);
        }
        $ordersModel = (new Order(Database::getInstance()->getConnection()));
        $orders = $ordersModel->findByUser($id);
        foreach($orders as $order){
            $ordersModel->delete($order->id);
        }
        $this->model->delete($id);
        header("Location: /?url=users&success=1&message=User deleted successfully.");
    }
}
    

    // CRUD methods and other custom methods can be implemented here

?>
