<?php
   require_once("page1.php");
   $req="SELECT * FROM apprenants WHERE  REGION IN('DAKAR','ST LOUIS','THIES')" ;
        $ps=$pdo->prepare($req);
        
        
         $ps->execute();
        

?>
<!DOCTYPE html>
<html>
<head>
	<title>HABITANT DAKAR ST LOUIS ET THIES</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Les habitants à Dakar Thies et ST Louis</h1>
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
            <?php  while ($et2=$ps->fetch()) { ?>
                  <tr>
                  	<td> <?php echo ($et2["idapp"]) ?> </td>
                  	<td> <?php echo ($et2["NOM"]) ?> </td>
                  	<td> <?php echo ($et2["PRENOM"]) ?> </td>
                  	<td> <?php echo ($et2["AGE"]) ?> </td>
                  	<td> <?php echo ($et2["REGION"]) ?> </td>
                  	<td> <?php echo ($et2["MOYENNE"]) ?> </td>
                  	<td> <?php echo ($et2["DOMAINE"]) ?> </td>
                  	<td> <?php echo ($et2["NIVEAU"]) ?> </td>
                  </tr>
                    
            <?php }?>

         </table>
</body>
</html>