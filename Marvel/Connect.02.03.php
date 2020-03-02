<?php
$servername = "localhost";
$dbname = 'OADB';
$username = "root";
$password = "root";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($db -> connect_error){
    die("Connection failed:". $conn->connect_error);
}

echo "success";

?>