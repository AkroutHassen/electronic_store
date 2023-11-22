<?php
require_once "config/Conf.php";

class Database {
    private static $instance = null;
    private $pdo;

    private function __construct() {
        try {
            $this->pdo = new PDO("mysql:host=" . App::DB_HOST . "; dbname=" . App::DB_NAME, App::DB_USER, App::DB_PASS);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $except) {
            echo "Echec de la connexion: " . $except->getMessage();
            die();
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->pdo;
    }
}
?>


        