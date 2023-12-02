<?php

echo "<hr>";
$multiArray = array(
    array(1, 2, 3),
    array('a', 'b', 'c'),
    array(true, false, true)
);
echo $multiArray[0][0]."<br>"; 
echo $multiArray[1][1]."<br>";
echo $multiArray[2][2]."<br>"; 
echo $multiArray[2][1]."<br>"; 




echo "<hr>";





$multiArray[0][0] = 99; //modify
echo $multiArray[0][0]."<br>";






echo "<hr>";





$multiArray[1][] = 'd'; //add element
echo $multiArray[1][3]."<br>";




echo"<hr>";



foreach ($multiArray as $row) {
    foreach ($row as $value) {
        echo $value . ' ';
    }
    echo "<br>";
}



?>