<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi Warga</title>
</head>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
    <script>
    // validasi untuk yang selain no ktp
    function validateForm() {
    let x = document.forms["format"]["nama_lengkap","alamat_lengkap","no_hp"].value;
    if (x == "") {
    alert("harus di isi lengkap");
    return false;
    }
    // end
    // untuk validasi no ktp warga
    let y = document.forms["format"]["no_ktp"].value;
    if (y == "") {
        alert("harus di isi lengkap");
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
    </script>
    <div class="container">
    <div class="row">
        <div class="col-md-8">
        <h2>Form Registrasi Warga</h2>
        <hr>
        <form action="index.php" method="post" onsubmit="return validateForm()" name="format">
        <table class="table table-bordered">
            <tr>
                <th colspan="2">Biodata Pribadi</th>
            </tr>
            <tr>
                <td>Nomor KTP</td>
                <td><input class="form-group form-control" type="text" name="no_ktp" id="no_ktp" onkeypress="return hanyaAngka(event)"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input class="form-group form-control" type="text" name="nama_lengkap" id="nama_lengkap"></td>
            </tr>
            <tr>
                <td>Alamat Lengkap</td>
                <td><input class="form-group form-control" type="text" name="alamat_lengkap" id="alamat_lengkap"></td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td><input class="form-group form-control" type="text" name="no_hp" id="no_hp" onkeypress="return hanyaAngka(event)"></td>
            </tr>
            <tr>
                <td colspan="2"><button class="btn btn-success w-100" name="daftar" type="submit">Daftar </button></td>
            </tr>
        </table>
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