<?php
include("Connect.02.03.php");
//echo"hello";

$sql = "SELECT* FROM marvelmovies WHERE title LIKE 'X-Men%'";
$result = $conn -> query($sql);

if ($result-> num_rows >0){
    while ($row = $result -> fetch_assoc()){
        echo "year: ".$row["yearReleased"]."; Title:".$row["title"]."<br>";
    }
} else {
    echo "0 results";
}
$conn -> close();
?>