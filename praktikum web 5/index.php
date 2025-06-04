
<?php
require_once './template/topbar.php';
?>
<?php
require_once './template/top.php';
?>

<?php 
include_once 'template/sidebar.php';
?>


<!-- Konten Utama -->
<div class="container mt-4">
    <?php
    // Jika ada parameter url, maka tampilkan file sesuai url
    if (isset($_GET['url'])) {
        $file = $_GET['url'];


        $allowed_pages = ['list_pasien.php', 'form_pasien.php'];

        if (in_array($file, $allowed_pages) && file_exists($file)) {
            include $file;
        } else {
            echo "<h3 class='text-center text-danger'>Halaman tidak ditemukan atau tidak diizinkan.</h3>";
        }
    } else {
        echo "<h1 class='text-center'>Selamat Datang di Halaman Home</h1>";
    }
    ?>
</div>

<?php 
include_once 'template/bottom.php';
?>
