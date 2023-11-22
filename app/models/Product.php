<?php
require_once 'app\models\Model.php';
class Product extends Model
{
    public function __construct($db)
    {
        parent::__construct($db, 'products');

    }
    public function __get($attr){
        if (!isset($this->data[$attr]))
            return "erreur";
        else 
            return ($this->data[$attr]);
    }
    public function __set($attr,$value) {
        $this->data[$attr] = $value;
    }
    public function findAll()
    {
        try {
            $sql = "SELECT *, categories.name as category_name, 
            (SELECT path FROM images WHERE product_id = products.id LIMIT 1) AS image
            FROM products
            LEFT JOIN categories
            ON products.category_id=categories.id";
            $stmt = $this->db->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error finding data: " . $e->getMessage());
        }
    }
}
?>