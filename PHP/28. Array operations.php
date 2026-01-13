<!DOCTYPE html>
<html>
<head>
<title>PHP Array Operations</title>
</head>
<body>
<h2>Array Operations on Names</h2>

<?php

$names = array("Alice", "Bob", "Charlie", "David", "Eve", 
               "Frank", "Alice", "Grace", "Helen", "Bob");


echo "<h3>(a) Display using foreach:</h3>";
foreach ($names as $n) {
    echo $n . "<br>";
}


$sorted = $names;
sort($sorted);
echo "<h3>(b) Sorted order:</h3>";
foreach ($sorted as $n) {
    echo $n . "<br>";
}


$unique = array_unique($names);
echo "<h3>(c) Without duplicates:</h3>";
foreach ($unique as $n) {
    echo $n . "<br>";
}


$removed = $names;
array_pop($removed);
echo "<h3>(d) After removing last element:</h3>";
foreach ($removed as $n) {
    echo $n . "<br>";
}


$reversed = array_reverse($names);
echo "<h3>(e) Reverse order:</h3>";
foreach ($reversed as $n) {
    echo $n . "<br>";
}


$searchName = "David";  
echo "<h3>(f) Searching for '$searchName':</h3>";
if (in_array($searchName, $names)) {
    echo "$searchName found in the array.";
} else {
    echo "$searchName not found in the array.";
}
?>
</body>
</html>