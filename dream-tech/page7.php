<?php
      require_once('page1.php');
      $req="SELECT * FROM apprenants WHERE AGE>'24' ";
       $ps=$pdo->prepare($req);
       $ps->execute();
?>

<!DOCTYPE html>
<html>
<head>
	<title>AGE SUPERIEUR </title>
	<meta charset="utf-8">
</head>
<body>

      <h1>Les apprenants qui ont plus de 24ans</h1>
	  <table border="1">
         	<tr bgcolor="blue">
         		<th>IDAPPS</th>
		     	<th>NOM</th>
		     	<th>PRENOM</th>
		     	<th>AGE</th>
		     	<th>REGION</th>
		     	<th>MOYENNE</th>
		     	<th>DOMAINE</th>
		     	<th>NIVEAU</th>
            </tr>
            <?php  while ($et3=$ps->fetch()) { ?>
                  <tr>
                  	<td> <?php echo ($et3["idapp"]) ?> </td>
                  	<td> <?php echo ($et3["NOM"]) ?> </td>
                  	<td> <?php echo ($et3["PRENOM"]) ?> </td>
                  	<td> <?php echo ($et3["AGE"]) ?> </td>
                  	<td> <?php echo ($et3["REGION"]) ?> </td>
                  	<td> <?php echo ($et3["MOYENNE"]) ?> </td>
                  	<td> <?php echo ($et3["DOMAINE"]) ?> </td>
                  	<td> <?php echo ($et3["NIVEAU"]) ?> </td>
                  </tr>
                    
            <?php }?>

         </table>

</body>
</html>