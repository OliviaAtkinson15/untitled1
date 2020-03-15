<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reset Submitted</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<header>
    <?php
    include("connectUsers.php");

    if (empty($_POST["email"])){
        echo "Invalid email address.";
    }
    else {
        $email = $_POST["email"];
        if (strpos($email, '@uk.ikm.com') !== false) {
            $select = "SELECT uid FROM members WHERE email='$email'";
            $result = mysqli_query($db, $select);
            if (mysqli_num_rows($result) > 0) {
                echo "Email sent.";

            } else
                echo "Invalid email address.";
            }
        else echo "Invalid email address.";

        }
    ?>

    <a href="Index.php">Back to Login</a>

</body>
</html>