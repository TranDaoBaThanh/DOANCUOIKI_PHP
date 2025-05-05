<?php
session_start();
require_once '../model/m_user.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "Vui lòng điền tên người dùng và mật khẩu.";
        header('Location: ../signin.php');
        exit;
    } else {
        $userModel = new UserModel();
        $user = $userModel->get_user_by_username($username);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header('Location: ../index.php');
            exit;
        } else {
            $_SESSION['error'] = "Tên người dùng hoặc mật khẩu không đúng.";
            header('Location: ../signin.php');
            exit;
        }
    }
}
?>