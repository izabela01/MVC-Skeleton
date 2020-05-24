<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php                       /*dont forget to change it to your one saved on desktop*/
          const  DB_DSN = "mysql:host=localhost;dbname=proj_final";
          const DB_USER = "root";
          const DB_PASS = "";
    try {
      // connect to database
      $PDO = new PDO(DB_DSN, DB_USER, DB_PASS);
      
    }catch (PDOException $e) {
	die($e->getMessage()); 
    }
    $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        ?>
    </body>
</html>
