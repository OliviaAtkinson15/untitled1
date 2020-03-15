<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
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
                    "INSERT INTO members (email, password, adminType)
                    VALUES ('$email', '$password', 'generalUser')";
                echo "Registered successfully";

            } else if (mysqli_num_rows($result) > 0){
                echo "Email already registered";
                echo "<h2>" . $type . "</h2>";
            }
        } else {
            echo "Email address must be a valid IKM email address.";
        }
    } else if (isset($_POST['login'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $type2 = "SELECT adminType FROM members WHERE email='$email'";
        $type = mysqli_query($db, $type2);

        $sql = "SELECT uid FROM members WHERE email='$email' and password='$password'";

        $result = mysqli_query($db, $sql);
        if ($username == "email" && $password == "password") {
            setcookie('access_level_cookie', 'standarduser');

        }

        if (mysqli_num_rows($result) == 1) {

            $name;
            if($type->num_rows > 0) {
                $row = $type-> fetch_assoc();
                $name = $row['adminType2'];
                if ($name == 'admin'){


                    header("location: homeAdmin.php");
                    echo "";// Redirecting To another Page
                }
            }
            else{
                header("location: homeUser.php");
                echo "";// Redirecting To another Page

            }
        } else {
            echo "Incorrect email or password.";
        }
    }
}
session_start();
$_SESSION['email'] = $email;

?>
<a href="Index.php">Back to Login</a>

</body>
</html>

