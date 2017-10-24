<div id="content">

        <div id="mo">
            <div id="example" class="right-box">
                <h2 class="title">Update Blog</h2>
                <div class="content">
                    <?php
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM news WHERE id ='$id'";
                    $result = mysqli_query($con, $sql);
                    $data = [];
                    while ($row = mysqli_fetch_assoc($result)):
                        $data[] = $row;
                    endwhile;
                    ?>
                    <?php foreach ($data as $item): ?>
                        <form action="post/delet_post.php?id=<?= $id ?>" method="post">
                            <h1>Are You Sure To Delete This Blog ?</h1>
                            <h2><?= $item['title'] ?></h2>
                            <h2><?= $item['post'] ?></h2>
                            <input type="submit" value="Delete" class="button button3">
                            <a href="index.php" class="button button2">Back to Blog</a>
                        </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php