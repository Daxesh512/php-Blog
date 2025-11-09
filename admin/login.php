<?php

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == 'admin' and $password == 'psw') {
        session_start();
        $_SESSION['user'] = 'admin';
        header('Location: index.php');
    }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5" style="max-width:500px;">
        <div class="login-form">
            <form action="login.php" method="post">
                <div class="form-field mb-4">
                    <input type="text" name="username" placeholder="username" class="form-control">
                </div>
                <div class="form-field mb-4">
                    <input type="password" name="password" placeholder="password" class="form-control">
                </div>
                <div class="form-field mb-4">
                    <input type="submit" name="login" value="login" class="btn btn-warning">
                </div>
            </form>
        </div>
    </div>


</body>

</html>