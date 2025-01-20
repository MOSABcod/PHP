
<?php
echo "========";
echo "Q1.";
echo "======";
echo "<br>";
echo "<br>";
$numbers = range(1,10);
$output = implode('-',$numbers);
echo $output;
echo "<br>";

?>

<?php
echo "========";
echo "Q2.";
echo "======";
echo "<br>";
echo "<br>";
$sum = 0;
for ($x = 0; $x <= 30 ;$x++){
    $sum += $x ;
}
echo " total as a number :$sum";
echo "<br>";
?>
<?php
echo "========";
echo "Q3.";
echo "======";
echo "<br>";
echo "<br>";
$row = 5;
for ($i=1; $i <=$row ; $i++) {
    $char = chr(64 + $i) ;

for ($j=1; $j<=$row;$j++){
    if($j <= $row - $i){
        echo "A ". "  ";
        
    } else {
        echo "$char ". "  ";
        
    }
} 
echo '<br>';

}
echo '<br>';

?>
<?php
echo "========";
echo "Q4.";
echo "======";
echo "<br>";
echo "<br>";
$row = 5;
for ($i=1; $i <=$row ; $i++) {
    $num = chr(48 + $i) ;

for ($j=1; $j<=$row;$j++){
    if($j <= $row - $i){
        echo "1 ". "  ";
        
    } else {
        echo "$num ". "  ";
        
    }
} 
echo '<br>';

}

?>

<?php
echo "========";
echo "Q5.";
echo "======";
echo "<br>";
echo "<br>";


?>