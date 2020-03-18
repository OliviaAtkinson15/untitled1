<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<img src="ikmlogo.jpeg" alt="IKM Logo">
<?php

header( "refresh:4;homeAdmin1.php" );

include("connectUsers.php");
session_start();
$email = $_SESSION['email'];


print "<h2> Welcome ". $email . "</h2>";
print "<p> User role: Admin</p>"."<br>";

$sql_query = "SELECT * FROM members";
$result = $db-> query($sql_query);


while($row = $result ->fetch_array()){
    $email = $row ['email'];
    $password = $row ['password'];
    $uid = $row ['uid'];
}

?>

</body>
</html>
