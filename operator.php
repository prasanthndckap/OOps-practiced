<?php

//Arthmatic Operator  (+ - * % / **)

//$x= 10;
//$Y = 3;

//var_dump($x / $Y);

// Asignment operator  ( =, +=, -=, /= %= **=)

// string Operator (. , +=)

//$x="prasanth";

//echo $x .= " hello";


//Comparison Operator(==, ===, !==, <>, !=== , <= >=, <===> ?? ?:)
//
//$x= 10;
//$y = 10;
//
//var_dump($x > $y);
//var_dump($x < $y);
//var_dump($x >= $y);
//var_dump($x <= $y);
//var_dump($x  $y);
/*
$x = "Hello world";
$y = strpos($x,"w");

$result = $y=== true ? " H is not found": "H is found" .$y;
echo $result;
if($y === false){
    echo "H Not found";

}else{
    echo 'H found at Index '.$y;
}
*/

//--------------------------------------------------------------------------------------

//increment/Decrement operator (++,--);

//$x = 4;
//
//echo ++$x;
//
//echo $x;

// Logical operator
//$x = 10;
//$y = false;
//
//var_dump($x || $y);



//---------------------------------------------------------------------------------
/*
//control structure in php (if/else/elseif/else if)

$score = 745;

if($score >= 90){
echo "A";
}elseif($score >= 80){
echo  "B";
} elseif($score >=70){
    echo "C";
}else{
   echo  "hii";
}
*/
//---------------------------------------------------------------------------------------------


/** loops */
/*
//while loops
$i = 0;
while(true){
    while($i <=15){
echo$i++.",";
    }
}

echo "hello ";

*/

//do while


//forloop

// foreach
/*
$friends = ["prasanth","yuvarj","meganathan","murali","aravindh","vignesh"];


foreach($friends as $key => $friend){
//    foreach  helps to print get the each values in the array and assign it to the another variable
    // key variable determine the key of the each array values
    echo $key."." .$friend."<br>"."<br>";
}
//unset used to distroy the foreach run out of the for each loop
unset($friend);
// if i print the foreach values it will print last index value of the array
echo $friend;

*/


$user= [
    'name' => 'prasanth',
    'email' =>'prasanth@gmail.com',
    'skills' => ['php','javascript','html'],
];
//var_dump($user);


//foreach($user as $id => $details){
////    json encode helps the get the orinal array values of foreach determined array
//
////    if(is_array($details)){
////       echo $details = implode(',' .$details);
////    }
////    echo $id." : ".json_encode($details)."<br>";
//        echo $id." : ".json_encode($details)."<br>";
//}
//
//$array = [2,4,6,8,10];
//
//for($i=1;$i<count($array);$i++) {
//    $output = [0];
//    $output[0] = $array[$i +1] * $array[$i]."\n";
//    print_r($output[0]);
//
////    echo $array[$i] += $array[$i + 1] . "\n";
//}
//






//$inputValue = array(1,2,444,43,44,55,53,12,12);
//$output = $inputvalue[0];
//for($i=0;$i<count($inputvalue);$i++){
//    for($j=$i+1;$j<count($inputvalue);$j++) {
//
//
//        if ($inputvalue[$i] == $inputvalue[$j]) {
//            echo $inputvalue[$j]."\n";
//        }
//    }
////}
//$n = 5;
//for($i=$n;$i>0;$i--){
//    echo !$n = $n*($n+$i);
//    echo $i;
//}


//match expression is  introduced in PHP 8



// return / declare / goto /

//function sum($x,$y){
//$z = $x +$y;
//return $z;
//}
//$x = sum(5,10);
//
//
//echo $x;




function PrettyPrintArray(array  $values){
    echo '<pre>';

    print_r($values);

    echo '<pre>';
}

//echo "hello";