<?php
require '../../Class/Blog.php';
$blog = new Blog();


$data = $blog->api();

print_r($data);