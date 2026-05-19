<!DOCTYPE html>
<html>
<body>

<h2>Discount Calculator</h2>

<form method="post">
    Enter purchase amount: <input type="number" name="prc" required> <br><br>
    <input type="submit" value="Submit"> <br><br>
</form>


<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

$prc = $_POST["prc"];

if($prc >= 1000) {
 echo "You have a 20% discount!";
} elseif($prc >= 500 && $prc <= 999) {
 echo "You have a 10% discount!";
} else{
    echo "Sorry, you don't have a discount.";
} 
}
?>

</body>
</html>
