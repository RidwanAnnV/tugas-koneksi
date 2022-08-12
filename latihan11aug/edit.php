<?php
$kelas = $_GET['kelas'];
$db =new PDO("mysql:host=localhost;dbname=11aug",'root','');
$query = $db->query("SELECT * from latihan11aug where kelas=$kelas");
$db = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="kelas" value="<?= $kelas ?>">
        <div>
            <label>Nama</label>
            <input type="text" name="nama" value="<?= $db['nama'] ?>">
        </div>
        <label>jurusan</label>
        <input type="text" name="jurusan" value="<?= $db['jurusan'] ?>">
        <div>
            <label>Kelas</label>
            <select name="kelas" id="">
                <option value="1" <?= $db['kelas'] == '1' ? 'selected' : '' ?>>12 RPL</option>
                <option value="2" <?= $db['kelas'] == '2' ? 'selected' : '' ?>>11 RPL</option>
             </select>
        </div>
        <input type="submit" value="simpan">
    </form>
</body>
</html>