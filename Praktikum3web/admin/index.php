<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

// Kalau sudah login, baru load semua konten admin
include_once 'top.php';
include_once 'menu.php';
include_once 'welcome.php';

?>



