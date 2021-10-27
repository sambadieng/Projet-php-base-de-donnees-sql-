<?php
  require_once("decouverte1.php");
  $req="SELECT NOM,departement FROM membre,departement WHERE membre.id=departement.id";
  $ps=$pdo->prepare($req);
  $ps->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<title>NOM ET DEPARTEMENT</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="decouverte.css">
</head>
<body>
      <h1>NOM et DEPARTEMENT de RESIDENCE</h1>

          <table border="1" id="table">
          	  <tr>
          	       
          	       <th>NOM</th> 
          	         <th>DEPARTEMENT(residence)</th> 
          	      

          	  </tr>
          	   <?php  while ($gen=$ps->fetch()) {?>
                         <tr>
                         	
                         	        <td><?php echo ($gen["NOM"] )  ?> </td>
                         	        <td><?php echo ($gen["departement"] )  ?> </td>
                         	        

                         </tr>
                        	
                        
          	     <?php  } ?>	
          	  
          </table>





</body>
</html>
