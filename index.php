<?php
include 'header.php'; 
?>

<script src="hello.js"></script>

<!DOCTYPE html>
<html>
    <main>
    <?php

        function getPostTitlesFromDatabase() {

            // Get all the post titles from the posts table
            include_once 'db_connect.php';

            $sql = "SELECT title FROM posts";
            $result = mysqli_query($conn, $sql);
            

            // Get each result row as an assoc array, then add title to $postTitles
            $postTitles = array();
            while($row = mysqli_fetch_assoc($result)){
                array_push($postTitles, $row['title']);
            }
            return $postTitles;
        }
    ?>
            <ul>
                <?php
                    $postTitles = getPostTitlesFromDatabase();

                    foreach($postTitles as $postTitle) {
                        echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . "</a></li>";
                    }
                ?>
            </ul>
    </main>
</html>

<?php
include 'footer.php';
?>
