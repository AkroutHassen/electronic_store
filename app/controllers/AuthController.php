<?php
require_once("app\models\User.php");
require_once("app\models\Database.php");
require_once("app\controllers\Controller.php");

class AuthController
{
    private $model;
    public function __construct()
    {
        $db = Database::getInstance()->getConnection();
        $this->model = new User($db);
    }
    public function login()
    {
        include("app/views/Auth/login.php");
    }
    public function register()
    {
        include("app/views/Auth/register.php");
    }
    public function confirmRegister()
    {
        $data['name'] = $_POST["name"];
        $data['email'] = $_POST["email"];
        $data['password'] = $_POST["password"];
        $data['city'] = $_POST["city"];
        $data['phone'] = $_POST["phone"];
        $data['country'] = $_POST["country"];
        $data['address'] = $_POST["address"];
        $data['postal_code'] = $_POST["postal_code"];
        $data['number'] = $_POST["number"];
        $data['role'] = 1;
        $this->model->save($data);
        header("Location: /?url=login");
    }
    public function confirmLogin()
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $user = $this->model->findByEmail($email);
        if ($user && $user['password'] == $password) {
            $_SESSION['user'] = $user;
            if ($user['role'] == 1) {
                header("Location: /?url=profile");
            } else {
                header("Location: /");
            }
        } else {
            header("Location: /?url=login");
        }
    }
    public function logout()
    {
        session_destroy();
        header("Location: /?url=login");
    }
    public function profile()
    {
        $user = $_SESSION['user'];
        include("app/views/Auth/dashboard.php");
    }
}

?>