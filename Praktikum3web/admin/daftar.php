<?php
include_once 'top.php';
include_once 'menu.php';
?>
<div>
    <div class="container-fluid px-4">
        <h1> silahkan isi form pendaftaran</h1>
</div>
</div>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Nilai Mahasiswa</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<div class="container mt-4">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Nilai Mahasiswa</h5>
        </div>
    </div>

    <form method="post" action ="./nilai_siswa.php "class="mt-3">
        <div class="form-group row">
            <label for="nama" class="col-md-4 col-form-label">Nama Lengkap</label> 
            <div class="col-md-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                        </div>
                    </div> 
                    <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="matkul" class="col-md-4 col-form-label">Mata Kuliah</label> 
            <div class="col-md-8">
                <select id="matkul" name="matkul" class="custom-select">
                    <option value="DDP">Dasar Dasar Pemrograman</option>
                    <option value="PW1">Pemrograman Web 1</option>
                    <option value="PW2">Pemrograman Web 2</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="nilai_uts" class="col-md-4 col-form-label">Nilai UTS</label> 
            <div class="col-md-8">
                <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="nilai_uas" class="col-md-4 col-form-label">Nilai UAS</label> 
            <div class="col-md-8">
                <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label for="nilai_tugas" class="col-md-4 col-form-label">Nilai Tugas</label> 
            <div class="col-md-8">
                <input id="nilai_tugas" name="nilai_tugas" type="text" class="form-control">
            </div>
        </div> 

        <div class="form-group row">
            <div class="offset-md-4 col-md-8">
                <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>





</body>
</html>


<?php include_once 'bottom.php';
?>