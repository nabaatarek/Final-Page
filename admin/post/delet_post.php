<?php

require '../Class/Blog.php';

$id = $_GET['id'];
$blog = new Blog();

$check = $blog->delete($id);

if ($check == 1)
    header('location:../index.php');
else
    echo 'ERROR!!!';
