<?php
include("koneksi.php");
if(isset($_POST['edit'])) {
    $id_penerima = $_POST['id_penerima'];
    $namapenerima= $_POST['namapenerima'];
    $alamat= $_POST['alamat'];
    $jeniskelamin= $_POST['jeniskelamin'];
    $nobantuan= $_POST['nobantuan'];
    $jenisbantuan= $_POST['jenisbantuan'];

    $sql = "UPDATE tb_pasien SET namapenerima='$namapenerima', alamat='$alamat', 
    jeniskelamin='$jeniskelamin' WHERE id_penerima='$id_penerima'";
    $query = mysqli_query($koneksi,$sql);

    $sql = "UPDATE tb_bantuan SET nobantuan='$nobantuan', jenisbantuan='$jenisbantuan'
    WHERE id_bantuan='$id_penerima'";
    $query = mysqli_query($koneksi,$sql);

    if($query){
        header('location:tampil.php?status=sukses');
    }else{
        header('location:tampil.php?status=gagal');
    }
}
?>