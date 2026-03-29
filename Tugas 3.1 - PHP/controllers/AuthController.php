<?php
require_once 'models/user.php'; 

class AuthController {
    private $model;

    public function __construct() {
        $this->model = new User(); 
    }

    public function login() {
        $message = '';
        if (isset($_POST['login_btn'])) {
            $isSuccess = $this->model->checkLogin($_POST['username'], $_POST['password']);
            
            if ($isSuccess) {
                $message = "welcome " . $_POST['username'];
            } else {
                $message = "wrong username/password";
            }
        }
        require 'views/login_view.php'; 
    }

    public function register() {
        $message = '';
        if (isset($_POST['send'])) {
            $this->model->registerUser($_POST['username'], $_POST['password']);
            $message = "user is added";
        }
        require 'views/register_view.php'; 
    }
}
?>