<?php
function get_db_connection() {
    $host = 'localhost';
    $dbname = 'bookcuatui';
    $username = 'root';
    $password = '';
    
    try {
        require_once 'init.php';
        
        // Kết nối database sau khi đã khởi tạo
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
        
    } catch (PDOException $e) {
        die("Kết nối database thất bại: " . $e->getMessage());
    }
}