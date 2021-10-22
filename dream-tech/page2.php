<?php
require_once("page1.php");
      $req=  "SELECT * FROM apprenants";
      $ps= $pdo->prepare($req);
      $ps->execute();
?>


<!DOCTYPE html>
<html>
<head>
	<title>LISTE DES ETUDIANTS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="page.css">
</head>
<body>
	<h1>Liste de tous les etudiants</h1>
       <table border="1" id="table">
       	<tr id="tr1">
       		<th class="">IDAPPS</th>
       		<th class="">NOM</th>
       		<th class="">PRENOM</th>
       		<th class="">AGE</th>
       		<th class="">REGION</th>
       		<th class="">MOYENNE</th>
       		<th class="">DOMAINE</th>
       		<th class="">NIVEAU</th>
       	</tr>
       	<?php while ($et=$ps->fetch()) {?>
       		  <tr>
       		  	<td class="td"><?php echo ($et["idapp"]) ?> </td>
       		  	<td class="td"><?php echo ($et["NOM"]) ?> </td>
       		  	<td class="td"><?php echo ($et["PRENOM"]) ?> </td>
       		  	<td class="td"><?php echo ($et["AGE"]) ?> </td>
       		  	<td class="td"><?php echo ($et["REGION"]) ?> </td>
       		  	<td class="td"><?php echo ($et["MOYENNE"]) ?> </td>
       		  	<td class="td"><?php echo ($et["DOMAINE"]) ?> </td>
       		  	<td class="td"><?php echo ($et["NIVEAU"]) ?> </td>
       		  </tr>
       <?php }?>
     </table>
</body>
</html>