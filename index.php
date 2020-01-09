<?php


$num = 6;
$option_true = "yes, 6 is greater than 2.";
$option_false = "no, 6 is less then tha given number";

// if ($num>9){
//     echo $option_true;
// }

// else{
//     echo $option_false;
// }

$name1 = 'lakatos krisztiánóronáldó';
// echo "   ---  my name is $name1";
// echo '$name1';

$name1uc = ucwords($name1);
ucwords($name1);
$lastname = strstr($name1uc, ' ');

$firstname = str_replace($lastname, '', $name1uc);

echo $firstname.$lastname."<br>";
echo " where first name is: ".$firstname. ", last name is: ".$lastname."<br>";

$nickNames = ['Krisz', 'Feri', 'Jozef', 'Anna'];
$ages = [23, 34, 55, 16];
echo $ages[1]." ".$nickNames[1]."<br>";


$keyValueArray = [];


for($i=0; $i<4;$i++){
    $keyValueArray[$i] = [$nickNames[$i] => $ages[$i]];
}
print_r($keyValueArray);

print_r($keyValueArray[3]);
echo count($keyValueArray);




//echo implode(' ', $ages);
?>