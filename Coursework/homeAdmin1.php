<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>Home - Admin</title>
</head>
<body>
<header>

    <img src="ikmlogo.jpeg" alt="IKM Logo">
    <h1>IKM Intel</h1>
    <a href="Index.php">Back to Login</a>
    <?php
    include("connectUsers.php");
    session_start();

    $email = $_SESSION['email'];
    echo "<p>". $email . "</p>";

    ?>

</header>

<ul>
    <li><a href = "newsAdmin.php">News</a></li>
    <li><a href = "quicklinksAdmin.php">Quick Links</a></li>
    <li><a href = "discountsAdmin.php">Discounts</a></li>
    <li><a href = "suggestionboxAdmin.php">Suggestion Box</a></li>
</ul>

</body>
</html>
