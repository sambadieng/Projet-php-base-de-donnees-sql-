<?php
   try {
   	   $strConnection="mysql:host=localhost;dbname=scolarite";
   	   $pdo=new PDO($strConnection,"root","");


   } catch (PDOException $e) {
   	$msg="ERREUR PDO dans". $e.getMessage();
   	die($msg);
   	
   }

?>