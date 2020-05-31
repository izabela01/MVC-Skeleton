<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Post - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="css_POST/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css_POST/blog-post.css" rel="stylesheet">


</head>

<body>
  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4"><?php echo $blog->title . "<br>"; ?></h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">Start Bootstrap</a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on <?php echo $rblog->blogDate . "<br>";?></p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="http://placehold.it/900x300" alt="">

        <hr>

        <!-- Post Content -->
        <p class="lead"> <?php echo $blog->body; ?><p>


        <hr>
                  

      </div>
<!--side bar widget stuff-->
       <div class="col-md-4">

        <!-- Extra Functionality Widget -->
        <div class="card my-4">
          <div class="card-body">
            <div class="input-group">
               <a href='?controller=blog&action=subscribe'class="btn btn-primary">Subscribet&rarr;</a>
             
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
  <script src="css_POST/vendor/jquery/jquery.min.js"></script>
  <script src="css_POST/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
