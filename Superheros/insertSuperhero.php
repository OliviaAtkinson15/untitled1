<?php

include("connectUsers.php");

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$superpower = $_POST["superpower"];

$sql = "INSERT INTO superheors (firstname, lastname, mainSuperpower) VALUES ('$firstname', '$lastname', '$superpower')";

if (mysqli_query($db, $sql)){

}else {
    echo "Error: ".$sql."<br".mysqli_error($db);
}
header("location:index.php");
?>