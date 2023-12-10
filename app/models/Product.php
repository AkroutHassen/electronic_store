<?php
require_once 'app\models\Model.php';
class Product extends Model
{
    public function __construct($db)
    {
        parent::__construct($db, 'products');

    }
    public function __get($attr)
    {
        if (!isset($this->data[$attr]))
            return "erreur";
        else
            return ($this->data[$attr]);
    }
    public function __set($attr, $value)
    {
        $this->data[$attr] = $value;
    }
    public function findAll()
    {
        try {
            $sql = "SELECT products.id, products.name as product_name,products.in_stock as stock,products.discount_id, products.brand, products.description,products.qty_stock as quantity, products.price, products.new_price, categories.name as category_name, category_id , (SELECT path FROM images WHERE images.product_id = products.id LIMIT 1) as image FROM products INNER JOIN categories ON products.category_id = categories.id";
            $stmt = $this->db->query($sql);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Error finding data: " . $e->getMessage());
        }
    }
    public function getFirstImage($id)
    {
        try {
            $sql = "SELECT * FROM images WHERE product_id = $id LIMIT 1";
            $stmt = $this->db->query($sql);
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Error finding data: " . $e->getMessage());
        }
    }
    public function findByCategory($id){
        try {
            $sql = "SELECT * FROM products WHERE category_id = $id";
            $stmt = $this->db->query($sql);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Error finding data: " . $e->getMessage());
        }
    }
    public function lastId(){
        try {
            $sql = "SELECT id FROM products ORDER BY id DESC LIMIT 1";
            $stmt = $this->db->query($sql);
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Error finding data: " . $e->getMessage());
        }
    }
    public function findByDiscount($id){
        try {
            $sql = "SELECT * FROM products WHERE discount_id = $id";
            $stmt = $this->db->query($sql);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Error finding data: " . $e->getMessage());
        }
    }
    public function findAvailable(){
        try {
            $sql = "SELECT * FROM products WHERE in_stock = 1";
            $stmt = $this->db->query($sql);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Error finding data: " . $e->getMessage());
        }
    }
}
?>