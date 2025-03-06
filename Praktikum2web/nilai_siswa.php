<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    // Menghitung nilai total
    $nilai_total = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

    echo "<div class='container mt-4'>"; 
    echo "<h4>Hasil Input</h4>";
    echo "<p>Nama : $nama</p>";
    echo "<p>Mata Kuliah : $matkul</p>";
    echo "<p>Nilai UTS : $nilai_uts</p>";
    echo "<p>Nilai UAS : $nilai_uas</p>";
    echo "<p>Nilai Tugas : $nilai_tugas</p>";
    echo "<p>Nilai Total : $nilai_total</p>";

    // Menentukan kelulusan
    if ($nilai_total > 55) {
        echo "<p>Status: Lulus</p>";
    } else {
        echo "<p>Status: Tidak Lulus</p>";
    }

    echo "</div>";
}
?>
