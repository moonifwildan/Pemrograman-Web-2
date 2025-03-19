<?php
require_once 'class_nilaimahasiswa.php';

$mhs1 = new NilaiMahasiswa();
$mhs1->nama = "Budi Santoso";
$mhs1->matakuliah = "pemrograman web";
$mhs1->nilai_tugas = 80;
$mhs1->nilai_uts = 75;
$mhs1->nilai_uas = 80;


$mhs2 = new NilaiMahasiswa();
$mhs2->nama = "adit";
$mhs2->matakuliah = "pemrograman web";
$mhs2->nilai_tugas = 20;
$mhs2->nilai_uts = 20;
$mhs2->nilai_uas = 20;

$ar_mahasiswa = [$mhs1, $mhs2];

?>

<h2>Daftar Nilai Mahasiswa</h2>
<table border="1" cellspacing="2" cellpadding="2" width=100%">
<thead>
    <tr>
        <th>no</th><th>nama</th><th>Mata Kuliah</th><th>nama</th><th>nilai tugas</th><th>nilai uts</th><th>nilai uas</th>
</thead>
<tbody>
    <?php
    $no = 1;
    foreach($ar_mahasiswa as $obj){

    
        ?>
    <tr>
        <td><?=$no ?></td>  
        <td><?=$obj->nama ?></td> 
        <td><?=$obj->matakuliah ?></td>
        <td><?=$obj->nilai_tugas ?></td>  
        <td><?=$obj->nilai_uts ?></td> 
        <td><?=$obj->nilai_uas ?></td>
        <td><?=$obj->getNilaiAkhir(); ?></td>  
        <td><?=$obj->kelulusan(); ?></td> 
    </tr>
    <?php

    $no++;

    }
    ?>