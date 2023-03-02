<?php
include("koneksi.php");
if(isset($_POST['submit'])){
  $nobantuan=$_POST['nobantuan'];
  $jenisbantuan=$_POST['jenisbantuan'];
  $namapenerima=$_POST['namapenerima'];
  $alamat=$_POST['alamat'];
  $jeniskelamin=$_POST['jeniskelamin'];

  $sql = "INSERT INTO tb_bantuan(nobantuan,jenisbantuan)
  VALUES('$nobantuan','$jenisbantuan')";
  $query = mysqli_query($koneksi, $sql);

  $sql="SELECT max(id_bantuan)AS bantuan_id FROM tb_bantuan LIMIT 1";
  $query=mysqli_query($koneksi, $sql);

  $data=mysqli_fetch_array($query);
  $bantuan_id=$data['bantuan_id'];

  $sql="INSERT INTO tb_pasien(id_bantuan,namapenerima,alamat,jeniskelamin)
  VALUES('$bantuan_id','$namapenerima','$alamat','$jeniskelamin')";
  $query=mysqli_query($koneksi, $sql);

  if($query){
    header('location:tampil.php?status=sukses');
  }else{
    header('location:tampil.php?status=gagal');
  }
}
?>