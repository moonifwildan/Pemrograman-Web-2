<?php
require_once "./dbkoneksi.php";

$list_pasien = $db->query("SELECT * FROM pasien");
?>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        foreach ($list_pasien as $pasien) { 
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= htmlspecialchars($pasien['kode']); ?></td>
            <td><?= htmlspecialchars($pasien['nama']); ?></td>
            <td><?= htmlspecialchars($pasien['gender']); ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>
