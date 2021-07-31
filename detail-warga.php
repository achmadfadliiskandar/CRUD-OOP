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
    <div class="container">
    <div class="row">
        <div class="col-md-8">
        <h2>Form Detail Registrasi Warga</h2>
        <hr>
        <table class="table table-striped table-bordered">
            <tr>
                <td>No ID</td>
                <td><?php echo $data['id']; ?></td>
            </tr>
            <tr>
                <td>No KTP</td>
                <td><?php echo $data['no_ktp']; ?></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><?php echo $data['nama_lengkap']; ?></td>
            </tr>
            <tr>
                <td>Alamat Lengkap</td>
                <td><?php echo $data['alamat_lengkap']; ?></td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td><?php echo $data['no_hp']; ?></td>
            </tr>
            <tr>
                <td><a href="index.php" class="btn btn-primary">Kembali</a></td>
                <td></td>
            </tr>
        </table>
        </div>
        <div class="col-sm-4">
        <h2>Form Edit Warga</h2>
        <hr>
        <form method="post" action="index.php">
                    <div class="form-group row">
                        <label for="no_ktp" class="col-sm-2 col-form-label">No ktp :</label>
                        <div class="col-sm-9">
                        <input type="number" name="id" class="form-control" style="display: none;" id="no_ktp" value="<?=  $data['id'];?>" required>
                        <input type="number" name="no_ktp" class="form-control" id="no_ktp" value="<?=  $data['no_ktp'];?>" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama lengkap :</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" value="<?=  $data['nama_lengkap'];?>" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="alamat_lengkap" class="col-sm-2 col-form-label">Alamat :</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" name="alamat_lengkap" id="alamat_lengkap" cols="30" rows="10" value="<?= $data['alamat_lengkap'];?>" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="no_hp" class="col-sm-2 col-form-label">No Hp :</label>
                        <div class="col-sm-9">
                            <input type="number" name="no_hp" class="form-control" id="no_hp" value="<?=  $data['no_hp'];?>" required>
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
    </div>
    </div>
</body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>