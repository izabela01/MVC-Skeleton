<!DOCTYPE html>
<!--
THIS IS THE LAYOUTS PAGE, ESSENTIALLY EQUIVELANT TO LISA HOMPAGE IN THE SKELETON CODE.

BUT IN THIS CASE WE HAVE QUERY STATMENTS ON OUR HOME PAGE, IT IS THEREFORE STATIC.

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <!--login and register need HREF query are here-->
       <!--controller maybe the same or not depending on classes for login, dont worry too much about this-->
     <input type="submit" name="submit" value="Submit">
     <input type="submit" name="submit" value="Submit">   
      
      
     <!---- these querys is where you define the functionalities, in the CONTROLLER NOT THE MODEL!! folder -->
                
     <a href="?controller=blog&action=all">
            <div class="index-boxlink-square">
              <h3>Iceland</h3>
            </div>
          </a>
      
        <a href="?controller=blog&action=all">
            <div class="index-boxlink-square">
              <h3>Ghana</h3>
            </div>
          </a>
        <a href="?controller=blog&action=all">
            <div class="index-boxlink-square">
              <h3>Poland</h3>
            </div>
          </a>
        <a href="?controller=blog&action=all">
            <div class="index-boxlink-square">
              <h3>Morocco</h3>
            </div>
          </a>
        <a href="?controller=blog&action=all">
            <div class="index-boxlink-square">
              <h3>Spain</h3>
            </div>
          </a>
      
    </body>
</html>
