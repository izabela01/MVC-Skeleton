<?php
    include "connection_blog.php";

        $countryid = 1;
        $stmt = $PDO->prepare("SELECT title, blogDate, description, blogID FROM
                                blog WHERE countryID =:countryid ORDER BY blogID DESC LIMIT 3");
                                                    /*limit 3, means the max amount of querys*/
                                                    /*in order of most recent */
                                                    /*need a stored procedure for author*/
          $stmt->bindParam(":countryid", $countryid);
           
             $stmt->execute();   
             
          $rows = $stmt-> fetchAll(PDO:: FETCH_OBJ);
         
          foreach ($rows as $row){
              
               echo $row->title . "<br>";
               echo $row->blogDate . "<br>";
               echo $row->description . "<br>";
              
               
          }
  ?>
