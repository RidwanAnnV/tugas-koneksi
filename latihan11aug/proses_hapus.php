<?php
        $kelas = $_GET['kelas'];



    $db = new PDO("mysql:host=localhost;dbname=11aug",'root','');

    $query = $db->query("DELETE FROM latihan11aug WHERE kelas='$kelas'");

    if($query){
        header("Location:index.php");
    }