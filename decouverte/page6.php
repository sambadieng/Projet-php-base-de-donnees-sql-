<?php
      require_once("decouverte1.php");
      $req="SELECT country_code,count(country_code) FROM `table 1` GROUP BY country_code ASC";
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
      <h1>PREPARTION PAR ETAT + ENREGISTREMENT CROISSANT</h1>

          <table border="1" id="table">
          	  <tr>
          	       
          	       <th>COUNTRYCODE</th> 
          	         <th>COUNT(COUNTRYCODE)</th> 
          	      

          	  </tr>
          	   <?php  while ($gen=$ps->fetch()) {?>
                         <tr>
                         	
                         	        <td><?php echo ($gen["country_code"] )  ?> </td>
                         	        <td><?php echo ($gen["count(country_code)"] )  ?> </td>
                         	        

                         </tr>
                        	
                        
          	     <?php  } ?>	
          	  
          </table>





</body>
</html>
