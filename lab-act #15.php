<!DOCTYPE html>
<html>
<form method="post">
    Enter a number (1-12): <input type="number" name="month" required> <br><br>
    <input type="submit" value="Submit"> <br><br>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$month = $_POST["month"];

switch ($month){
    case 1:
        echo "This month is January";
        break;
    case 2:
        echo "This month is February";
        break;
    case 3:
        echo "This month is March";
        break;
    case 4:
        echo "This month is April";
        break;
    case 5:
        echo "This month is May";
        break;
    case 6:
        echo "This monh is June";
        break;
    case 7:
        echo "This month is July";
        break;
    case 8:
        echo "This month is August";
        break;
    case 9:
        echo "This month is September";
        break;
    case 10:
        echo "This month is October";
        break;
    case 11:
        echo "This month is November";
        break;
    case 12:
        echo "This month is December";
        break;
    default:
        echo "This number is not in the given range";
}
}
?>

</body>
</html>
