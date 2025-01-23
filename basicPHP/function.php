
<?php
echo "========";
echo "Q1.";
echo "======";
echo "<br>";
echo "<br>";
function isPrime($number){
    if ($number<=1){
        return false ;
    }
    for ($i=2; $i <= sqrt($number) ; $i++) { 
if ($number % $i == 0){
    return false ;
}
    }
    return true ;
}
$inputnumber = 7;
if (isPrime($inputnumber)){
    echo "$inputnumber is a prime number";
} else {
    echo  "$inputnumber is not a prime number";
}
echo "<br>";
?>
<?php
echo "========";
echo "Q2.";
echo "======";
echo "<br>";
echo "<br>";
$x = "HELLO WORLD";
echo strrev($x);
echo "<br>";
?>
<?php
echo "========";
echo "Q3.";
echo "======";
echo "<br>";
echo "<br>";
function isAllowercase($string){
    if (preg_match("/^[a-z]+$/",$string)){
        return"your string is ok";
    }else{
        return"your string is not ok";
    }
}
$input = "engineer";
echo isAllowercase($input);

echo"<br>";
?>
<?php
echo "========";
echo "Q4.";
echo "======";
echo "<br>";
echo "<br>";
function swapvar(&$x,&$y){
    $swap = $x;
    $x = $y;
    $y = $swap;
}
$s = 7;
$d = 5;
echo "before swap: s=$s , d=$d<br>";
swapvar($s,$d);
echo "after swap: s=$s ,d=$d <br>";

echo "<br>";
?>

<?php
echo "========";
echo "Q5.";
echo "======";
echo "<br>";
echo "<br>";
function armstrong($number){
    $digits = str_split($number);
    $numberdigit = count($digits);
    $sum = 0 ;
    foreach ($digits as $digit) {
        $sum += pow($digit,$numberdigit);
        
    }
    if ($sum == $number){
        return " is an Armstrong number :$number";
    }else{
        return " is not an Armstrong number :$number";
    }
}
echo armstrong(153);
echo "<br>";
echo armstrong(123);

echo "<br>";
?>
<?php
echo "========";
echo "Q6.";
echo "======";
echo "<br>";
echo "<br>";
function palindrome ($string){
    $clean = preg_replace('/[^a-z0-9]/i','',strtolower($string));
    $revers = strrev($clean);
    if ($clean===$revers){
        return "Yes, it is a palindrome.";
    }else {
        return "No, it is not a palindrome.";
    }
}
$inputtext = "Eva ,can I see bees in a cave?";
echo palindrome($inputtext);
echo "<br>";
?>



<?php
echo "========";
echo "Q7.";
echo "======";
echo "<br>";
echo "<br>";
function removesame($array){
    $uneqearray = array_unique($array);
    $uneqearray = array_values($uneqearray);

    return $uneqearray;
}
$firstarray = array (2,5,4,8,1,9,2,4);
$result = removesame($firstarray);

print_r($result);
echo "<br>";
?>