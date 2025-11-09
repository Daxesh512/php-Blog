<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <header class="p-4 bg-dark text-center">
        <h1> <a href="index.php" class="text-light text-decoration-none"> Simple Blog </a></h1>

    </header>

    <div class="post-list">
        <div class="container">
            <?php
            include ('connect.php');

            $sqlSelect = "SELECT * FROM posts";
            $query = mysqli_query($con, $sqlSelect);
            while ($row = mysqli_fetch_array($query)) {
                ?>
                <div class="row mb-4 p-5 bg-light">
                    <div class="col-sm-2">
                        <?= $row['created_at']; ?>
                    </div>
                    <div class="col-sm-3">
                        <h3> <?= $row['title']; ?> </h3>
                    </div>
                    <div class="col-sm-5">
                        <?= $row['content']; ?>
                    </div>
                    <div class="col-sm-2">
                        <a href="view.php?id=<?= $row['id']; ?>" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>


                <?php
            }

            ?>
        </div>
    </div>

    <div class="footer bg-dark p-4 mt-4">
        <a href="admin/index.php" class="text-light text-decoration-none"> Admin Panel </a>
    </div>

</body>

</html>