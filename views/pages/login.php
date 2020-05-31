<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Bootstrap link -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <!--external stylesheet -->
        <link rel="stylesheet" href="css/styles1.css">
        <title>Login</title>
        <style>
          
body{
  height: 70%;
  background-image:url("views/images/img/beach1.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
                
        </style>
    </head>
 
              <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Login</h1>
            <div class="card-body">
                    <form action="" method="POST">

                            <div class="form-group">
                            <label for="=email">Email</label>
                            <input type="text" name="email" class="form-control form-control-lg" required>
                        </div>

                        <div class="form-group">
                            <label for="=username">Password</label>
                            <input type="password" name="password"  class="form-control form-control-lg" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login</button>
                        </div>
                        <p class="text-center">Not yet a member? <a href="signup.php">Sign Up</a></p>



                    </form>
            </div>

                </div>   


            </div>
                  </div>
        


        <?php
        // put your code here
        ?>
  
</html>

