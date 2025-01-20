
<?php
echo "========";
echo "Q1.";
echo "======";
echo "<br>";
echo "<br>";
$color = array('white','red','green');
$paragraph ="The memory of that scene for me is like a frame of film forever frozen at that moment: the {$color[1]} carpet, the {$color[2]} lawn, the {$color[0]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
echo $paragraph;
echo "<br>";
?>

<?php
echo "========";
echo "Q2.";
echo "======";
echo "<br>";
echo "<br>";
$colors = ['red','green','blue','white'];
echo "<ul>";
    foreach($colors as $color){
        echo "<li>$color</li>";
    
    }
echo "<br>";
?>
<?php
// sort= 0 =>capital
// asort= country=>capital
// arsort= revres
echo "========";
echo "Q3.";
echo "======";
echo "<br>";
echo "<br>";
	$cities =  array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
    arsort($cities); 
    foreach ($cities as $country=>$capital){
        echo "the capital of $country is $capital .<br>";
    }

echo "<br>";
?>

<?php
echo "========";
echo "Q4.";
echo "======";
echo "<br>";
echo "<br>";
$color = [4=>'white',6 =>'green', 11 => 'red'];
$firstarray = reset($color);
echo $firstarray;

echo "<br>";
?>
<?php
echo "========";
echo "Q5.";
echo "======";
echo "<br>";
echo "<br>";
$array = [1,2,3,4,5,6,7,8];
$location = 4 ;
$spishelitem = '$';


array_splice($array,$location,0,$spishelitem,);
print_r($array);
echo "<br>";
?>


<?php
echo "========";
echo "Q6.";
echo "======";
echo "<br>";
echo "<br>";
$fruits = array("d"=>"lemon", "a"=> "orange", "b" =>"banana","c" =>"apple");

asort($fruits);
foreach($fruits as $key =>$val){
    echo "$key = $val <br>";
}

echo "<br>";
?>


<?php
echo "========";
echo "Q7.";
echo "======";
echo "<br>";
echo "<br>";
$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$averag_temp = array_sum($temperatures)/count($temperatures);
echo "Average Temperature is:" . number_format($averag_temp,1) .'<br>';

sort($temperatures);

$lowest_temp = array_slice($temperatures,0,7);
echo "List of seven lowest temperatures: " . implode(",",$lowest_temp) . "<br>";

$highest_temp = array_slice($temperatures,-7);
echo "List of seven highest temperatures: " . implode(", ", $highest_temp) . "<br>";

echo "<br>";
?>


<?php
echo "========";
echo "Q8.";
echo "======";
echo "<br>";
echo "<br>";

echo "<br>";
?>
<?php
echo "========";
echo "Q1.";
echo "======";
echo "<br>";
echo "<br>";

echo "<br>";
?>