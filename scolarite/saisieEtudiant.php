<?php
      require_once("entete.php");
?>

<?php
   require_once("securite.php");
   require_once("rolescolarite.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>SAISIEETUDIANT</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="scolarite.css">
</head>
<body> 
<div class="divmax">
	<form method="post" action="saveEtudiant.php" >
		<div class="div1">
	         <label for="pre">PRENOM</label>
	         <input type="text" id="pre" name="prenom" required="required">
	    </div>
	    <div class="div2">
	         <label for="no">NOM</label>
	         <input type="text" id="no" name="nom" required="required">
	    </div>
	    <div class="div3">
	         <label for="em">EMAIL</label>
	         <input type="text" id="em" name="email" required="required">
	    </div>
	    <div class="div4">
	    	 <input type="submit" name="soumettre" value=SOUMMETTRE>
	    </div>
	         
	</form>
</div>
</body>
</html>