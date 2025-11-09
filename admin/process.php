<?php

if (isset($_POST['create'])) {
    include ('../connect.php');

    $title = mysqli_real_escape_string($con, $_POST['title']);
    $summary = mysqli_real_escape_string($con, $_POST['summary']);
    $content = mysqli_real_escape_string($con, $_POST['content']);
    $date = mysqli_real_escape_string($con, $_POST['date']);

    $sqlInsert = "INSERT INTO posts(date,title,summary,content) VALUES('$date','$title','$summary','$content')";
    if (mysqli_query($con, $sqlInsert)) {
        session_start();
        $_SESSION['create'] = "Post created successfully";
        header('Location: index.php');
    } else {
        die('Data is not inserted!');
    }
}


?>