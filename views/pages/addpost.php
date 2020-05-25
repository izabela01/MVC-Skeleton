<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

    </head>
    <body>
        <?php
        // need to add some code into here to be able to create a link to the db
        //also need to add code for whatever is input into the webpage, it goes into the DB
        //under the right tables 
        
        //Create DB Object
    $db = new Database();


    if(isset($_POST['submit']))
    {
        //Assign Variables
        $title = mysqli_real_escape_string($db->link, $_POST['title']);
        $body = mysqli_real_escape_string($db->link, $_POST['body']);
        $category = mysqli_real_escape_string($db->link, $_POST['category']);
        $author = mysqli_real_escape_string($db->link, $_POST['author']);
        $date = mysqli_real_escape_string($db->link, $_POST['date']);

        {
            //Set Error
            $error = 'Please fill out all the required fields';
        }
        else if
        {
            $query = "INSERT INTO posts (title, body, category, author, tags)
                      VALUES ('$title', '$body', '$category', '$author', '$date')";

            $insert_row = $db->insert($query);
        }
    }
        ?>

        <div class='col-sm-12'></div>
<!--for items that belong together place into form groups-->
            <form  method="post" action="addpost.php">
                <div class="form-group">
                    <label><b>Post Title</b></label>
                    <input name="title" type="text" class="form-control" placeholder="Enter Post Title">
                </div>
                <div class="form-group">
                    <label><b>Post Body</b></label>
                    <textarea name="body" class="form-control" placeholder="Enter Post Body"></textarea>
                </div>
                <div class="form-group">
                    <label><b>Category</b></label>
                    <select name="category" class="form-control">

                <?php
                //need to add code to be able to link the database 
                ?>

                </select>
        </div>
        <div class="form-group">
            <label><b>Author</b></label>
            <input name="author" type="text" class="form-control" placeholder="Enter Author Name">
        </div>
        <div class="form-group">
            <label><b>Date</b></label>
            <input name="date" type="date" class="form-control" placeholder="Enter Date">
        </div>
        <input name="submit" type="submit" class="btn btn-success" value="Submit" />
        <a href="index.php" name="cancel" type="submit" class="btn btn-outline-success">Go back</a>
    </form>
    <br>

</body>
</html>

