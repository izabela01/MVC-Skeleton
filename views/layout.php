<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" >
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      
    <title>Our Blog</title>
  <link href="css_footer/footer.css" rel="stylesheet" type="text/css"/>  
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css_All/blog-home.css" rel="stylesheet">
 <link href="css_footer/footer.css" rel="stylesheet" type="text/css"/>  
  
  </head>
  <body>
    <header>
    <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
            OUR TRAVEL BLOG
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
      <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" size="40">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
      
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="">Home
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="views/pages/aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?controller=blog&action=readAll">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?controller=product&action=update">Contact Us</a>
        </li>
          <li class="nav-item">
          <a class="nav-link" href="?controller=authentication&action=login">Login</a>
        </li>
           <li class="nav-item">
          <a class="nav-link" href="?controller=authentication&action=create">Sign Up</a>
        </li>
      </ul>
       
    </div>
  </div>
</nav>
    
    </header>
<div class="w3-container w3-pink">
    <?php require_once('routes.php'); ?>
</div>
      
    
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Your Website</small>
    </div>
  </footer>
    
</body>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
 

</body>
</html>


 