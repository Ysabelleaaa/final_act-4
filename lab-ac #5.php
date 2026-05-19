<!DOCTYPE html>
<html>
<body>
  
<form method="post">
    Enter you first number: <input type="number" name="num1" required> <br><br>
    Enter you second number: <input type="number" name="num2" required> <br><br>
    Enter you third number: <input type="number" name="num3" required> <br><br>
    <input type="submit" value="Submit"> <br><br>
</form>

<?php
if (isset($_POST['num1'], $_POST['num2'], $_POST['num3'])) {

    $a = $_POST["num1"];
    $b = $_POST["num2"];
    $c = $_POST["num3"];
  
if($num1 == $num2 && $num2 == $num3) {
    echo "All numbers are equal";
}
elseif($num1 >= $num2 && $num1 >= $num3) {
    echo $num1 . " is the largest number";
}
elseif($num2 >= $num1 && $num2 >= $num3) {
    echo $num2 . " is the largest number";
}
else {
    echo $num3 . " is the largest number";
}
}
?>

</body>
</html>
