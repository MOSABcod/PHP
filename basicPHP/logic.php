
<!-- 1 -->
<?php
$year = 2023;
if(($year % 4 == 0 && $year % 100 !=0) || ($year % 400 == 0)){
    echo "$year is a leap year";
}
else{
    echo "$year is not a leap year";
}
?>

<?php echo "<br>"
?>
<!-- 2 -->

<?php
$temprecher = 22 ;
if($temprecher<20){
    echo "it is wintertime";
}
else {
    echo "it is summertime";
}

?>

<?php echo "<br>";?>
<!-- 3 -->

<?php
$number1 = 4 ;
$number2 = 5 ;
if($number1 === $number2){
    $result = ($number1 + $number2) * 3 ;
}
else{
    $result = $number1 + $number2;

}
echo "Result: $result";

?>
<?php echo "<br>";?>
<!-- 4 -->

<?php
$x = 15 ;
$y = 15 ;
$sum = $x + $y;
if ($sum === 30) {
    echo $sum;
}
else {
    echo "false";
}
?>

<?php echo "<br>";?>
<!-- 5 -->

<?php
$num = 9;
if ($num % 3 == 0){
    echo "$num is a multiple of 3";
} else {
    echo "$num is not ";
}
?>

<?php echo "<br>";?>
<!-- 6 -->

<?php
$range = 63;

if ($range >= 20 && $range <= 50){
    echo "true";
}else{
    echo "fulse";
}

?>

<?php echo "<br>";?>
<!-- 7 -->

<?php
$num1 = 199;
$num2 = 5;
$num3 = 78;

if  ($num1 >= $num2 && $num1 >= $num3){
    echo "the largest number is $num1";
} elseif ($num2 >= $num1 && $num2 >= $num3){
    echo "the largest number is $num2";
} else {
    echo "the largest number is $num3";
}

?>

<?php echo "<br>";?>
<!-- 8 -->

<?php
$bill = 300;
$first = $bill * 2.50 ;
$secnd = $bill * 5.00 ;
$third = $bill * 6.20 ;
$furth = $bill * 7.50 ;

if($bill <= 50){
    echo $first ;
} elseif($bill>50 && $bill<=100){
    echo $secnd ;
} elseif($bill>100 && $bill<=250){
    echo $third ;
} else {
    echo $furth ;
}


?>
<?php echo "<br>";?>
<!-- 9-->

<?php



function calculate ($A,$B,$operation){
    switch ($operation) {
        case 'add':
            return $A + $B;


        case  'subtract':
            return $A - $B;
        
        case 'multiply':
            return $A * $B;

        case 'divide':
            if($B != 0){
                return $A / $B ;
            }  else {
                return "Error:Division by zero is not allowed ";

            }  

            
        
        default:
            return "Error: Invalid operation";
    }
}
$A = 2;
$B = 2; 
$operation ="divide";
$result = calculate($A,$B,$operation);
echo "Result: $result\n";
?>
