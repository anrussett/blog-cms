<?php
include'header.php';
?>

<!DOCTYPE html>
<html>
    <div></div>
    <main>
        <form action="/action_page.php">
            <label for="Title">Title: </label>
            <input type="text" id="Title" name="Title"><br>
            <div></div>
            <label for="Author">Author: </label>
            <input type="text" id="Author" name="Author"><br>
            <div></div>
            <label for="Date">Date: </label>
            <input type="text" id="Date" name="Date"><br>
            <div></div>
            <textarea id="Blog Post" name="Blog Post" rows="8" cols="50"> </textarea>
            <br><br>
            <input type="submit" value="Submit">
        </form>
    </main>
</html>

<?php
include'footer.php';
?>