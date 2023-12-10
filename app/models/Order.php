<?php
require_once 'app\models\Model.php';

class Order extends Model {
    public function __construct($db)
    {
        parent::__construct($db, 'orders');

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
            $sql = "SELECT orders.id, orders.user_id, orders.address as order_address,orders.status ,orders.total_amount, orders.date, users.name as user_name, users.email as user_email, users.phone as user_phone FROM orders INNER JOIN users ON orders.user_id = users.id";
            $stmt = $this->db->query($sql);
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Error finding data: " . $e->getMessage());
        }
    }
    public function findByUser($id){
        try {
            $sql = "SELECT orders.id, orders.user_id, orders.address as order_address,orders.status ,orders.total_amount, orders.date, users.name as user_name, users.email as user_email, users.phone as user_phone FROM orders INNER JOIN users ON orders.user_id = users.id WHERE orders.user_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Error finding data: " . $e->getMessage());
        }
    }
    public function SumTotalAmount(){
        try {
            $sql = "SELECT SUM(total_amount) as total FROM orders WHERE status = 1";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            die("Error finding data: " . $e->getMessage());
        }
    }
}



?>