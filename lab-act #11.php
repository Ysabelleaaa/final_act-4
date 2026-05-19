<!DOCTYPE html>
<html>
<head>
    <title>Lab 11 - Day of the Week</title>
</head>
<body>

<h2>Day of the Week</h2>

<form method="post">
    Enter a number (1-7): <input type="number" name="day" required> <br><br>
    <input type="submit" value="Submit"> <br><br>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$day = $_POST["day"];

switch ($day){
    case 1:
        echo "Today is Monday";
        break;
    case 2:
        echo "Today is Tuesday";
        break;
    case 3:
        echo "Today is Wednesday";
        break;
    case 4:
        echo "Today is Thursday";
        break;
    case 5:
        echo "Today is Friday";
        break;
    case 6:
        echo "Today is Saturday";
        break;
    case 7:
        echo "Today is Sunday";
        break;
    default:
        echo "This number is not in the given range";
}
}
?>

</body>
</html>
