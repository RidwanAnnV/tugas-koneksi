<?php
$dbh = new PDO('mysql:host=localhost;
dbname=sekolah','root','');

$query = $dbh->query("select * from siswa");


?>

<h1>LATIHAN KONEKSI</h1>

<?php while($result = $query->fetch()){ ?>

    <p><?= $result['nama']; ?>

<?php } ?>