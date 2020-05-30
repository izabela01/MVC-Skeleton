<p>Here is a list of all blogs:</p>
 
<!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css_All/blog-home.css" rel="stylesheet">
    
<h1 class="my-4">Page Heading
          <small>Secondary Text</small>
        </h1>

<?php foreach($blog as $blog) { ?> <!--this page when you do blog post table this needs to be updated -->

  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="views/images/moroccoguide.jpg" alt="Card image cap"  width="700" height="300">
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
      

    </div>
    <!-- /.row -->

  </div>

  <!-- /.container -->
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
  
        <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

