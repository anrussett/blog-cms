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
            <input type="text" id="title" name="title" placeholder="Title"></input>
            <input type="text" id="author" name="author" placeholder="Author"></input>
            <input type="date" id="date" name="date" placeholder="Date"></input>
            <div id="editor"></div>
            <button id="submit">Submit</input>  
        </form>
    </main>
</html>

<?php
include'footer.php';
?>