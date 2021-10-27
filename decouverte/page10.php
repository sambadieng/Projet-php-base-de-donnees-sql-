<?php
      require_once("decouverte1.php");
      $req="SELECT count(gender) FROM `table 1` WHERE gender='Male'";
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
      <h1>NOMBRE DE FEMMES</h1>

          <table border="1" id="table">
          	  <tr>
          	       
          	       <th>COUNT(GENDER)</th> 
          	      

          	  </tr>
          	   <?php  while ($gen=$ps->fetch()) {?>
                         <tr>
                         	
                         	        <td><?php echo ($gen["count(gender)"] )  ?> </td>
                         	        

                         </tr>
                        	
                        
          	     <?php  } ?>	
          	  
          </table>





</body>
</html>
