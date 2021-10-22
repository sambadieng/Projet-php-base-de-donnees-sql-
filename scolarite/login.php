<?php
   require_once("entete.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>AUTHENTIFICATION</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="scolarite1.css">
</head>
<body> 
	
<div class="log1">
	<h2>AUTHENTIFICATION</h2>
	<form method="post" action="authentifier.php" >
		<div class="log2">
	         <label for="lo">LOGIN</label>
	         <input type="text" id="lo" name="username" required="required">
	    </div>
	    <div class="log3">
	         <label for="pa">PASSWORD</label>
	         <input type="password" id="pa" name="password" required="required">
	    </div>
	    
	    <div class="log4">
	    	 <button type="submit">Login</button>
	    </div>
	         
	</form>
</div>
</body>
</html>