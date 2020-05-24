<?php
include "connection_blog.php";

// SEEEE STUFF

      $blogid =2; /*should be $postid = $POST["blog_id"]; */
      $stmt = $PDO->prepare("SELECT title,body, blogDate, description FROM blog WHERE blogId =:blogid");
             
          
             $stmt->bindParam(":blogid", $blogid);
            
            
             $stmt->execute();   
             
             $row = $stmt-> fetch(PDO:: FETCH_OBJ);
//it shows the body, the title, the date and description
//need to get author if we dont get it on the view all posts page
             
             
  //LEAVE A COMMENT
                 
     $comment = ""; 
      
       if (!empty($_POST["comment"])){
           
          $comment =($_POST["comment"]); } 
          
            if (isset($_POST["submit"])){
                 
                
         $stmt = $PDO->prepare("INSERT INTO comments(body)
                  VALUES (:comment)");
             
     
             $stmt->bindParam(":comment", $comment);
             
         
             $stmt->execute();   
         
      }
      
      // not sure how to keep pre-existing comments, but it echos the one just submitted, take a look :)
    
             
                 
                 
           ?>
        

