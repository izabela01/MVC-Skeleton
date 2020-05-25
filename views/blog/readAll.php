<p>Here is a list of all blogs:</p>

<?php foreach($blogs as $blog) { ?> <!--this page when you do blog post table this needs to be updated -->
  <p>
    <?php echo $blog->title; ?> &nbsp; &nbsp;
    <a href='?controller=blog&action=readAll&id=<?php echo $blog->blogID; ?>'>read more</a> &nbsp; &nbsp;
    <a href='?controller=blog&action=delete&id=<?php echo $blog->blogID; ?>'>Delete Product</a> &nbsp; &nbsp;
    <a href='?controller=blog&action=update&id=<?php echo $blog->blogID; ?>'>Update Product</a> &nbsp;
  </p> 
<?php } ?>

<!--  this is the page where simply there is a list of names of products and next to it whether they are 
  to be deleted etc-->

<!--these buttons here are also super important as they determine which controller is called, here 
they are all products, and the method decides which method is then called in order to fulfill the tasks-->