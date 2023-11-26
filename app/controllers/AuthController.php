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
        if ($this->model->findByEmail($_POST['email'])) {
            header("Location: /?url=register");
        } else {
            $data['email'] = $_POST["email"];
            $data['name'] = $_POST["name"];
            $data['password'] = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $data['city'] = $_POST["city"];
            $data['phone'] = $_POST["phone"];
            $data['country'] = $_POST["country"];
            $data['address'] = $_POST["address"];
            $data['postal_code'] = $_POST["postal_code"];
            $data['number'] = $_POST["number"];
            $data['role'] = 1;
            $this->model->save($data);
            $_SESSION['success'] = "Account created successfully";
            header("Location: /?url=login");
        }
    }
    public function confirmLogin()
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $user = $this->model->findByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            if (isset($_POST['remember_me'])) {
                setcookie("user_email", $user['email'], time() + 3600);
                setcookie("password", $user['password'], time() + 3600);
            } else {
                setcookie("user_email", "", time() - 3600);
                setcookie("password", "", time() - 3600);
            }
            if ($user['role'] == 1) {
                header("Location: /?url=profile");
            } else {
                header("Location: /");
            }
        } else {
            $_SESSION['error'] = "Email or password is incorrect";
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