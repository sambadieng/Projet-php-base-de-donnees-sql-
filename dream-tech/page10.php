<?php
      require_once('page1.php');
      $req= "SELECT SUM(MOYENNE) FROM apprenants";
      $ps=$pdo->prepare($req);
      $ps->execute();
       $result=$ps->fetch();
       
?>
<!DOCTYPE html>
<html>
<head>
	<title>SOMME DES MOYENNES</title>
	<meta charset="utf-8">
</head>
<body>
   <h1>
	<?php
            echo "La somme des moyennes egale:".$result["SUM(MOYENNE)"];
	?>
    </h1> 
	
	

</body>
</html>