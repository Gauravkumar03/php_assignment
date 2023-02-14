<?php 
// 1-write a php program to loop over the json data. suppose, you have the following json data
$arr = array(array(
    "name" => "John Garg",
    "age"  => "15",
    "school" => "Ahlcon Public school"
),array(
    "name" => "Smith Soy",
    "age"  => "16",
    "school" => "St. Marie school"
),array(
    "name" => "Charle Rena",
    "age"  => "16",
    "school" => "St. Columba school"
));

foreach($arr as $obj) {
    foreach($obj as $key => $val) {
        echo $key.": ".$val."<br>";
    }
}


// 2-Write a program to loop through an associative array using foreach. 

$a = array('one' => 'I', 'two' => 'II', 'three' =>'III', 'four' => 'IV');
foreach($a as $key => $val) {
    echo $key.": ".$val."<br>";
}

//3-Write a program to convert the given string into an array

$a = 'Burch Jr, Philip H., The American establishment, Research in political economy 6(1983), 83-156';
$arr = explode(",",$a);
foreach($arr as $val) {
    echo $val. '<br>';
}

//4- How to remove last character from string using PHP?

$str = 'abcde';
echo substr($str, 0, -1);
echo '<br>';

//5-How to get current directory, filename and code line number in PHP?

echo "The current directory of this file is '" . __DIR__ . "'.\n";
echo "<br>";
echo "The current file with path is '" .  __FILE__ . "'.\n";
echo "<br>";
echo "The line number of this code is '" .  __LINE__ . "'.\n";
echo "<br>";
?>