<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter first number: <input type="number" name="num1" required> <br><br>
    Enter second number: <input type="number" name="num2" required> <br><br>
    Enter an operator (+, -, *, /): <input type="text" name="opr" maxlength="1" required> <br><br>
    <input type="submit" value="Calculate"> <br><br>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$opr = $_POST["opr"];

switch ($opr){
    case "+":
        echo "Result: " . ($num1 + $num2);
        break;
    case "-":
        echo "Result: " . ($num1 - $num2);
        break;
    case "*":
        echo "Result: " . ($num1 * $num2);
        break;
    case "/":

if($num2 == 0) {
    echo "Can't divide by zero";
} else {
    echo "Result: " . ($num1 / $num2);
}
    break;
    default:
        echo "Invalid operator";
}
}
?>

</body>
</html>
