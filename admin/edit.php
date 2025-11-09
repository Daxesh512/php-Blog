<?php require ('templates/header.php'); ?>

<?php
include ('../connect.php');

$id = $_GET['id'];
if ($id) {
    $sqlEdit = "SELECT * FROM posts WHERE id='$id'";
    $query = mysqli_query($con, $sqlEdit);

} else {
    echo "Post not found";
}

if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $content = $_POST['content'];
    $sqlUpdate = "UPDATE posts SET title='$title',summary='$summary',content='$content' WHERE id='$id'";
    if (mysqli_query($con, $sqlUpdate)) {
        session_start();
        $_SESSION['update'] = "Post updated successfully";
        header('Location: index.php');
    } else {
        echo "Data is not updated!";
    }

}

?>


<div class="create-form w-100 mx-auto p-4" style="max-width:700px;">
    <form action="" method="post">

        <?php
        while ($row = mysqli_fetch_array($query)) {
            ?>

            <div class="form-field mb-4">
                <input type="text" class="form-control" name="title" id="" placeholder="Enter Title:"
                    value="<?= $row['title']; ?>">
            </div>
            <div class="form-field mb-4">
                <textarea name="summary" class="form-control" id="" cols="30" rows="10"
                    placeholder="Enter Summary:"><?= $row['summary']; ?></textarea>
            </div>
            <div class="form-field mb-4">
                <textarea name="content" class="form-control" id="" cols="30" rows="10"
                    placeholder="Enter Post:"><?= $row['content']; ?></textarea>
            </div>
            <input type="hidden" name="date" value="<?php echo date("Y/m/d"); ?>">

            <div class="form-field">
                <input type="submit" class="btn btn-primary" value="Edit" name="update">
            </div>
            <?php
        } ?>
    </form>
</div>
<?php require ('templates/footer.php'); ?>