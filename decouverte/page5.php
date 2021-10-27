<?php
      require_once("decouverte1.php");
      $req="SELECT email FROM `table 1` WHERE email LIKE '%google%'";
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
      <h1>TOUS LES EMAILS QUI CONTIENNENT GOOGLE</h1>

          <table border="1" id="table">
          	  <tr>
          	       
          	       <th>EMAIL</th> 
          	      

          	  </tr>
          	   <?php  while ($gen=$ps->fetch()) {?>
                         <tr>
                         	
                         	        <td><?php echo ($gen["email"] )  ?> </td>
                         	        

                         </tr>
                        	
                        
          	     <?php  } ?>	
          	  
          </table>





</body>
</html>
