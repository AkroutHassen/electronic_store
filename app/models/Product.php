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
            $sql = "SELECT products.id, products.name as product_name, products.brand, products.description, products.price, products.new_price, categories.name as category_name, category_id FROM products INNER JOIN categories ON products.category_id = categories.id";
            $stmt = $this->db->query($sql);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Error finding data: " . $e->getMessage());
        }
    }
}
?>