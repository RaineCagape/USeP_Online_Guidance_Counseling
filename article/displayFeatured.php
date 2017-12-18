<?php   


            $Title = $blog_content = $author = $featured = "";

            $query = "SELECT * FROM blog WHERE featured IS TRUE ORDER BY article_id DESC";
            $result = mysqli_query($link, $query);

            while($row = mysqli_fetch_array($result, MYSQL_ASSOC)){
                    
                    $Title = $row['Title'];
                    $blog_content = $row['blog_content'];
                    $author = $row['author'];
                    $featured = $row['featured'];
                    

            ?>
            <div class="article_holder">
            <h1 class="blog_title"><?php echo $Title ?></h1><hr/>
            <h5 class="article_author">by: <?php echo $author ?><br><?php echo date("D M d, Y "); ?>
</h5>
            <p class="article_content"><?php echo $blog_content ?></p>
            </div>
            <?php 


            }
?>