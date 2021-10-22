<?php
      $login=  $_POST["username"];
      $username= md5($_POST['password'])  ;
      require_once("conn.php");
       $ps=$pdo->prepare("SELECT * FROM users WHERE LOGIN=? AND PASSWORD=?");
       $table=[$login,$username];
       $ps->execute($table);
       if ($user=$ps->fetch()) {
       	session_start();
       	$_SESSION['PROFILE']=$user;
       	header("location:etudiant.php");
       }
       else{
       	  header("location:login.php");
       }

?>