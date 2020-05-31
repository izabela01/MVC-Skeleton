
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  
    <body>
   

            

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
<link href="css/style_create.css" rel="stylesheet"/>
<body>
<div style="background-image: url('views/images/img/beach1.jpg');">
      <div class="container" >
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Contact Us</h1>
      
      <div class="card-body">
            <form action="" method="POST"  class="form-signin" enctype="multipart/form-data">
              <hr>
              <div class="form-label-group">
               <label for="inputname">First Name</label> 
               <input id = 'inputname' name="firstName" type="text" class="form-control" placeholder="Your first name" autofocus="" required>
              </div>
              
           <div class="form-label-group">
               <label for="inputsurname">First Name</label> 
               <input id = 'inputsurname'name="lastname" type="text" class="form-control" placeholder="Your second name" required>
              </div>
              
               <div class="form-label-group">
               <label for="email">Email</label> 
               <input id = 'email' name="lastname" type="text" class="form-control" placeholder="Your second name" required>
              </div>
              
               <div class="form-label-group">
               <label for="inputsurname">First Name</label> 
               <input id = 'inputsurname' name="email" type="email" class="form-control" placeholder="Your email address">
              </div>
        
                <div class="form-group">
                     <label>Comments</label>
                    <textarea name="body" class="form-control" placeholder="Enter your message"></textarea>
                </div>

              
                <?php
                //need to add code to be able to link the database 
                ?>

        <input name="submit" type="submit" class="btn btn-success" value="Submit" />
        <a href="#" name="cancel" type="submit" class="btn btn-outline-success">Go back</a>
 
            </form>
          </div>
      
     
    </div>
  </div>
</div>
</div>
    


        <!-- Bootstrap core JavaScript -->
  <script src="css_All/vendor/jquery/jquery.min.js"></script>
  <script src="css_All/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

