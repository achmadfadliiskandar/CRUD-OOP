<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Detail Registrasi Warga</title>
</head>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
<?php
include('mylib/myDb.php');
$Db=new myDb();
$idwarga=$_GET['id'];
$data=$Db->get_by_id($idwarga);
//print_r($data);
//echo "blalala";
?>
<!-- <script>
    // validasi untuk yang selain no ktp
    function validateForm() {
    let x = document.forms["format"]["nama_lengkap","alamat_lengkap","no_hp"].value;
    if (x == "") {
    alert("harus di isi lengkap");
    return false;
    }
    // end validasi selain no ktp
    // untuk validasi no ktp warga
    let y = document.forms["format"]["no_ktp"].value;
    if (y == "") {
        alert("harus di isi lengkap");
        location:"patok ayam"
        return false;
    }
    }
    // akhir validasi no ktp warga
    // untuk inputan hanya boleh angka
    function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
        return true;
    }
    }
    // end
    </script> -->
<div class="container">
<h2>Form Edit Warga</h2>
<a href="http://localhost/CRUD%20OOP/" class="btn btn-dark">Back</a>
        <hr>
        <form method="post" action="index.php" name="format" onsubmit="validateForm()">
                    <div class="form-group row">
                        <label for="no_ktp" class="col-sm-2 col-form-label">No ktp :</label>
                        <div class="col-sm-9">
                        <input type="number" name="id" class="form-control" style="display: none;" id="no_ktp" value="<?=  $data['id'];?>">
                        <input type="number" name="no_ktp" class="form-control" id="no_ktp" value="<?=  $data['no_ktp'];?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama lengkap :</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="<?=  $data['nama_lengkap'];?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="alamat_lengkap" class="col-sm-2 col-form-label">Alamat :</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="alamat_lengkap" id="alamat_lengkap" cols="30" rows="10" value="<?= $data['alamat_lengkap'];?>">
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="no_hp" class="col-sm-2 col-form-label">No Hp :</label>
                        <div class="col-sm-9">
                            <input type="number" name="no_hp" class="form-control" id="no_hp" value="<?=  $data['no_hp'];?>">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="d-grid gap-2">
                            <button class="btn btn-success btn-block" name="update" value="update" type="submit">Ubah</button>
                        </div>
                    </div>
                </form>

</div>