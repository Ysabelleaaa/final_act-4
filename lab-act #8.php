<!DOCTYPE html>
<html>
<body>

<h2>Voting Eligibility</h2>

<form method="post">
    Enter your age: <input type="number" name="age" required> <br><br>
    Enter your citizenship: <input type="text" name="ctz" required> <br><br>
    <input type="submit" value="Submit"> <br><br>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

$age = $_POST["age"];
$ctz = $_POST["ctz"];

if($age >= 18) {

if(strtoupper($ctz) == "FILIPINO") {
    echo "Eligible to vote";
} else {
    echo "Not eligible: must be Filipino";
}
} else {
    echo "Not eligible: must be 18 and above";

}
}
?>

</body>
</html>
