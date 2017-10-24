<?php
require 'cont.php';

session_start();
$username =$_POST['username'];
$password = $_POST['password'];

$sql="SELECT * FROM blog WHERE username='$username' AND password='$password' ";

$result = mysqli_query($con,$sql);

if (!$row=mysqli_fetch_row($result))
{
    ?>

                            <form   action="login_post.php">
                                <h2>>_<
                                    <br><br>Oops
                                    <br><br>
                                    The Username <br>OR <br> Password error
                                </h2>
                                <input type="submit"value="Retype User Name or Password">
                            </form>

    <?php
}
else
{
    $_SESSION[login]=$row['id'];;

    header('location:contact.php');

}
mysqli_close($con);
?>
