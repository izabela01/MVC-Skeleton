<?php

class PagesController {
   
    public function home() {
      //example data to use in the home page
      
      require_once('views/pages/home.php');
    }

    public function aboutus() {
        require_once('views/pages/aboutus.php');
    }
            
    public function error() {
      require_once('views/pages/error.php');
    }
    
    
}
