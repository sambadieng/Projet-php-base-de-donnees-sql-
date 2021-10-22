<?php
    require_once('page1.php');
    $req=  "SELECT * FROM apprenants WHERE MOYENNE>'16' AND AGE<'20'";
    $ps=$pdo->prepare($req);
    $ps->execute();  
    $ps->execute();
   //   var_dump($ps->fetch());  

?>
<!DOCTYPE html>
<html>
<head>
	<title>AGE ET MOYENNE</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="page.css">
</head>
<body>
	<h1>Les apprenants qui ont une moyenne supérieure à 16 et qui ont moins de 20ans</h1>
         <table border="1" id="table3">
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
         	 <?php  while ($et5= $ps->fetch()) { ?>
         	 	<tr >
         	 		<td> <?php echo ($et5["idapp"]) ?> </td>
                  	<td> <?php echo ($et5["NOM"]) ?> </td>
                  	<td> <?php echo ($et5["PRENOM"]) ?> </td>
                  	<td> <?php echo ($et5["AGE"]) ?> </td>
                  	<td> <?php echo ($et5["REGION"]) ?> </td>
                  	<td> <?php echo ($et5["MOYENNE"]) ?> </td>
                  	<td> <?php echo ($et5["DOMAINE"]) ?> </td>
                  	<td> <?php echo ($et5["NIVEAU"]) ?> </td>
         	 	</tr>
                  
       
         <?php  }?>

         </table>


        


</body>
</html>