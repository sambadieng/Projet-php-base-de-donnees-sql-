<?php
require_once("decouverte1.php");
$req="SELECT * FROM `table 1` WHERE last_name='Palmer' LIMIT 0,25 ";
$ps=$pdo->prepare($req);

$ps->execute();
//var_dump($ps->fetch());
//var_dump($ps->fetch());
//var_dump($ps->fetch());
//for ($i=0; $i <1000 ; $i++) { 
//	var_dump($ps->fetch());
//}

?>
<!DOCTYPE html>
<html>
<head>
	<title>PALMER</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="decouverte.css">
</head>
<body>
      <h1>TOUS LES GENS DONT LE NOM EST PALMER</h1>

          <table border="1" id="table">
          	  <tr>
          	       <th>ID</th> 
          	       <th>FIRSTNAME</th> 
          	       <th>LASTNAME</th> 
          	       <th>EMAIL</th> 
          	       <th>GENDRE</th> 
          	       <th>IPADRESS</th> 
          	       <th>BIRTHDATE</th> 
          	       <th>COUNTRYCODE</th> 
          	       <th>AVATAR</th> 

          	  </tr>
          	   <?php  while ($gen=$ps->fetch()) {?>
                         <tr>
                         	 <td><?php echo ($gen["id"] )  ?> </td>
                         	  <td><?php echo ($gen["first_name"] )  ?> </td>
                         	   <td><?php echo ($gen["last_name"] )  ?> </td>
                         	    <td><?php echo ($gen["email"] )  ?> </td>
                         	     <td><?php echo ($gen["gender"] )  ?> </td>
                         	      <td><?php echo ($gen["ip_address"] )  ?> </td>
                         	       <td><?php echo ($gen["birth_date"] )  ?> </td>
                         	        <td><?php echo ($gen["country_code"] )  ?> </td>
                         	         <td><?php echo ($gen["avatar_url"] )  ?> </td>

                         </tr>
                        	
                        
          	     <?php  } ?>	
          	  
          </table>





</body>
</html>

