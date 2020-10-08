<?php
include 'header.php'; 
?>

<!DOCTYPE html>
    <html>
    <head>
        <?php
        include 'head.php'
        ?>
    </head>
        <main>

        <?php
            
            function getPostDetailsFromDatabase() {
                // Get the post title
                $postTitle = rawurldecode($_GET["title"]);


                // Get the post that matches the postTitle
                include_once 'db_connect.php';
                $sql = "SELECT * FROM posts WHERE title='" . $postTitle . "'";
                $result = mysqli_query($conn, $sql);


                // Get the first row from the result as an associative array
                $postDetails = mysqli_fetch_assoc($result);
                return $postDetails;
            }
            
        ?>



            <?php
                $postDetails = getPostDetailsFromDatabase();
            ?>
            <h1> <?php echo $postDetails["title"]; ?> </h1>
            <div> <?php echo $postDetails["author"]; ?> </div>
            <div> <?php echo $postDetails["date"]; ?> </div>
            <div> <?php echo $postDetails["content"]; ?> </div>
            

            


        </main>
    </html>

<?php
include 'footer.php';
?>