<p>Here is a list of all blogs:</p>
 
<!-- Bootstrap core CSS -->
  <link href="css_All/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css_All/blog-home.css" rel="stylesheet">
  
  
  
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <h1 class="my-4">Page Heading
          <small>Secondary Text</small>
        </h1>

    <?php foreach($blog as $blog) { ?>
          <div class="row">
        <!-- Blog Post -->
       <div class="card mb-4">
          <img class="card-img-top" src="views/images/img/new_york.jpeg" alt="Card image cap"  width="700" height="300">
          <div class="card-body">
            <h2 class="card-title"> <?php echo $blog->title; ?> </h2>
            <p class="card-text"><?php echo $blog->description; ?> </p>
            <a href='?controller=blog&action=read&id=<?php echo $blog->blogID; ?>' class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on <?php echo $blog->blogDate ; ?>
            <a href="#">Start Bootstrap</a>
          </div>
        </div>
              </div>
      
 <?php } ?> 
        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

     <!--side bar widget stuff-->
       <div class="col-md-4">

        <!-- Extra Functionality Widget -->
        <div class="card my-4">
          <div class="card-body">
            <div class="input-group">
               <a href='?controller=blog&action=subscribe'class="btn btn-primary">Subscribe&rarr;</a>
             
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Tips</a>
                  </li>
                  <li>
                    <a href="#">Resteraunt</a>
                  </li>
                  <li>
                    <a href="#">Trips</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Money</a>
                  </li>
                  <li>
                    <a href="#">Kids</a>
                  </li>
                  <li>
                    <a href="#">Not sure</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>


        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  
  

  
        <!-- Bootstrap core JavaScript -->
  <script src="css_All/vendor/jquery/jquery.min.js"></script>
  <script src="css_All/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

