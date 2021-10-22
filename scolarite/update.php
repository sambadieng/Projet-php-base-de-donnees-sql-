<?php
   require_once("securite.php");
?>

<?php
      $code=$_POST["code"];
       $firstname= $_POST["prenom"];
       echo $firstname ;
        $lastname=$_POST["nom"];
        echo  $lastname;
        $mail=$_POST["email"];
        echo $mail;
        require_once("conn.php");
        $req="UPDATE etudiant SET PRENOM=?,NOM=?,EMAIL=? WHERE CODE=?";
        $ps=$pdo->prepare($req);
        $table=[$firstname,$lastname,$mail,$code];
        $ps->execute($table);
        header("location:etudiant.php");
?>