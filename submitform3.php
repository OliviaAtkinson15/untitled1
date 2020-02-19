<?php
$myShopping = $_POST["wantedgood"];

$myShopping = array("specs", "mugs", "sausage rolls"); // declares the array
foreach($myShopping as $x) {
    print "<p>$x</p>";
}
echo "<p>$myShopping[0]</p>"; // outputs "do"

$myShopping[1] = "hugs"; // modifies position 1 (re)

echo "<p>$myShopping[1]</p>" ;// outputs "la"

unset($myShopping[2]); // removes the array in position 2

echo "<p>$myShopping[2]</p>" ;// outputs "la"

?>