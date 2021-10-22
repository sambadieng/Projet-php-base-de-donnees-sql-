<?php
      require_once("entete.php");
?>
<?php
   require_once("securite.php");
?>
<?php
  require_once("conn.php");
       $req=  "SELECT * FROM etudiant";
       $ps=$pdo->prepare($req);
       $ps->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LISTE ETUDIANT</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="scolarite.css">
	
</head>
<body>
         <table border="1"  id="table">
         	<tr>
         		<th>CODE</th>
         		<th>PRENOM</th>
         		<th>NOM</th>
         		<th colspan="3">EMAIL</th>
         	</tr>
         	<?php while ( $et= $ps->fetch()){?> 
         		<tr>
         			 <td> <?php echo ($et["CODE"])  ?></td>
         			 <td> <?php echo ($et["PRENOM"])  ?></td>
         			 <td> <?php echo ($et["NOM"])  ?></td>
         			 <td> <?php echo ($et["EMAIL"])  ?></td>
         			 <td><a href="edit.php?code=<?php echo ($et["CODE"]) ?>">edit</a></td>
         			 <td><a  onclick="return confirm('Etes vous sur..? ');" href="supprimer.php?code=<?php echo ($et["CODE"])  ?>">supprimer</a></td>
         			</tr>
         	 <?php }?>

         	<tr>
         		
         	</tr>
         </table>



</body>
</html>