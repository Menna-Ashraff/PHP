<?php

// --> Task 1

/*
--> But your output under <pre> </pre> tag...
<pre> tags are used to preserve the formatting 
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

echo "<pre>";

foreach ($array as $value) 
{
  $sum += $value;
  $count++;
}

$average = $sum / $count;

echo "The sum of the array is $sum\n";
echo "The average of the array is $average\n";

echo "</pre>";
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

echo "<pre>";
foreach ($array as $value) {
    $sum += $value;
    $count++;
}

$average = $sum / $count;
echo "Sort array in descending order:\n";
print_r($array);

echo "\nThe sum of the array is $sum\n";
echo "The average of the array is $average\n";
echo "</pre>";
*/
?>

<?php

//  --> Task 4 

/*
$array = array("sara" => 31, "john" => 41, "walla" => 39, "ramy" => 40);

asort($array);

echo "Ascending order sort by value:\n";
echo "<pre>";
print_r($array);
echo "</pre>";

ksort($array);

echo "Ascending order sort by key:\n";
echo "<pre>";
print_r($array);
echo "</pre>";

arsort($array);

echo "Descending order sorting by value:\n";
echo "<pre>";
print_r($array);
echo "</pre>";

krsort($array);

echo "Descending order sorting by key:\n";
echo "<pre>";
print_r($array);
echo "</pre>";
*/
?>





