<?php
require_once "dbkoneksi.php";

include_once 'template/top.php';
include_once 'template/sidebar.php';

$list_pasien = $db->query("SELECT * FROM pasien");
?>

<div class="container mt-4">
    <h3>Daftar Pasien</h3>

    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Email</th>
                <th>Alamat</th>
               
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach ($list_pasien as $pasien) {
                $genderText = ($pasien['gender'] == 'L') ? 'Laki-Laki' : 'Perempuan';
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= htmlspecialchars($pasien['kode']); ?></td>
                <td><?= htmlspecialchars($pasien['nama']); ?></td>
                <td><?= $genderText; ?></td>
                <td><?= htmlspecialchars($pasien['tmp_lahir']); ?></td>
                <td><?= htmlspecialchars($pasien['tgl_lahir']); ?></td>
                <td><?= htmlspecialchars($pasien['email']); ?></td>
                <td><?= htmlspecialchars($pasien['alamat']); ?></td>

                <td>
                    <a href="proses_pasien.php?delete=<?= $pasien['id']; ?>" 
                       onclick="return confirm('Yakin ingin menghapus data ini?')" 
                       class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
