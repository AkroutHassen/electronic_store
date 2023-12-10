<?php 
    require_once 'app/controllers/Controller.php';
    require_once 'app/models/Category.php';
    require_once "app\models\Database.php";
    require_once "app\models\Product.php";
    require_once "app\models\Image.php";

    class CategoryController extends Controller {
        private $model;
        public function __construct() {
            $db = Database::getInstance()->getConnection();
            $this->model = new Category($db);
        }
        public function index() {
            $categories = $this->model->findAll();
            $user = $_SESSION['user'];
            if($user['role'] == 0){
                include("app/views/Admin/categories.php");
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
            if($name == ''){
                header("Location: /?url=categories&success=0&message=Failed to create the category.");
                exit();
            }
            $data = [
                'name' => $name
            ];
            $this->model->save($data);
            header("Location: /?url=categories&success=1&message=Category created successfully.");
            exit();
            
        }

        public function edit($id) {
            // implementation goes here
        }

        public function update() {
            $id = intval($_POST['id']);
            $name = htmlspecialchars($_POST['name']);
            if($name == ''){
                header("Location: /?url=categories&success=0&message=Failed to update the category.");
                exit();
            }
            $data = [
                'id' => $id,
                'name' => $name
            ];
            $this->model->update($id,$data);
            header("Location: /?url=categories&success=1&message=Category updated successfully.");
            exit();
        }

        public function delete() {
            $id = intval($_POST['id']);
            $productModel = (new Product(Database::getInstance()->getConnection()));
            $products_category = $productModel->findByCategory($id);
            $imageModel=   (new Image(Database::getInstance()->getConnection()));
            
            foreach($products_category as $product){
                $images = $imageModel->findByProductId($product->id);
                foreach($images as $image){
                    unlink('assets/dist/img/'.$image->path);
                    $imageModel->delete($image->id);
                }
                $productModel->delete($product->id);
            }
            $this->model->delete($id);
            header("Location: /?url=categories&success=1&message=Category deleted successfully.");
            exit();
        }
    }
        
?>