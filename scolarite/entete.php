<!DOCTYPE html>
 <html>
 <head>
 	<title>Haut de page </title>
 	<link rel="stylesheet" type="text/css" href="scolarite1.css">
 </head>
 <body>
        <div class="en">
	
		   <nav>
		       <a href="etudiant.php" class="c1">ETUDIANT</a>
		       <a href="saisieEtudiant.php" class="c2" >SAISIE</a>  
		       <a href="logout.php" class="c3">LOGOUT
		        [<?php 
		           session_start();
		        echo ((isset($_SESSION['PROFILE']))?($_SESSION['PROFILE']['LOGIN']):"") 
		        ?>]
		    </a>
		   </nav>
	    </div>

 </body>
 </html> 

