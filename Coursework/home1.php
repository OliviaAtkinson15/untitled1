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
echo $_SESSION['email'];

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
