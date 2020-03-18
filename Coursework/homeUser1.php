<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>Home - User</title>
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
    <li><a href = "newsUser.php">News</a></li>
    <li><a href = "quicklinksUser.php">Quick Links</a></li>
    <li><a href = "discountsUser.php">Discounts</a></li>
    <li><a href = "suggestionboxUser.php">Suggestion Box</a></li>
</ul>

</body>
</html>
