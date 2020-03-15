<?php

include("connectUsers.php");

if (empty($_POST["email"]) || empty($_POST["password"])){
    echo "Both fields are required.";
}
else {
    if (isset($_POST['register'])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        if (strpos($email, '@uk.ikm.com') !== false) {
            $select = "SELECT uid FROM members WHERE email='$email'";
            $result = mysqli_query($db, $select);
            if (mysqli_num_rows($result) == 0) {
            $sql =
                    "INSERT INTO members (email, password)
                    VALUES ('$email', '$password')";
                echo "Registered successfully";
            } else if (mysqli_num_rows($result) > 0){
                echo "Email already registered";
            }
        } else {
            echo "Email address must be a valid IKM email address.";
        }
    } else if (isset($_POST['login'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT uid FROM members WHERE email='$email' and password='$password'";

        $result = mysqli_query($db, $sql);
        if ($username == "email" && $password == "password") {
            setcookie('access_level_cookie', 'standarduser');

        }

        if (mysqli_num_rows($result) == 1) {
            header("location: home1.php");
            echo "";// Redirecting To another Page

        } else {
            echo "Incorrect email or password.";
        }
    }
}
session_start();
$_SESSION['email'] = $email;

?>

