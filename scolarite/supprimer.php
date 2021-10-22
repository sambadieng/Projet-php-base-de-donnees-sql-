<?php
   require_once ("entete.php");
   
?>

<?php
   require_once("securite.php");
   require_once("rolescolarite.php");
   
?>


<?php
      $code=$_GET["code"];
      require_once("conn.php");
       $ps= $pdo->prepare("DELETE FROM etudiant WHERE CODE=?");
       $table=[$code];
       $ps->execute($table);
       header("location:etudiant.php");

?>