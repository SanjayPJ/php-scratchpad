<?php include('inc/head.php') ?>
<?php require('conf/config.php') ?>
<?php include('inc/nav.php') ?>
<div class="container">
    <?php
        require('conf/db.php');
        if(isset($_POST['submit'])){
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $body = mysqli_real_escape_string($conn, $_POST['body']);
            if(!empty($name) && !empty($body)){
                $sql = "INSERT INTO posts (name, body) VALUES ('$name', '$body')";
                if ($conn->query($sql) === TRUE) {
                    ?>
                    <div class="alert alert-primary mt-2" role="alert">
                    Post added successfully.
                        </div>
                    <?php
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }

        $conn->close();
    ?>
    <h2 class="my-3">Add Post</h2>
    <form class="mb-5" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label for="exampleInputPassword1">Title</label>
            <input name="name" type="text" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Body</label>
            <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
        </div>
        <button name="submit" class="btn btn-primary w-100" type="submit">Create Post</button>
    </form>
</div>
<?php include('inc/foot.php') ?>