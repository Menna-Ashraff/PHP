<?php

// --> Task 1

/*
--> Using nl2br() function 
*/
?>



<?php

// --> Task 2

/* echo '<pre>';
print_r($_SERVER);
echo '</pre>'; */
?> 




<?php
// --> Task 3.1
/*
$array = array
(0 => 12,
 1 => 45,
 2 => 10,
 3 => 25);

$sum = 0;
$count = 0;

foreach ($array as $value) {
    $sum += $value;
    $count++;
}

$average = $sum / $count;

echo nl2br("The sum of the array is $sum\n");
echo nl2br("The average of the array is $average\n");
*/
?>


<?php

// --> Task 3.2 
/*
$array = array
(0 => 12,
 1 => 45,
 2 => 10,
 3 => 25);

 rsort($array);
 $sum = 0;
 $count = 0;

foreach ($array as $value) {
    $sum += $value;
    $count++;
}

$average = $sum / $count;
echo "Sort array in descending order:<br>";
print_r($array);

echo "<br>The sum of the array is $sum<br>";
echo "The average of the array is $average<br>";
*/
?>

<?php

//  --> Task 4 

/*
$array = array("sara" => 31, "john" => 41, "walla" => 39, "ramy" => 40);

asort($array);

echo "Ascending order sort by value:\n";
echo nl2br(print_r($array, true));


ksort($array);

echo "Ascending order sort by key:\n";
echo nl2br(print_r($array, true));

arsort($array);

echo "Descending order sorting by value:\n";
echo nl2br(print_r($array, true));

krsort($array);

echo "Descending order sorting by key:\n";
echo nl2br(print_r($array, true));
*/
?>





