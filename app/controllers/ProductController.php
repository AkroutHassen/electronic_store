<?php
require_once("app\models\Product.php");
require_once 'app\models\Category.php';
require_once 'app\models\Image.php';
require_once 'app\models\Discount.php';
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
        $categories  = (new Category(Database::getInstance()->getConnection()))->findAll();
        $discounts = (new Discount(Database::getInstance()->getConnection()))->findAll();
        $product_images = (new Image(Database::getInstance()->getConnection()));
        $controller = $this;
        $user = $_SESSION['user'];
        if($user['role'] == 0){
            include("app/views/Admin/products.php");
        }else
            include("app/views/Product/demo21-shop.php");
        
    }
    public function show($id)
    {
        $product = $this->model->find($id);
        $controller = "ProductController";
        include("app/views/Product/demo21-product.php");
    }
    public function create()
    {
        $name = htmlspecialchars($_POST['name']);
        $brand = htmlspecialchars($_POST['brand']);
        $category = intval($_POST['category']); // Assuming category is an integer
        $stock = intval($_POST['stock']); // Assuming stock is an integer
        $quantity = intval($_POST['quantity']);
        $price = floatval($_POST['price']);
        $discount = intval($_POST['discount']); // Assuming discount is an integer
        $description = htmlspecialchars($_POST['description']);
        if($name == '' || $brand == '' || $category == '' || $stock == '' || $quantity == '' || $price == '' || $discount == '' || $description == ''){
            header("Location: /?url=products&success=0&message=Faild to create the product.");
            exit();
        }
        if($stock == 1 && $quantity == 0){
            header("Location: /?url=products&success=0&message=Faild to create the product.");
            exit();
        }
        if($quantity < 0 || $price < 0){
            header("Location: /?url=products&success=0&message=Faild to create the product.");
            exit();
        }
        // File Upload
        $uploadDir = 'assets/dist/img/';
        $uploadedFile = '';
        $fileName = '';
        $targetFile = '';
        $fileInfo ='';
        $date = date('Y-m-d H:i:s');
        if(isset($_FILES['add_image']) && $_FILES['add_image']['name'] != ''){
            $uploadedFile = $_FILES['add_image']['tmp_name'];
            $product_id = $this->model->lastId()->id + 1;
            $fileName = $_FILES['add_image']['name'];
            $fileInfo = pathinfo($fileName);
            $fileExtension = $fileInfo['extension'];  
            $fileName = $fileName = $product_id.'_'.str_replace([' ', ':'], '_', $name).'_'.str_replace([' ', ':'], '_', $date).'.'.$fileExtension;;
            $targetFile = $uploadDir . $fileName;
        }
        var_dump($uploadedFile);    
        $controller = "ProductController";
        if (move_uploaded_file($uploadedFile, $targetFile)) {
            // Prepare data to be saved
            $data = [
                'name' => $name,
                'brand' => $brand,
                'category_id' => $category,
                'in_stock' => $stock,
                'qty_stock' => $quantity,
                'price' => $price,
                'discount_id' => $discount,
                'description' => $description,
                'date' => $date
            ];

            // Save the data to the database using your model
            $this->model->save($data); 
            $product_id = $this->model->lastId()->id;
            $image = new Image(Database::getInstance()->getConnection());
            $image->save(['path' => $fileName, 'product_id' => $product_id]);
            header("Location: /?url=products&success=1&message=Product created successfully.");
            exit();
        } else {
            // Handle file upload error
            header("Location: /?url=products&success=0&message=Failed to create the product.");
            exit();
        }
        
    }
   
    public function edit($id)
    {
        $product = $this->model->find($id);
        $controller = "ProductController";
        include("app/views/Product/edit.php");
    }
    public function update()
    {
        $id = intval($_POST['id']);
        $name = htmlspecialchars($_POST['name']);
        $brand = htmlspecialchars($_POST['brand']);
        $category = intval($_POST['category']); // Assuming category is an integer
        $stock = intval($_POST['stock']); // Assuming stock is an integer
        $quantity = intval($_POST['quantity']);
        $price = floatval($_POST['price']);
        $discount = intval($_POST['discount']); // Assuming discount is an integer
        $description = htmlspecialchars($_POST['description']);
        if($name == '' || $brand == '' || $category == '' || $stock == '' || $quantity == '' || $price == '' || $discount == '' || $description == ''){
            header("Location: /?url=products&success=0&message=Faild to update the product.");
            exit();
        }
        if($stock == 1 && $quantity == 0){
            header("Location: /?url=products&success=0&message=Faild to update the product.");
            exit();
        }
        if($quantity < 0 || $price < 0){
            header("Location: /?url=products&success=0&message=Failed to update the product.");
            exit();
        }
        // File Upload
        $uploadDir = 'assets/dist/img/';
        $uploadedFile = '';
        $fileName = '';
        $targetFile = '';
        $fileInfo ='';
        $date = date('Y-m-d H:i:s');
        if(isset($_FILES['edit_image']) && $_FILES['edit_image']['name'] != ''){
            $uploadedFile = $_FILES['edit_image']['tmp_name'];
            $product_id = $this->model->lastId()->id + 1;
            $fileName = $_FILES['edit_image']['name'];
            $fileInfo = pathinfo($fileName);
            $fileExtension = $fileInfo['extension'];  
            $fileName = $fileName = $product_id.'_'.str_replace([' ', ':'], '_', $name).'_'.str_replace([' ', ':'], '_', $date).'.'.$fileExtension;;
            $targetFile = $uploadDir . $fileName;
            if (move_uploaded_file($uploadedFile, $targetFile)) {
                // Prepare data to be saved
                $data['image'] = $fileName; 
                // Save the data to the database using your model
                $image = new Image(Database::getInstance()->getConnection());
                $image->save(['path' => $fileName, 'product_id' => $id]);
                header("Location: /?url=products&success=1&message=Product updated successfully.");
                exit();
            } else {
                // Handle file upload error
                header("Location: /?url=products&success=1&message=Failed to update category.");
                exit();
            }
        }
        $data = [
            'name' => $name,
            'brand' => $brand,
            'category_id' => $category,
            'in_stock' => $stock,
            'qty_stock' => $quantity,
            'price' => $price,
            'discount_id' => $discount,
            'description' => $description,
            'date' => $date
        ];  
        $this->model->update($id, $data);  
        $controller = "ProductController";
        header("Location: /?url=products&success=1&message=Product updated successfully.");
        

    }
    public function delete()
    {   $id = intval($_POST['id']);
        $imageModel=   (new Image(Database::getInstance()->getConnection()));
        $images = $imageModel->findByProductId($id);
        foreach($images as $image){
            unlink('assets/dist/img/'.$image->path);
            $imageModel->delete($image->id);
        }
        $this->model->delete($id);
        header("Location: /?url=products&success=1&message=Product deleted successfully.");
    }

    public function getPrice(){
        $id = intval($_GET['id']);
        $product = $this->model->find($id);
        echo $product->price;
    }
    public function getMaxQty(){
        $id = intval($_GET['id']);
        $product = $this->model->find($id);
        echo $product->qty_stock;
    }
}

?>