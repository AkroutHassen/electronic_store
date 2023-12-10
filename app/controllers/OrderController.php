<?php 
    require "app\models\Order.php";
    require "app\models\User.php";
    require "app\models\Product.php";   
    require "app\models\Database.php";  
    require "app\controllers\Controller.php";
    require "app\models\OrderDetails.php";
    
    class OrderController extends Controller {
        private $model;
        public function __construct()
        {
            $db = Database::getInstance()->getConnection();
            $this->model = new Order($db);
        }
        public function index() {
            $orders = $this->model->findAll();
            
            $users = (new User(Database::getInstance()->getConnection()))->findAll();
            $user = $_SESSION['user'];
            if($user['role'] == 0){
                include("app/views/Admin/orders.php");
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
            $status = htmlspecialchars($_POST['status']);
            $addess = htmlspecialchars($_POST['address']);
            $user = htmlspecialchars($_POST['user']);
            if( $status == '' || $addess == '' || $user == ''){
                header("Location: /?url=orders&success=0&message=Failed to create the order.");
                exit();
            }
            $date = date("Y-m-d H:i:s");
            $data = [
                'status' => $status,
                'address' => $addess,
                'user_id' => $user,
                'date' => $date,
                'total_amount' => 0

            ];
            $this->model->save($data);
            header("Location: /?url=orders&success=1&message=Order created successfully.");
            
            
        }

        public function edit($id) {
            // implementation goes here
        }

        public function update() {
            $id = htmlspecialchars($_POST['id']);
            $status = htmlspecialchars($_POST['status']);
            $addess = htmlspecialchars($_POST['address']);
            $user = htmlspecialchars($_POST['user']);
            
            if( $status == '' || $addess == '' || $user == ''){
                header("Location: /?url=orders&success=0&message=Failed to update the order.");
                exit();
            }
            $data = [
                'id' => $id,
                'status' => $status,
                'address' => $addess,
                'user_id' => $user
            ];
            $this->model->update($id,$data);
            header("Location: /?url=orders&success=1&message=Order updated successfully.");
        }

        public function delete() {
            $id = htmlspecialchars($_POST['id']);
            $orderDetailsModel = (new OrderDetails(Database::getInstance()->getConnection()));
            $orderDetails = $orderDetailsModel->findByOrder($id);
            foreach($orderDetails as $orderDetail){
                $orderDetailsModel->delete($orderDetail->id);
            }
            $this->model->delete($id);
            header("Location: /?url=orders&success=1&message=Order deleted successfully.");
        }
    }
    
?>