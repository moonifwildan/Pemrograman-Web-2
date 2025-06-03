<?php
require_once 'class_nilaimahasiswa.php';

$hasil = '';
if (isset($_POST['proses'])) {
    $mhs = new NilaiMahasiswa();
    $mhs->nama = $_POST['nama'];
    $mhs->matakuliah = $_POST['matakuliah'];
    $mhs->nilai_tugas = $_POST['nilai_tugas'];
    $mhs->nilai_uts = $_POST['nilai_uts'];
    $mhs->nilai_uas = $_POST['nilai_uas'];

    $hasil = "
        <h3>Hasil Nilai Mahasiswa</h3>
        <b>Nama:</b> {$mhs->nama}<br>
        <b>Mata Kuliah:</b> {$mhs->matakuliah}<br>
        <b>Nilai Tugas:</b> {$mhs->nilai_tugas}<br>
        <b>Nilai UTS:</b> {$mhs->nilai_uts}<br>
        <b>Nilai UAS:</b> {$mhs->nilai_uas}<br>
        <b>Nilai Akhir:</b> " . number_format($mhs->getNilaiAkhir(), 2) . "<br>
        <b>Status:</b> {$mhs->kelulusan()}
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Nilai Mahasiswa</title>
</head>
<body>
    <h2>Form Nilai Mahasiswa</h2>
    <form method="POST">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Mata Kuliah:</label><br>
        <input type="text" name="matakuliah" required><br><br>

        <label>Nilai Tugas:</label><br>
        <input type="number" name="nilai_tugas" required><br><br>

        <label>Nilai UTS:</label><br>
        <input type="number" name="nilai_uts" required><br><br>

        <label>Nilai UAS:</label><br>
        <input type="number" name="nilai_uas" required><br><br>

        <input type="submit" name="proses" value="Hitung">
    </form>

    <hr>

    <?= $hasil ?>
</body>
</html>
