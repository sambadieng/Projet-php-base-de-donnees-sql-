<?php
   require_once("decouverte1.php");
   $req="UPDATE  `table 1` SET email='sambadieng180@yahoo.fr' WHERE id=1001 ";
   $ps=$pdo->prepare($req);
   $ps->execute();
     header("location:page1.php");
?>