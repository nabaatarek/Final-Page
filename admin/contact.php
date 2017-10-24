<?php
require 'Class/Blog.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
</head>
<body>

    <?php foreach ($data as $item): ?>
        <tr <style=
            <td><?= $item['username'] ?></td>
            <td><?= $item['password'] ?></td>
            <td>

                <a href="update.php?id=<?= $item['id'] ?>">Update</a>
                <a href="delete.php?id=<?= $item['id'] ?>">Delete</a>
            </td>
        </tr>

    <?php endforeach;
    ?>

</table>


<br><br><br><br>
<h2>
    Add new user

</h2>
<form action="post/add_user.php" method="post">
    <br><br>
    <input type="text" name="username">
    <br><br>
    <input type="password" name="password">
    <br><br>
    <input type="submit" value="add">

</form>

</body>
</html>

