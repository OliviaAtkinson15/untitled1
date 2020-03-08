<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<h1>Hello </h1>

<?php
session_start();
echo $_SESSION['username'];

$sql_query = "SELECT * FROM users";
$result = $db-> query($sql_query);


while($row = $result ->fetch_array()){
    $username = $row ['username'];
    $password = $row ['password'];
    $uid = $row ['uid'];

    echo "<article>
<p> {$username}{$password}{$uid}</p>";
}

?>


</body>
</html>
