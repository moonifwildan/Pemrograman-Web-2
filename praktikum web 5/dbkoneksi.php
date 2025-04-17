<?php
$host = "localhost";
$db_name = "db_klinik";
$user = "root";
$pass = ""; // Pastikan XAMPP menggunakan password kosong untuk user root
$charset = "utf8mb4";
$dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";

$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $db = new PDO($dsn, $user, $pass, $opt);
    echo "Database Connected.";

} catch (PDOException $e) {
    echo "Database Connection Error: " . $e->getMessage();
}
