<?php
      require_once("page1.php");
        $req=  "SELECT AGE FROM apprenants";
        $ps= $pdo->prepare($req);
            $ps->execute();

?>


<!DOCTYPE html>
<html>
<head>
	<title>AGE DES APPRENANTS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="page.css">
</head>
<body>
	<h1>L'AGE DES APPRENANTS</h1>
	<table border="1" id="table1">
		<tr bgcolor="blue">
			<th style="color: black;">AGE</th>
		</tr>
		<?php
		     while ( $age= $ps->fetch()) { ?>
		     	<tr> <td><?php echo  $age["AGE"] ?> </td></tr>
		   <?php  }?>
	
	</table>


</body>
</html>