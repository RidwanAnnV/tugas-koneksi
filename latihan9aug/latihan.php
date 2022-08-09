<?php
$dbh = new PDO('mysql:host=localhost;dbname=lagi','root','');
$query = $dbh->query("insert into latihanlagi values('IRFAN',12,'RPL')");



?>