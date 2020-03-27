<html>
<head>
    <meta charset="utf-8">
    <title>News</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<img src="ikmlogo.jpeg" alt="IKM Logo">
<?php


include("connectUsers.php");
session_start();
$email = $_SESSION['email'];


print "<h2> News </h2>";


$sql_query = "SELECT * FROM news";
$result = $db-> query($sql_query);


while($row = $result ->fetch_array()) {
    $title = $row ['title'];
    $content = $row ['content'];
    $date_posted = $row ['date_posted'];
    $author = $row ['author'];
    $id = $row['newsid'];



    print "<p> $title </p>" . "<br>";
    print "<p> $author </p>" . "<br>";
    print "<p> $date_posted </p>" . "<br>";
    print "<p> $content </p>" . "<br>";

    $sqlQuery = "SELECT * FROM news WHERE id = $id";
    $rs = $db->query($sqlQuery);
    $result2=mysqli_fetch_array($rs);
    echo '<img src="data:image/jpeg;base64,'.base64_encode( stripslashes($result2['image']) ).'"/>';

}

?>


</body>
</html>
