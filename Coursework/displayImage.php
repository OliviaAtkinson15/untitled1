<?php

$id = $_GET['id'];
// do some validation here to ensure id is safe

include("connectUsers.php");
$sql = "SELECT img_1 FROM news";
$result = mysql_query("$sql");
$row = mysql_fetch_assoc($result);
mysql_close($link);

header("Content-type: image/jpeg");
echo $row['img_1'];
?>