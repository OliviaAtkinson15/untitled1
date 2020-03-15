<?php
include("connectUsers.php");

if (isset($_POST['register'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    if (strpos($email, '@uk.ikm.com') !== false) {
        echo 'true';
    }
    else
        echo 'false';
} else if (isset($_POST['login'])) {
    //delete action
} else {
    //no button pressed
}
if ($_POST['action'] == 'register') {


echo 'Hello';

    if (strpos($email, '@uk.ikm.com') !== false) {
        echo 'true';
    }
    else
        echo 'false';


}
else{ }
?>