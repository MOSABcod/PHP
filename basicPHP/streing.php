
<!-- --------1------ -->
<?php
// $x ="hello world";
// echo strtoupper($x) ;

use function PHPSTORM_META\map;

?>

<!-- ---------2-------- -->
<?php
// $x = "HOW are you";
// echo strtolower($x);
?>
<!-- ---------3-------- -->

<?php
// $x = "iam good thank you";
// $first = strtoupper($x[0]) . substr($x,1);
// echo$first;
?>
<!-- ----------4--------- -->
<?php
// $world = "iam good thank you";
// $first = explode(" ", $world);

// foreach($first as &$first){
//     $fi = strtoupper($first[0]);
//     $en = substr($first,1);
//     $first = $fi.$en;
    
// }
// $capitel = implode('', $first);
// echo $capitel;
?>
<!-- ----------5------ --> 

<?php
$clock = "085215";

$hours = substr($clock,0,2);
$minuts = substr($clock,2,2);
$seconds = substr($clock,4,2);

$time = $hours.':'. $minuts . ':' . $seconds ;
echo $time;

?>

<?php
// $username = "info@"
?>






























































<?php
// $number = "000753044220.24";

// $cleannumber = ltrim($number,"0");
// print $cleannumber;
?>
























<!-- ----------19-------- -->
<?php
// $liters = range('a','z');
// foreach ($liters as $liters){
//     print $liters . " ";
// }
?>

