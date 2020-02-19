<?php

$name = $_POST["name"];
$age = $_POST["age"];

if ($age >= 21) {
    echo  "<p>Hi" . $name . "! You are allowed to buy specs, mugs and sausage rolls.</p>";
}
elseif ($age >= 18 && $age < 21) {
    echo "<p>Hi " . $name . "! You are allowed to buy specs and mugs.</p>";
}
elseif ($age >= 16 && $age < 21) {
    echo "<p>Hi " . $name . "! You are allowed to buy specs.</p>";
}
else {
    echo "<p>Hi " . $name . "! You are now old enough to buy anything.</p>";
}
?>