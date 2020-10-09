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
    <link rel="stylesheet" type="text/css" href="format.css" />
        <form action="submit-post.php" method="POST">
            <input type="text" id="title" name="title" placeholder="Title"></input>
            <input type="text" id="author" name="author" placeholder="Author"></input>
            <input type="date" id="date" name="date" placeholder="Date"></input>
            <div id="editor"></div>
            <script>
            var editor=ace.edit("editor");
            editor.session.setMode("ace/mode/html");
            </script>
            <button id="submit">Submit</input>  
            <script>
            $("#submit").click(function() {
                var title = $("#title").val();
                var author = $("#author").val();
                var date = $("#date").val();
                var content = editor.getValue();
            });
            $.post( "submit-post.php", { 
                    title: title, 
                    content: content, 
                    author: author, 
                    date: date 
            }).done(function() {
                window.location = "/index.php";
            });
            </script>
        </form>
    </main>
</html>

<?php
include'footer.php';
?>