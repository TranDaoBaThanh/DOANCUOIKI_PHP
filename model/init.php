<?php
require_once 'database.php';

function initialize_database() {
    try {
        // Tạo kết nối không chọn database
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $pdo = new PDO("mysql:host=$host;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Tạo database nếu chưa tồn tại
        $pdo->exec("CREATE DATABASE IF NOT EXISTS bookcuatui 
            CHARACTER SET utf8mb4 
            COLLATE utf8mb4_unicode_ci");

        // Chuyển sang dùng database
        $pdo->exec("USE bookcuatui");

        // Tạo bảng users
        $pdo->exec("CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(50) UNIQUE NOT NULL,
            email VARCHAR(100) UNIQUE NOT NULL,
            password VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )");

        echo "Database và bảng đã được khởi tạo thành công!";
        
    } catch (PDOException $e) {
        die("Lỗi khởi tạo database: " . $e->getMessage());
    }
}

// Chạy hàm khởi tạo khi file được gọi
initialize_database();

?>