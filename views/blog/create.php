

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
<link href="css/style_create.css" rel="stylesheet"/>
<body>
              
      <div class="container">
  <div class="card border-0 shadow my-5">
    <div class="card-body p-5">
      <h1 class="font-weight-light">Post a Blog </h1>
      
          <div class="card-body">
        
            <form action="" method="POST"  class="form-signin" enctype="multipart/form-data">
              <hr>
              <div class="form-label-group">
               <label for="inputtitle">Title</label> 
               <input id='inputtitle' type="text" name="title" class="form-control" required> 
              </div>
              
              <div class="form-label-group">
                <label for="inputdesc">Description</label>  
                <textarea id='inputdesc' class="form-control" name="body" rows="2" cols="40">only 250 characters</textarea>
              </div>

              <div class="form-label-group">
                   <label for="inputbody">Start Typing ..</label>
                <textarea id ='inputbody' class="form-control" name="body" rows="5" cols="40"></textarea>
             
              </div>

                <input type="hidden" 
	   name="MAX_FILE_SIZE" 
         value="10000000"
         />
                
            
              <p class="form-group">  <label for="count">Choose a country</label>

             <select name='country' id="count" required autofocus>
     <option disabled selected value> -- select an option -- </option>
     <option value="Vietnam">Vietnam</option>
      <option value="Poland">Poland</option>
      <option value="Morocco">Morocco</option>
    <option value="Turkey">Turkey</option>
       <option value="US">US</option>
       </select>
      </p>
 
 
 
 <p class="form-group"> <label for="cats">Choose a category</label>
 <select name="categories" id="cats">
     <option disabled selected value> -- select an option -- </option>
  <option value="Restaurants">Restaurants</option>
    <option value="Trips">Trips</option>
  <option value="Kids">Kids</option>
  <option value="Nightlife">Nightlife</option>
  <option value="Tips">Tips</option>
</select>
 </p>    
                
                
 <div>      
               <input  type="file" name="myUploader">
 </div>
               
              <button class="btn btn-lg btn-primary  text-uppercase" type="submit" value="Add Blog">Post Blog</button>
 
              

 
            </form>
          </div>
        </div>
      </div>
    </div>
</body>


        <!-- Bootstrap core JavaScript -->
  <script src="css_All/vendor/jquery/jquery.min.js"></script>
  <script src="css_All/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
