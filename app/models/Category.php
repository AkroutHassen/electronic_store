<?php
require_once 'app\models\Model.php';
class Category extends Model
{
    public function __construct($db)
    {
        parent::__construct($db, 'categories');

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
            $sql = "SELECT * FROM categories";
            $stmt = $this->db->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error finding data: " . $e->getMessage());
        }
    }
}
?>