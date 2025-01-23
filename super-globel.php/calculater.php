<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>PHP calculator</h2>
<form action="" method="POST">

    <label for="num1">Enter First Number</label>
    <input type="number" id="num1" name="num1" required>
    <br><br>

    <label for="operation">Choose Operation</label>
    <select name="operation" id="operation" required>
        <option value="+">addition (+)</option>
        <option value="-">subtraction(-)</option>
        <option value="*">multiplacation(*)</option>
        <option value="/">division(/)</option>
    </select>
    <br><br>
    
    <label for="num2">Enter Srcond Number</label>
    <input type="number" name="num2" id="num2"required>
    <br><br>

    <button type="submit">Calculate</button>

</form>

<hr>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $result = "";
    
    switch ($operation){
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0){
                $result = $num1 / $num2 ;
            } else {
                $result = "Error: Division by zero is not allowed";
            }  
            break;
            default :
            $result = 'Invalid operation';
            break;
    }
    echo "<h3>Result</h3>";
    echo "<p>$num1 $operation $num2 = $result </p>";
}
echo "<br>";
?>
</body>
</html>