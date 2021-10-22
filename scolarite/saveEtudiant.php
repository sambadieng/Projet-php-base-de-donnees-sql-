<?php
   require_once("securite.php");
   require_once("rolescolarite.php");
?>

<?php
       $firstname= $_POST["prenom"];
       echo $firstname ;
        $lastname=$_POST["nom"];
        echo  $lastname;
        $mail=$_POST["email"];
        echo $mail;
        require_once("conn.php");
        $req="INSERT INTO etudiant(PRENOM,NOM,EMAIL) values (?,?,?)";
        $ps=$pdo->prepare($req);
        $table=[$firstname,$lastname,$mail];
        $ps->execute($table);
        header("location:etudiant.php");
?>