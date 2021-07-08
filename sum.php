<?php
echo 'hello php!';
function sum(){
$result = 0;
for($i = 1; $i <= 10; $i++){
    $result += $i;
}
return $result;
    
}
echo sum();

function times2($num){
    return $num * 2;
}

function sumab($a,$b){
    return $a + $b;
}

function product($arr){
    $result = $arr[0]; 
    for ($i = 1; $i < count($arr); $i++) {
            $result *= $arr[$i];
    }
    return $result;
}
echo product(array(1, 3, 5 ,7, 9));


function max_array($arr) {
 $max_number = $arr[0];
 foreach($arr as $a) {
   if ($max_number < $a) {
     $max_number = $a;
   }
 }
 return $max_number;
}
echo max_array(array(1, 3, 5, 7, 9)) . "\n";


/*array_push使用の場合*/
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

/*array_merge*/
$array1 = array("color" => "red", 2 ,4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

/*time, mktime*/
$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now:' .date('Y-m-d')."\n";
echo 'Now Week:' .date('Y-m-d', $nextWeek)."\n";

date_default_timezone_set('UTC');
echo "July 1, 2000 is on a" .date("l", mktime(0, 0, 0, 7, 1, 2000));

/*date*/
echo date('Y-m-d H:i:s', 10);


