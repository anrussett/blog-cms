<?php
include 'header.php'; 
?>

<?php
include_once 'includes/db_connect.php';
?>

<!DOCTYPE html>
    <html>
        <main>

        <?php

            function getPostDetailsFromDatabase() {
                // Get the post title
                $postTitle = rawurldecode($_GET["title"]);


                // Get the post that matches the postTitle
                include_once'includes/db_connect.php';
                $sql = "SELECT * FROM posts WHERE title='" . $postTitle . "'";
                $result = mysqli_query($conn, $sql);

                // Get the first row from the result as an associative array
                $postDetails = mysqli_fetch_assoc($result);
                return $postDetails;
            }
        ?>

        </main>
    </html>

<?php
include 'footer.php';
?>