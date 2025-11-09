<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="dashboard d-flex justify-content-between">
        <div class="sidebar bg-dark vh-100">
            <h1 class="bg-primary p-4"> <a href="../admin/index.php"
                    class="text-light text-decoration-none">Dashboard</a> </h1>
            <div class="menues p-4 mt-3">
                <div class="menu">
                    <a href="create.php" class="text-light text-decoration-none"><strong>Add new Post</strong></a>
                </div>
                <div class="menu">
                    <a href="logout.php" class="btn btn-info mt-5">Logout</a>
                </div>
            </div>
        </div>