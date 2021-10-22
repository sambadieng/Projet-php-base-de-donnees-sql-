<?php
   require_once ("entete.php");
?>

<?php
   require_once("securite.php");
   require_once("rolescolarite.php");
?>

<?php     

     $code= $_GET["code"];
     require_once("conn.php");
     $ps=$pdo->prepare("SELECT * FROM etudiant WHERE code=?");
     $table=[$code];
     $ps->execute($table);
     $etudiant=$ps->fetch();
?>     
<!DOCTYPE html>
<html>
<head>
	<title>EDIT DES ETUDIANTS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="scolarite.css">
</head>
<body>
     <div class="div">    
	<form method="post" action="update.php" >
        <div id="id1">
        	 <label for="co">CODE</label><br>
	         <input type="text" id="co" name="code" required="required" value=" <?php echo $etudiant["CODE"] ?>">
        </div >

		<div id="id2">
	         <label for="pre">PRENOM</label><br>
	         <input type="text" id="pre" name="prenom" required="required" value=" <?php echo $etudiant["PRENOM"] ?>">
	    </div>
	    <div id="id3">
	         <label for="no">NOM</label><br>
	         <input type="text" id="no" name="nom" required="required"
	         value="<?php echo $etudiant["NOM"] ?>">
	    </div>
	    <div id="id4">
	         <label for="em">EMAIL</label><br>
	         <input type="text" id="em" name="email" required="required"
	         value="<?php echo $etudiant["EMAIL"] ?>">
	    </div>
	          <input type="submit" name="soumettre" value=SAVE id="save">
	</form>
	</div>
</body>
</html>