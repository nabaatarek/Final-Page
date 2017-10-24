<?php

require '../Class/Blog.php';

$title = $_POST['title'];

$post = $_POST['post'];

$blog = new Blog();

$check = $blog->add($title,$post);

if ($check == 1)
    header('location:../index.php');
else
    echo 'ERROR!!!';


