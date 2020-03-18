<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>IKM Intel</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<header>
    <h1>IKM INTEL</h1>
    <img src="ikmlogo.jpeg" alt="IKM Logo">

    <form action="insertMember.php" method="post">
        <input type="text" name="email" placeholder="Email"><br>
        <input type="text" name="password" placeholder="Password"><br>
        <input type="submit" name="register" value="Register">
        <input type="submit" name="login" value="Login">
    </form>
    <a href="resetPassword.php">Forgotten Password?</a>

</body>
</html>
