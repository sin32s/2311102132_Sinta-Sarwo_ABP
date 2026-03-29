<?php
session_start(); 

// Memanggil controller dari dalam foldernya
require_once 'controllers/AuthController.php';

$controller = new AuthController();

// Mengambil parameter 'action' dari URL, defaultnya ke 'login'
$action = isset($_GET['action']) ? $_GET['action'] : 'login';

// Routing
if ($action == 'register') {
    $controller->register();
} else {
    $controller->login();
}
?>