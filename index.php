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
    <?php
        function getPostDetailsFromDatabase() {
            //TODO in Module 4
            //get this data from a database instead of hardcoding it
            $postDetails = array('title' => 'Blog Post 1',
                                'content' => 'My first blog post'
                                'date' => '09/26/2020',
                                'author' => 'Andrew Russett');

            return $postDetails;
        }
    ?>

    <?php
        //post details containt all the data to generate the blog from
        $postDetails = getPostDetailsFromDatabase();
    ?>
    <h1> <?php echo $postDetails["title"]; ?> </h1>
    <div> <?php echo $postDetails["author"]; ?> </div>
    <div> <?php echo $postDetails["date"]; ?> </div>
    <div> <?php echo $postDetails["content"]; ?> </div>



            <ul>
                <?php
                    $postTitles = getPostTitlesFromDatabase();

                    foreach($postTitles as $postTitle) {
                        echo "<li><a href='post.php?title=" . $postTitle . "'>" . $postTitle . 
                        "</a></li>";
                    }
                ?>
            </ul>
    </main>
</html>

<?php
include 'footer.php';
?>
