<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah</title>
</head>
<body>
    <table border="0">
        <form action="proses-tambah.php" method="POST">
    <h2>Tambah Pasien</h2>

    <p>
            <label for="namapenerima"> Nama Penerima :</label>
            <label><input type="text" name="namapenerima" /></label>
</p>
<p>
            <label for="alamat"> Alamat :</label>
            <label><input type="text" name="alamat" /></label>
</p>
<p>
            <label for="jeniskelamin"> Jenis Kelamin :</label>
            <label><input type="radio" name="jeniskelamin" value="lakilaki" />Laki-laki</label>
            <label><input type="radio" name="jeniskelamin" value="perempuan" />Perempuan</label>
</p>
<p>
            <label for="nobantuan"> No Bantuan :</label>
            <label><input type="text" name="nobantuan" /></label>
</p>
<p>
            <label for="jenisbantuan"> Jenis Bantuan :</label>
            <label><input type="text" name="jenisbantuan" /></label>
</p>
<input type="submit" name="submit" value="submit">
</body>
</html>