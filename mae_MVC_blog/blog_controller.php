<?php
                   //THIS IS WHERE YOU THE ACTION FUNCTIONS ARE DECLARED AND CALLED TO FROM THE LAYOUT QUERY STATEMENTS
                  // we store all the posts in a variable, so in MODEL can use loops, to call and manipulate htme


  /*same 'BLOG' name everywhere is necessary, this is based on the HTMML query*/
class blogController {
    
    //this is a view all posts for country
    public function all() { 
      $blog = blog::viewall();                  /*we are calling the view all function in the blog class found in the MODEL */
      require_once('views/viewAll.php');        /*we are also calling the html page in VIEWS to output the SQL */
    }                                     
}
  