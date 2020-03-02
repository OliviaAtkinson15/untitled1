<?php
include("dbconnect.php");

$sql_query = "SELECT * FROM marvelmovies";

$result = mysqli_query($db, $sql);

$row = mysql_fetch_array($result, MYSQLI_ASSOC);


?>