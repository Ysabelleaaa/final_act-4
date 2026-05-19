<!DOCTYPE html>
<html>
<body>

<<form method="post">
    Enter a year: <input type="number" name="yr" required> <br><br>
    <input type="submit" value="Submit"> <br><br>
</form>


<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

$yr = $_POST["yr"];

if(($yr % 400 == 0) || ($yr % 4 == 0 && $yr % 100 != 0)) {
    echo "Leap Year";
} else {
    echo "Not a Leap Year";
}
}
?>

</body>
</html>
