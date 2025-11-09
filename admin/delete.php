<?php
require ('../connect.php');
$id = $_GET['id'];

if ($id) {
    $sqlDelete = "DELETE FROM posts WHERE id='$id'";
    $query = mysqli_query($con, $sqlDelete);
    if ($query) {
        session_start();
        $_SESSION['delete'] = "Post deleted successfully";
        header('Location: index.php');
    } else {
        echo "Data is not deleted!";
    }
}


?>