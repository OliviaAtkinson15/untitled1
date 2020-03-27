<?php
// Include the database configuration file
include 'connectUsers.php';
$statusMsg = '';

// File upload path
$targetDir = "/Applications/MAMP/htdocs/untitled1/Coursework";
$fileName = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

$file = "TEST";
$title = $_POST['title'];
$author = $_POST['author'];
$text = $_POST['text'];

if(isset($_POST["submit"]) && !empty($_FILES["image"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $qry = "INSERT into news (title, author, content, img_2) VALUES ('$title', '$author', '$text', '$fileName')";
            $insert = $db->query("INSERT into news (title, author, content, img_2) VALUES ('$title', '$author', '$text', '$fileName')");

            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            }
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>