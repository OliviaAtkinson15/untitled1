<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>Home - User</title>
</head>
<body>
<header>
    <h1>IKM Intel</h1>
    <img src="ikmlogo.jpeg" alt="IKM Logo">
    <a href="Index.php">Back to Login</a>

</header>

<ul>
    <li><a href = "newsUser.php">News</a></li>
    <li><a href = "quicklinksUser.php">Quick Links</a></li>
    <li><a href = "discountsUser.php">Discounts</a></li>
    <li><a href = "suggestionboxUser.php">Suggestion Box</a></li>
    <ul>

        <a href="Index.php">Back to Login</a>
        <?php
        include("connectUsers.php");
        session_start();
        $_SESSION['email'] = $email;
        $sql_query = "SELECT * FROM members";
        $result = $db->query($sql_query);
        while($row = $result->fetch_array())
        {
            $email = $row['email'];
            $password = $row['password'];
            $id = $row['uid'];
            echo "<li> <a href = 'displayBattles.php?id={$id}'>Battles for {$firstname}{$lastname}</a></li>";
        }
        ?>
    </ul>
</ul>
</body>
</html>
