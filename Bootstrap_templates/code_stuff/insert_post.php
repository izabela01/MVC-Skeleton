      <?php
       include "connection_blog.php";
    ?>
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
        
        <form method="post" action="">  
             
       Title: <input type="text" name="title">  
        
        Description: <input type="text" name="description">  
      
        <input type="file" name = "image">
        
        <textarea name="body" rows="5" cols="40"></textarea>
        
        <input type="submit" name="submit" value="Submit">  
        
        </form>
     
        <?php     
       if (!empty($_POST)){
             $blog_Title = ($_POST["title"]);
             $blog_Body =($_POST["body"]);
             $blog_Date = date("y-m-d");
             $blog_Description = ($_POST["description"]);
          } 
          
         if (isset($_POST["submit"])){
            
         $stmt = $PDO->prepare("INSERT INTO blog(title, body, blogDate, description)
                  VALUES (:title,:body,:date, :description)");
             
        
             $stmt->bindParam(":title", $blog_Title);
             $stmt->bindParam(":body", $blog_Body);
             
             $stmt->bindParam(":date", $blog_Date);
             $stmt->bindParam(":description", $blog_Description);
                 
             
             $stmt->execute();   
         
             
             echo "You have successfully made a post. Click to view";
      }                                              /* re-direct or na ? */
    
        ?>
    </body>
</html>
