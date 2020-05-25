<?php
//THIS IS THEN CALLED FROM THE CONTROLLER 
class blog{

    public $title;
    public $blogDate;
    public $description;
    public $blogID;
   
    public function __construct($title, $blogDate, $description, $blogID) {
      $this->title   = $title;
      $this->blogDate  = $blogDate;
      $this->description = $description;
      $this->blogID = $blogID;
    }

    // this allows you to view for each country
    public static function viewall(){
        $country = [];
        $PDO = PDO::getInstance();
        $stmt = $PDO->prepare("SELECT title, blogDate, description, blogID FROM
                                blog WHERE countryID =:countryid ORDER BY blogID DESC LIMIT 3");
                                                    /*limit 3, means the max amount of querys*/
                                                    /*in order of most recent */
                                                    /*need a stored procedure for author*/
          $stmt->bindParam(":countryid", $countryid);
            
          $stmt->execute();   
             
          $country_post = $stmt-> fetchAll(PDO:: FETCH_OBJ);
         
          foreach ($country_post as $blog){   /*we have now stored all the posts for user in amulti dimensional array */
             $country = new blog($blog["title"], $blog["blodgDate"], $blog["description"], $blog["blogID"]);
               
    } 
    return $country; }
}
