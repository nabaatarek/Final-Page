<?php

require './Class/Blog.php';
$id = (int)$_GET['id'];
$blog = new Blog();
$data = $blog->selectRow($id); // This is a function in the class.php to fetch a row from table "news"
?>

<?php foreach ($data as $item): ?>
    <form action="post/update_post.php?id=<?= $id ?>" method="post" style="background-color: cadetblue;padding: 20px">
        <input type="text" value="<?= $item['title'] ?>" placeholder="enter title" size="40" name="title"><br><br>
        <input type="text" value="<?= $item['post'] ?>" placeholder="enter post" size="40" name="post"><br><br>
        <input type="submit" value="update">
    </form>
<?php endforeach; ?>





