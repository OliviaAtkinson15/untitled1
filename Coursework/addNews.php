<?php

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>AddNews</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<header>
    <h1>Add a New Article</h1>
    <img src="ikmlogo.jpeg" alt="IKM Logo">

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="text" name="title" placeholder="Title"><br>
        <input type="text" name="author" placeholder="Author"><br>
        <input type="text" name="text" placeholder="Text"><br>
        <input type="file" name="image"><br>
        <input type="submit" name="submit" value="Complete">
    </form>

</body>
</html>



/*
    include("connectUsers.php");


        $title = $_POST['title'];
        $author = $_POST['author'];
        $text = $_POST['text'];

        if (isset($_POST['news'])) {
            if (getimagesize($_FILES['image']['tmp_name']) == FALSE) {
               $image=NULL;
            } else {
                $image = addslashes($_FILES['image']['tmp_name']);
                $image = file_get_contents($image);
                $image = base64_encode($image);
                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));



            $qry = "INSERT INTO news (title, author, content, img_1) VALUES ('$title', '$author', '$text', '$image')";
            $result1 = mysqli_query($db, $qry);
            if($result1){
                echo "Entered successfully";
            }
            else {
                echo "News not entered";

            }

            }


    ?>*/

