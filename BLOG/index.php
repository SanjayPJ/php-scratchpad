<?php include('inc/head.php') ?>
<?php require('conf/config.php') ?>
<?php include('inc/nav.php') ?>
<div class="container">
    <?php
        require('conf/db.php');
        $limit = 6;  
        if (isset($_GET["page"])) { 
            $page  = $_GET["page"]; 
        } else { 
            $page=1; 
        };
        $start_from = ($page-1) * $limit;  
        $sql = "SELECT * FROM posts ORDER BY created_at DESC LIMIT $start_from, $limit";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                ?>
    <div class="card mt-2">
        <h4 class="card-header">
            <?php echo $row['name']; ?>
        </h4>
        <div class="card-body">
            <p class="card-text text-justify">
                <?php echo substr($row['body'], 0, 390); ?>...
            </p>
            <a href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Read More</a>
        </div>
    </div>
    <?php
            }
        } else {
            echo "0 results";
        }
        $sql = "SELECT COUNT(id) FROM posts";
        $result = $conn->query($sql);
        $row = mysqli_fetch_row($result);  
        $total_records = $row[0];  
        $total_pages = ceil($total_records / $limit);  
        $pagLink = "<div class='pagination'>";  
         
        echo $pagLink . "</div>";
        ?>
        <nav aria-label="Page navigation example">
        <ul class="pagination mt-4">
       <?php
       for ($i=1; $i<=$total_pages; $i++) {  
        ?>
        <li class="page-item"><a class="page-link" href="<?php echo ROOT_URL ?>?page=<?php echo $i ?>"><?php echo $i ?></a></li>
        <?php 
        };  
       ?>
        </ul>
        </nav>
        <?php
        $conn->close();
    ?>
</div>
<?php include('inc/foot.php') ?>