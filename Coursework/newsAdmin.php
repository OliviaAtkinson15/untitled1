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


while($row = $result ->fetch_array()){
    $title = $row ['title'];
    $content = $row ['content'];
    $date_posted = $row ['date_posted'];
    $author = $row ['author'];
    $id = $row['newsid'];

    print "<p> $title </p>"."<br>";
    print "<p> $author </p>"."<br>";
    print "<p> $date_posted </p>"."<br>";
    print "<p> $content </p>"."<br>";

// Get images from the database
$query = $db->query("SELECT * FROM news WHERE newsid = '$id'");

if($query->num_rows > 0){
while($row = $query->fetch_assoc()){
$imageURL = '/Applications/MAMP/htdocs/untitled1/Coursework'.$row["img_2"];
?>
<img src="<?php echo $imageURL; ?>" alt="image" />
<?php }
}else{ ?>
<p>No image(s) found...</p>
<?php }
}

?>

<form action="addNews.php" method="post">
    <input type="submit" name="addNews" value="Add a new article">
</form>


</body>
</html>