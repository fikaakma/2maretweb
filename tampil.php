<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tampil</title>
</head>
<body>
    <h2>Tabel Pasien</h2>
    <a href ="tambah.php"><input type="button" value="tambah"></a>
    <table border = "1">
        <tr>
            <th>No </th>
            <th>Nama Penerima</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>No Bantuan</th>
            <th>Jenis Bantuan</th>
            <th>Aksi</th>
</tr>

<?php
include "koneksi.php";
$query =mysqli_query($koneksi, "SELECT * FROM tb_pasien INNER JOIN tb_bantuan 
ON  tb_pasien.id_bantuan=tb_bantuan.id_bantuan");

$no= 1;
foreach($query as $row):
?>

<tr>
        <td><?= $no++; ?></td>
        <td><?= $row['namapenerima']; ?></td>
        <td><?= $row['alamat']; ?></td>
        <td><?= $row['jeniskelamin']; ?></td>
        <td><?= $row['nobantuan']; ?></td>
        <td><?= $row['jenisbantuan']; ?></td>
<td>
    <a href="edit.php?id_penerima=<?= $row['id_penerima']; ?>">Edit</a> |
    <a href="hapus.php?id_penerima=<?= $row['id_penerima']; ?>">Hapus</a> 
</td>
</tr>
<?php endforeach ?>
</table>
</body>
</html>