<?php require ('templates/header.php'); ?>

<div class="posts-list w-100 p-5">

    <?php if (isset($_SESSION['create'])) {
        ?>
        <div class="alert alert-success">
            <?= $_SESSION['create']; ?>
        </div>
        <?php
        unset($_SESSION['create']);
    }
    ?>
    <?php if (isset($_SESSION['update'])) {
        ?>
        <div class="alert alert-warning">
            <?= $_SESSION['update']; ?>
        </div>
        <?php
        unset($_SESSION['update']);
    }
    ?>
    <?php if (isset($_SESSION['delete'])) {
        ?>
        <div class="alert alert-danger">
            <?= $_SESSION['delete']; ?>
        </div>
        <?php
        unset($_SESSION['delete']);
    }
    ?>


    <table class="table tabled-bordered">
        <thead>
            <tr>

                <th style="width:15%;">Created_at</th>
                <th style="width:15%;">Title</th>
                <th style="width:45%;">Article</th>
                <th style="width:25%">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require ('../connect.php');
            $sqlSelect = "SELECT * FROM posts";
            $query = mysqli_query($con, $sqlSelect);
            while ($row = mysqli_fetch_array($query)) { ?>
                <tr>
                    <td><?= $row['created_at']; ?></td>
                    <td><?= $row['title']; ?></td>
                    <td><?= $row['summary']; ?></td>
                    <td>
                        <a href="view.php?id=<?= $row['id']; ?>" class="btn btn-success">View</a>
                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning"
                            onclick="return confirm('Do you really update data?');">Edit</a>
                        <a href="delete.php?id=<?= $row['id']; ?>" class="btn btn-danger"
                            onclick="return confirm('Do you really delete data?');">Delete</a>
                    </td>
                </tr>
                <?php
            }

            ?>
        </tbody>
    </table>
</div>

<?php require ('templates/footer.php'); ?>