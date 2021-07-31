<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Warga</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<?php //include('mylib/warga.lib.php'); 
include('mylib/myDb.php');
// untuk menyambungkan file mylib/warga.php
?>
<body>
<?php
$Db = new MyDb();
$data_warga = $Db->show();
//print_r($data_warga);
if(isset($_POST['daftar'])){
    //echo "Tombol Daftar Telah Di klik";
    $noktp = $_POST['no_ktp'];
    $nama = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat_lengkap'];
    $nohp = $_POST['no_hp'];
    $querysimpan = $Db->add_data($noktp,$nama,$alamat,$nohp);
    //print_r($_POST);
    if($querysimpan==TRUE){
        $pesansimpan="Data Tersimpan Ke Database";
    }else{
        $pesansimpan="Data Gagal Simpan Ke Database";
    }
}
if(isset($_GET['hapus'])){
    //echo "Data dengan ID :".$_GET['hapus']."  Akan di hapus";
    $idwarga=$_GET['hapus'];
    $queryhapus = $Db->delete($idwarga);
    if($queryhapus==TRUE){
        $pesanhapus= "Data Berhasil di hapus";
    }else{
        $pesanhapus ="Data Gagal Hapus";
    }
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $noktp = $_POST['no_ktp'];
    $nama = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat_lengkap'];
    $nohp = $_POST['no_hp'];
    $querysimpan = $Db->update($noktp,$nama,$alamat,$nohp,$id);
    // var_dump($_POST);
    if ($querysimpan) {
    $pesansimpanupdate = "Data Berhasil Di Update";
    } else {
    $pesansimpanupdate = "Data Gagal Terupdate";
    }
    
}
?>
<div class="container">
    <div class="col-sm-12">
    <div class="py-3">
    <h2>Data Warga</h2>
        <a href="form-daftar.php" class='btn btn-success'>Tambah Data Warga</a>
    </div>
    <?php 
    if(isset($_POST['daftar'])){
    ?>
    <div class="alert alert-success"><?php echo $pesansimpan; ?></div>
    <?php 
    }
    ?>

<?php 
    if(isset($_GET['hapus'])){
    ?>
    <div class="alert alert-danger"><?php echo $pesanhapus; ?></div>
    <?php 
    }
?>
        <table class="table table-bordered">
        <tr>
            <td>No</td>
            <td>No KTP</td>
            <td>Nama Lengkap</td>
            <td>Alamat</td>
            <td>No HP</td>
            <td>Action</td>
        </tr>
    <?php
    $i=0;
    if ($data_warga != TRUE) {
        echo "<div class='alert alert-danger' role='alert'>Data Kosong</div>";
    }
    // else {
    //     // echo "<div class='alert alert-success' role='alert'>Ada Data</div>";
    // }
    foreach($data_warga as $data){ 
        $i++;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $data['no_ktp']; ?></td>
            <td><?php echo $data['nama_lengkap']; ?></td>
            <td><?php echo $data['alamat_lengkap']; ?></td>
            <td><?php echo $data['no_hp']; ?></td>
            <td>
            <a class="btn btn-primary" href="detail-warga.php?id=<?php echo $data['id']; ?>">detail</a> 
            <a class="btn btn-danger" href="index.php?hapus=<?php echo $data['id']; ?>" onclick="return confirm('yakin ingin di hapus')">Hapus</a>
            </td>
        </tr>
    <?php } ?>
    </table>
    </div>
</div>
</body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>