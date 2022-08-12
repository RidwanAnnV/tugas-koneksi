<?php

 $nama = $_POST['nama'];
 $kelas = $_POST['kelas'];

 $db = new PDO("mysql:host=localhost;dbname=11aug",'root','');
 $query = $db->query("insert into latihan11aug values('','$nama','$kelas')");

 if($query){
    header("Location:index.php");
 }