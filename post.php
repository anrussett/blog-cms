<?php
include 'header.php'; 
?>

<!DOCTYPE html>
    <html>
        <main>
        <?php
        function getPostDetailsFromDatabase() {
            //TODO in Module 4
            //get this data from a database instead of hardcoding it
            $postDetails = array('title' => 'Blog Post 1',
                                'content' => 'My first blog post',
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
    <div> <?php echo $postDetails["date"]; ?> </div>
    <div> <?php echo $postDetails["content"]; ?> </div>
    <div> <?php echo $postDetails["author"]; ?> </div>
        </main>
    </html>

<?php
include 'footer.php';
?>