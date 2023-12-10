<?php
require_once 'app\models\Model.php';

class OrderDetails extends Model {
    public function __construct($db)
    {
        parent::__construct($db, 'orderdetails');

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
    public function findAll(){
        try {
            $sql = "SELECT orderdetails.id, orderdetails.order_id as order_id, orderdetails.product_id as product_id, orderdetails.qty as quantity, orderdetails.price, products.name as product_name, products.qty_stock as qty_stock ,orders.user_id as user_id,orders.status as order_status, users.name as user_name FROM orderdetails INNER JOIN products ON orderdetails.product_id = products.id INNER JOIN orders ON orderdetails.order_id = orders.id INNER JOIN users ON orders.user_id = users.id";
            $stmt = $this->db->query($sql);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Error finding data: " . $e->getMessage());
        }
    }
    public function findByOrder($id){
        try {
            $sql = "SELECT orderdetails.id, orderdetails.order_id as order_id, orderdetails.product_id as product_id, orderdetails.qty as quantity, orderdetails.price, products.name as product_name, products.qty_stock as qty_stock ,orders.user_id as user_id,orders.status as order_status, users.name as user_name FROM orderdetails INNER JOIN products ON orderdetails.product_id = products.id INNER JOIN orders ON orderdetails.order_id = orders.id INNER JOIN users ON orders.user_id = users.id WHERE orderdetails.order_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Error finding data: " . $e->getMessage());
        }
    }
    public function findByUser($id){
        try {
            $sql = "SELECT orderdetails.id, orderdetails.order_id as order_id, orderdetails.product_id as product_id, orderdetails.qty as quantity, orderdetails.price, products.name as product_name, products.qty_stock as qty_stock ,orders.user_id as user_id,orders.status as order_status, users.name as user_name FROM orderdetails INNER JOIN products ON orderdetails.product_id = products.id INNER JOIN orders ON orderdetails.order_id = orders.id INNER JOIN users ON orders.user_id = users.id WHERE orders.user_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Error finding data: " . $e->getMessage());
        }
    }
}



?>