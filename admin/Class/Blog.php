<?php


class Blog
{
    private $con;
    public function __construct()
    {
        $this->con = mysqli_connect('localhost', 'root', 'root', 'oop', '8889');
    }
    public function add($title, $post)    //this is

    {
        $sql = "INSERT INTO news (title,post) VALUES ('$title','$post')";

        if (mysqli_query($this->con, $sql))
            return 1;
        else
            return 0;
    }

public function select()
{
    $data = [];
    $sql = "SELECT * FROM blog";
    $result = mysqli_query($this->con, $sql);
    while ($row = mysqli_fetch_assoc($result)):
        $data[] = $row;
    endwhile;
    return $data;
}
public function selectRow($id)
{
    $data = [];
    $sql = "SELECT * FROM news WHERE id = '$id'";
    $result = mysqli_query($this->con, $sql);
    while ($row = mysqli_fetch_assoc($result)):
        $data[] = $row;
    endwhile;
    return $data;
}
public function update($id, $title, $post)
{
    $sql = "UPDATE news set title = '$title', post = '$post' WHERE id = '$id'";
    if (mysqli_query($this->con, $sql))
        return 1;
    else
        return 0;
}
public function delete($id)
{
    $sql = "DELETE FROM news WHERE id = '$id'";
    if (mysqli_query($this->con, $sql))
        return 1;
    else
        return 0;
}
public function api()
{
    $data = [];
    $sql = "SELECT * FROM blog";
    $result = mysqli_query($this->con, $sql);
    while ($row = mysqli_fetch_assoc($result)):
        $data[] = $row;
    endwhile;
    return json_encode($data);
    }



}
