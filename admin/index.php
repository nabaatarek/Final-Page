<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>

<style>
    body{
        font-family: 'Ubuntu Mono', monospace!important;
    }
    form {
        border: 1px solid #f1f1f1;
        background-color: pink;
    }
    input[type=text] {
        width: 100%;
        padding: 10px 15px;
        margin: 5px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        background: palevioletred;
    }
    textarea {

    }

    input {
        background-color: burlywood;
        color: #2a1500;
        padding: 8px 12px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 8%;
    }
    button:hover {
        opacity: 0.1;

    }
    .container {
        width: 60%;
        margin-left: auto;
        margin-right: auto;
        padding: 20px;
    }

</style>
<body>

<div class="container">

 <form style="" method="post" action="./post/add.post.php">

    title : <input type="text" name="title">
    <br>
    <br>
    post : <textarea name="post" cols="30" rows="5"></textarea>
    <br>
    <input type="Submit" name="add">
 </form>
    <style>
        body{
            font-family: 'Ubuntu Mono',monospace!important;
        }


        table {
            background-color: #cccccc;
            color: #2a1500;
            padding: 15px 20px;
            margin: 10px 0;
            border: double;
            cursor: progress;
            width: 10%;
        }
        .container {
            width: 60%;
            margin-left: auto;
            margin-right: auto;
            padding: 10px;
        }

    </style>

 <table border="1" width="60%">
    <tr>
        <th>title</th>
        <th>post</th>
        <th>Action</th>
    </tr>
    <?php
    $con = mysqli_connect('localhost', 'root', 'root', 'oop' ,'8889');
    $sql = 'SELECT * FROM news';
    $result = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_assoc($result)):
        ?>
        <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['post']; ?></td>
            <td>
                <a href="post/delet_post.php?id=<?php echo $row['id']; ?>">delete</a>

                <a href="update.php?id=<?php echo $row['id']; ?>"">update</a>
            </td>
        </tr>
    <?php endwhile;
    mysqli_close($con);
    ?>
</table>
</div>
</body>
</html>