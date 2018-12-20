<?php include('inc/head.php') ?>
<?php require('conf/config.php') ?>
<?php include('inc/nav.php') ?>
<div class="container">
    <?php
        require('conf/db.php');
        if(isset($_GET['id'])){
            $id = mysqli_real_escape_string($conn, $_GET['id']);
        }else{
            header("Location: index.php");
        }
        if(isset($_POST['delete'])){
            $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
            $sql = "DELETE FROM posts WHERE id=" . $delete_id;
            if ($conn->query($sql) === FALSE) {
                echo "Error deleting record: " . $conn->error;
            }
        }
        $sql = "SELECT * FROM posts WHERE id=" . $id;
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
                <?php echo $row['body']; ?>
            </p>
            <hr>
            <a href="<?php echo ROOT_URL; ?>" class="btn btn-light btn-sm">Go Back</a>
            <a href="<?php echo ROOT_URL; ?>edit_post.php?id=<?php echo $row['id']; ?>" class="btn btn-light btn-sm">Edit</a>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="d-inline float-right">
                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                <button type="submit" class="btn btn-danger btn-sm" name="delete">Delete</button>
            </form>
        </div>
    </div>
    <?php
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    ?>
</div>
<?php include('inc/foot.php') ?>