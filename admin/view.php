<?php require ('templates/header.php'); ?>


<div class="post w-100 bg-light p-5">
    <?php

    $id = $_GET['id'];
    if ($id) {
        include ('../connect.php');
        $sqlSelectPost = "SELECT * FROM posts WHERE id='$id'";
        $query = mysqli_query($con, $sqlSelectPost);
        while ($row = mysqli_fetch_array($query)) {
            ?>
            <h1> <?= $row['title']; ?> </h1>
            <p><?= $row['created_at']; ?></p>
            <p><?= $row['content']; ?></p>
        <?php }

    } else {
        echo "Post Not found";
    }

    ?>
</div>

<?php require ('templates/footer.php'); ?>