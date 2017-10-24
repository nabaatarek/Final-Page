<div id="mo">
            <div id="example" class="right-box">
                <h2 class="title">Update Blog</h2>
                <div class="content">

                    <form action="post/add_post.php" method="post">
                        <input type="text" placeholder="add title" name="title" required>
                        <br>
                        <input type="text" placeholder="add post" name="post" required>
                        <br>
                        <?php $sql = "SELECT * FROM section";
                        $result = mysqli_query($con,$sql);
                        $data = [];
                        while ($row = mysqli_fetch_assoc($result)):
                            $data[] = $row;
                        endwhile;
                        ?>
                        <select name="section" >

                            <?php foreach ($data as $item): ?>
                                <option value="<?= $item['id'] ?>">
                                    <?= $item['name'] ?>
                                </option>
                            <?php endforeach; ?>

                        </select>

                        <br>
                        <input type="submit" value="Add" class="button button2">

                    </form>

                </div>
            </div>
        </div>
    </div>
<?php