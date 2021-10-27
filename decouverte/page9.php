<?php
       require_once("decouverte1.php");
       $req="DELETE FROM `table 1` WHERE first_name='samba'";
       $ps=$pdo->prepare($req);
       $ps->execute();
       header("location:page1.php");

?>