<?php
class User {
    public function registerUser($username, $password) {
        $_SESSION['registered_user'] = $username;
        $_SESSION['registered_pass'] = $password;
        return true;
    }

    public function checkLogin($username, $password) {
        if (isset($_SESSION['registered_user']) && isset($_SESSION['registered_pass'])) {
            if ($username === $_SESSION['registered_user'] && $password === $_SESSION['registered_pass']) {
                return true;
            }
        }
        return false;
    }
}
?>