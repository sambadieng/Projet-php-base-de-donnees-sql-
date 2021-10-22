<?php
      require_once("page1.php");
        $req=  "SELECT * FROM apprenants WHERE REGION=? ";
      $ps=$pdo->prepare($req);
      $table=["DAKAR"] ;
      $ps->execute($table);
      
      ?>
<!DOCTYPE html>
<html>
<head>
	<title>DAKAROIS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="page.css">
</head>
<body>
    <h1>Les habitants à Dakar</h1>
	<table border="1" id="table2">
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
		     <?php while ($et1=$ps->fetch()) {?>
		     	<tr>
		     		<td><?php echo ($et1["idapp"]) ?></td>
		     		<td><?php echo ($et1["NOM"]) ?></td>
		     		<td><?php echo ($et1["PRENOM"]) ?></td>
		     		<td><?php echo ($et1["AGE"]) ?></td>
		     		<td><?php echo ($et1["REGION"]) ?></td>
		     		<td><?php echo ($et1["MOYENNE"]) ?></td>
		     		<td><?php echo ($et1["DOMAINE"]) ?></td>
		     		<td><?php echo ($et1["NIVEAU"]) ?></td>
		     	</tr>


		     <?php }  ?>  
        

	</table>

</body>
</html>