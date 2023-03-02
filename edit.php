<?php
include("koneksi.php");

if( ! isset($_GET['id_penerima']) ){
    header('Location:tampil.php');
}


$id_penerima = $_GET['id_penerima'];
$sql = "SELECT * FROM tb_pasien INNER JOIN tb_bantuan ON tb_pasien.id_bantuan = tb_bantuan.id_bantuan 
WHERE tb_pasien.id_penerima='$id_penerima'";
$query = mysqli_query($koneksi, $sql);
$tb_pasien = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>
<body>

        <h2>Edit Data Pasien</h2>
        <form action="proses-edit.php" method="POST">
            <table border= "0">
                <tr>
                    <td><input type="hidden" name="id_penerima" value="<?php echo $tb_pasien['id_penerima']?>" /></td>
</tr>
<tr>
    <td><label for ="namapenerima">Nama Penerima :</label></td>
    <td><input type ="text" name="namapenerima" value="<?php echo $tb_pasien['namapenerima']?>"/></td>
</tr> 
<tr>
    <td><label for ="alamat">Alamat :</label></td>
    <td><input type ="text" name="alamat" value="<?php echo $tb_pasien['alamat']?>"/></td>
</tr> 
<tr>
                    <td><label for ="jeniskelamin">Jenis Kelamin :</label></td>
                    <td><input type ="radio" name="jeniskelamin" value="lakilaki">Laki-laki
                        <input type ="radio" name="jeniskelamin" value="perempuan">Perempuan</td>
</tr>
<tr>
    <td><label for ="nobantuan">No Bantuan :</label></td>
    <td><input type ="number" name="nobantuan" value="<?php echo $tb_pasien['nobantuan']?>"/></td>
</tr> 
<tr>
    <td><label for ="jenisbantuan">Jenis Bantuan :</label></td>
    <td><input type ="text" name="jenisbantuan" value="<?php echo $tb_pasien['jenisbantuan']?>"/></td>
</tr> 
</form>
</table><p>
    <td><input type="submit" name="edit" value="edit"></a></td>
</body>
</html>