<?php
include ("connectUsers.php");

if(empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
}else
{
$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT uid FROM users WHERE username='$username' and password='$password'";

$result=mysqli_query($db,$sql);
if ($username == "username" && $password =="password"){
    setcookie('access_level_cookie', 'standarduser');
}

if(mysqli_num_rows($result) == 1)
    {
        header("location: home.php");
        echo "";// Redirecting To another Page
    }else
    {
        echo "Incorrect username or password.";
    }
}
session_start();
$_SESSION['username'] = $username;

?>