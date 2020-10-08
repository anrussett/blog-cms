<?php
include_once 'db_connect.php';
?>

<?php
include'header.php';
?>

<!DOCTYPE html>
<html>
<br>
    <head>
        <?php
        include 'head.php'
        ?>
    </head>
    <main>
        <form action="submit-post.php" method="POST">
            <label for="title">Title: </label>
            <input type="text" name="title"><br>
            <br>
            <label for="author">Author: </label>
            <input type="text" name="author"><br>
            <br>
            <label for="date">Date: </label>
            <input type="text" name="date"><br>
            <br>
            <label for="content">Blog Post: </label>
            <textarea name="content" rows="8" cols="50"> </textarea>
            <br>
            <button type="submit" name="Submit">Submit</button>
        </form>
    </main>
</html>

<?php
include'footer.php';
?>