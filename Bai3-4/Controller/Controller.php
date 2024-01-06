<?php

// require_once 'Model.php';
require_once '../Model/Model.php';

try {
    $db = new PDO('mysql:host=localhost;dbname=asm_php2_ product_warranty', 'huytv_pc07617', '192383T&');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Kết nối thất bại: ' . $e->getMessage();
    die();
}

// Tạo đối tượng UserModel và chuyển kết nối PDO vào
$userModel = new UserModel($db);

// Lấy danh sách người dùng
$users = $userModel->getAllUsers();

// Load view và truyền biến $users
require_once '../View/View.php';

?>
