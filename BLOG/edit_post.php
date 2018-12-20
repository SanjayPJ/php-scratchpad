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
        if(isset($_POST['submit'])){
            $id = mysqli_real_escape_string($conn, $_POST['id']);
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $body = mysqli_real_escape_string($conn, $_POST['body']);
            if(!empty($name) && !empty($body)){
                $sql = "UPDATE posts SET name='$name', body='$body' WHERE id=" . $id;
                if ($conn->query($sql) === TRUE) {
                    ?>
                    <div class="alert alert-primary mt-2" role="alert">
                    Post Updated successfully.
                        </div>
                    <?php
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
    ?>
    <h2 class="my-3">Edit Post</h2>
    <form class="mb-5" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php
            $sql = "SELECT * FROM posts WHERE id=" . $id;
            $result = $conn->query($sql);
    
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
        ?>
        <div class="form-group">
            <label for="exampleInputPassword1">Title</label>
            <input value="<?php echo $row['name'] ?>" name="name" type="text" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Body</label>
            <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3" required><?php echo $row['body'] ?></textarea>
        </div>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <button name="submit" class="btn btn-primary w-100" type="submit">Update Post</button>
    </form>
</div>
<?php
            }
        }
        $conn->close();
    ?>
<?php include('inc/foot.php') ?>