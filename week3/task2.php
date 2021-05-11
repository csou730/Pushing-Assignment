<!DOCTYPE html>
<html lang="en">
<head>
    <title>WEEK 3 ASSIGNMENET </title>


</head>
<body>

<h1> Task 2: USING ARROW FUNCTION</h1>

<?php
$number=[2,3,4,6,7,9,11,20,30,99,120];

echo "Even number of Indexed_Array are: ";

function arrow_function($array){
    for ($i=0 ; $i<count($array); $i++){
        if($array[$i]%2!=0){
            array_splice($array,$i,1);
            $i--;
        }
    }
    foreach($array as $value){
        
        echo $value ." ; " ;
    }
}

$result = fn($number) => arrow_function($number);

$result ($number);


?>

</body>
</html>
