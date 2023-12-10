<?php 
    require_once 'app/controllers/Controller.php';
    require_once 'app/models/Discount.php';
    require_once "app\models\Database.php";
    require_once "app\models\Product.php";
    require_once "app\models\Image.php";

    class DiscountController extends Controller {
        private $model;
        public function __construct() {
            $db = Database::getInstance()->getConnection();
            $this->model = new Discount($db);
        }
        public function index() {
            $discounts = $this->model->findAll();
            $user = $_SESSION['user'];
            if($user['role'] == 0){
                include("app/views/Admin/discounts.php");
            }else{
                header("Location: /");
                exit();
            }
            
        }
    


        public function show($id) {
            // implementation goes here
        }

        public function create() {
            $name = htmlspecialchars($_POST['name']);
            $discount = floatval($_POST['discount']);
            if($name == ''){
                header("Location: /?url=discounts&success=0&message=Failed to create the discount.");
                exit();
            }
            $data = [
                'name' => $name,
                'discount' => $discount
            ];
            $this->model->save($data);
            header("Location: /?url=discounts&success=1&message=discount created successfully.");
            exit();
            
        }

        public function edit($id) {
            // implementation goes here
        }

        public function update() {
            $id = intval($_POST['id']);
            $name = htmlspecialchars($_POST['name']);
            $discount = intval($_POST['discount']);
            if($name == ''){
                header("Location: /?url=discounts&success=0&message=Failed to update the discount.");
                exit();
            }
            $data = [
                'id' => $id,
                'name' => $name,
                'discount' => $discount
            ];
            $this->model->update($id,$data);
            header("Location: /?url=discounts&success=1&message=discount updated successfully.");
            exit();
        }

        public function delete() {
            $id = intval($_POST['id']);
            $productModel = (new Product(Database::getInstance()->getConnection()));
            $products_discount = $productModel->findByDiscount($id);
            foreach($products_discount as $product){
                $productModel->update($product->id, ['discount_id' => null]);
            }
            $this->model->delete($id);
            header("Location: /?url=discounts&success=1&message=discount deleted successfully.");
            exit();
        }
    }
        
?>