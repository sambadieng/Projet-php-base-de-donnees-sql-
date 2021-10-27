<!DOCTYPE html>
<html>
<head>
       <title>PAGE  CONNEXION</title>
       <meta charset="utf-8">
</head>
<body>
    
       <?php
              try {
                     $strconnection="mysql:host=localhost;dbname=mockdataa";
                     $pdo=new PDO($strconnection,"root","");
                     
              } catch (PDOException $e) {
                     $msg="ERREUR pdo dans".$e.getmessage();
                     die($msg);
              }

       ?>
   </body>    

   
   </html>