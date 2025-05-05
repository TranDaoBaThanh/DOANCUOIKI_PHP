<?php
session_start();
require_once '../model/m_user.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $_SESSION['error'] = "Vui lòng điền đầy đủ thông tin.";
        header('Location: ../signup.php');
        exit;
    } elseif ($password !== $confirm_password) {
        $_SESSION['error'] = "Mật khẩu không khớp.";
        header('Location: ../signup.php');
        exit;
    } else {
        $userModel = new UserModel();
        if ($userModel->check_username_exists($username)) {
            $_SESSION['error'] = "Tên người dùng đã tồn tại.";
            header('Location: ../signup.php');
            exit;
        } elseif ($userModel->check_email_exists($email)) {
            $_SESSION['error'] = "Email đã tồn tại.";
            header('Location: ../signup.php');
            exit;
        } else {
            $password_hash = password_hash($password, PASSWORD_DEFAULT);
            if ($userModel->insert_user($username, $email, $password_hash)) {
                $_SESSION['success'] = "Đăng ký thành công. Vui lòng đăng nhập.";
                header('Location: ../signin.php');
                exit;
            } else {
                $_SESSION['error'] = "Đăng ký thất bại.";
                header('Location: ../signup.php');
                exit;
            }
        }
    }
}
?>