<?php
include("Connect.02.03.php");
//echo"hello";

$sql = "SELECT* FROM marvelmovies WHERE productionStudio LIKE 'Marvel Studios%'";
$result = $conn -> query($sql);

if ($result-> num_rows >0){
    while ($row = $result -> fetch_assoc()){
        echo "year: ".$row["yearReleased"]."; Title:".$row["title"]."; Production Studio:".$row["productionStudio"]."<br>";
    }
} else {
    echo "0 results";
}
$conn -> close();
?>