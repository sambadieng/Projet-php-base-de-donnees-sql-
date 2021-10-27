<?php
      require_once("decouverte1.php");
      $req="INSERT INTO  `table 1` VALUES(1001,'Samba','DIENG','sambadieng18@yahoo.fr','Male','18.19.252.245','18/01/1991','SN','http:/dieng.fr/image.jpg')  ";
      $ps=$pdo->prepare($req);
      $ps->execute();

      header("location:page1.php")


?>