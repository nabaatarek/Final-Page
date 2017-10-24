<?php

require '../Class/Blog.php';

$id = $_GET['id'];

$title = $_POST['title'];

$post = $_POST['post'];

$blog = new Blog();

$check = $blog->update($id,$title,$post);

if ($check == 1)
    header('location:../index.php');
else
    echo 'ERROR!!!';


















//require '../Class/Blog.php';

///$id = $_GET['id'];
//$title = $_POST['title'];
//$_POST = $_POST['post'];

//$blog = new Blog();

//$check = $blog->update($id,$title ,$post);

//if ($check == 1)
  //  header('location:../contact.php');
//else
  //  echo 'ERROR!!!';
