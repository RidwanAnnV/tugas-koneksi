<?php

 $nama = $_POST['nama'];
 $kelas = $_POST['kelas'];
 $jurusan =$_POST['jurusan'];

 $database = new PDO("mysql:host=localhost;dbname=11aug",'root','');
 $query = $database->query("UPDATE `latihan11aug` SET nama='$nama', jurusan='$jurusan' WHERE kelas='$kelas'");

 print_r($database->errorInfo());
 if($query){
    header("Location:index.php");
 }
