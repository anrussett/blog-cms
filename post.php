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
    <div> <?php echo $postDetails["author"]; ?> </div>
    <div> <?php echo $postDetails["date"]; ?> </div>
    <div> <?php echo $postDetails["content"]; ?> </div>
    
            <h2>Post One</h2>
                <div>
                    <h4>Date:9/26/2020</h4>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro possimus pariatur quos nam aut est, incidunt delectus in? At, ipsum delectus facere eum ducimus temporibus. Minima non asperiores eveniet rem?</p>
                </div>
                <div>
                    <h4>Author: Andrew Russett</h4>
                </div>
        </main>
    </html>

<?php
include 'footer.php';
?>