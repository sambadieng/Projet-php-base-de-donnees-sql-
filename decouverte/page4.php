<?php
      require_once("decouverte1.php");
      $req="SELECT  * FROM `table 1` WHERE country_code LIKE 'N%'";
      $ps=$pdo->prepare($req);
      $ps->execute();
?>
<!DOCTYPE html>
<html>
<head>
	<title>PALMER</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="decouverte.css">
</head>
<body>
      <h1>TOUS LES ETATS DONT LA LETTRE COMMENCE PAR N</h1>

          <table border="1" id="table">
          	  <tr>
          	       
          	       <th>COUNTRYCODE</th> 
          	      

          	  </tr>
          	   <?php  while ($gen=$ps->fetch()) {?>
                         <tr>
                         	
                         	        <td><?php echo ($gen["country_code"] )  ?> </td>
                         	        

                         </tr>
                        	
                        
          	     <?php  } ?>	
          	  
          </table>





</body>
</html>

