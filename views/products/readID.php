

<p>Here is a list of all products:</p>

<p>
<?php var_dump($blog);?>
</p>

<?php foreach($products as $product) { ?> //this page when you do blog post table this needs to be updated 
  <p>
    <?php echo $product->name; ?> &nbsp; &nbsp;
    <a href='?controller=product&action=read&id=<?php echo $product->title; ?>'>See product information</a> &nbsp; &nbsp;
    <a href='?controller=product&action=delete&id=<?php echo $product->id; ?>'>Delete Product</a> &nbsp; &nbsp;
    <a href='?controller=product&action=update&id=<?php echo $product->id; ?>'>Update Product</a> &nbsp; 
  </p>
  
  <?php } ?>