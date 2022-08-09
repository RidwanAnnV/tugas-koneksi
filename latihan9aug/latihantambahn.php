<?php

include('latihan.php');

$nama = $_REQUEST['nama'];
$kelas = $_REQUEST['kelas'];
$jurusan = $_REQUEST['jurusan'];

$query = $dbh->query("insert into latihanlagi values('$nama','$kelas','$jurusan')");