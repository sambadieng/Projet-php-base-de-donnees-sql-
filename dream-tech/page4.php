<?php
      require_once("page1.php");
        $req=  "SELECT DOMAINE FROM apprenants";
            $ps= $pdo->prepare($req);
            $ps->execute();

?>


<!DOCTYPE html>
<html>
<head>
	<title>DOMAINE DES APPRENANTS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="page.css">
</head>
<body>
	<h1>LES DOMAINES DES APPRENANTS</h1>
	<table border="1" id="table2" >
		<tr  id="col">
			<th style="color: black;">DOMAINE</th>
		</tr>
		<?php
		     while ( $domaine= $ps->fetch()) { ?>
		     	<tr> <td><?php echo  $domaine["DOMAINE"] ?> </td></tr>
		   <?php  }?>
	
	</table>


</body>
</html>