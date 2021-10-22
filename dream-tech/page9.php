<?php
      require_once('page1.php');
        $req="SELECT * FROM apprenants WHERE MOYENNE BETWEEN  '14' AND '20'" ;
        $ps=$pdo->prepare($req);
        $ps->execute();

?>
<!DOCTYPE html>
<html>
<head>
	<title>AGE COMPRIS</title>
	<meta charset="utf-8">
</head>
<body>
        <h1>Les apprenants qui ont entre 14 et 20 de moyenne</h1>
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
            <?php  while ($et4=$ps->fetch()) { ?>
                  <tr>
                  	<td> <?php echo ($et4["idapp"]) ?> </td>
                  	<td> <?php echo ($et4["NOM"]) ?> </td>
                  	<td> <?php echo ($et4["PRENOM"]) ?> </td>
                  	<td> <?php echo ($et4["AGE"]) ?> </td>
                  	<td> <?php echo ($et4["REGION"]) ?> </td>
                  	<td> <?php echo ($et4["MOYENNE"]) ?> </td>
                  	<td> <?php echo ($et4["DOMAINE"]) ?> </td>
                  	<td> <?php echo ($et4["NIVEAU"]) ?> </td>
                  </tr>
                    
            <?php }?>

         </table>





</body>
</html>