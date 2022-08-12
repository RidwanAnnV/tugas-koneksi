<?php
 $db = new PDO("mysql:host=localhost;dbname=11aug",'root','');
 $query = $db->query('select * from latihan11aug');

 while ($db = $query->fetch() ) :?>
    <p>
        <a href="edit.php?kelas=<?= $db['kelas']; ?>">
            <?= $db['nama'] ?>
        </a>
        
        <a href="proses_hapus.php?id=<?= $db['kelas']; ?>" style="color:white;background:red;padding:2px;border-radius:3px">
            Hapus
        </a>
    </p>
<?php endwhile ?>