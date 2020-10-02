<?php
include 'header.php'; 
?>

<!DOCTYPE html>
<html>
    <main>
    <?php
        function getPostTitlesFromDatabase() {
            //TODO in Module 4
            //get this data from a database instead of hardcoding it
            $postTitles = array("Blog Post 1", "Blog Post 2", "Blog Post 3");
            return $postTitles;
        }
    ?>
            <ul>
                <?php
                    $postTitles = getPostTitlesFromDatabase();

                    foreach($postTitles as $postTitle) {
                        echo "<li><a href='post.php'>" . $postTitle . 
                        "</a></li>";
                    }
                ?>
            </ul>
    </main>
</html>

<?php
include 'footer.php';
?>
