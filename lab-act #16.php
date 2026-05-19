<!DOCTYPE html>
<html>
<body>

<h3>COLORS</h3>
RED = Stop <br>
YELLOW = Caution <br>
GREEN = Go <br><br>

<form method="post">
    Pick a color: <input type="text" name="clr" pattern="[A-Za-z]+" required> <br><br>
    <input type="submit" value="Submit"> <br><br>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$clr = $_POST["clr"];

switch (strtoupper($clr)){
    case "RED":
        echo "Stop.";
        break;
    case "YELLOW":
        echo "Caution.";
        break;
    case "GREEN":
        echo "Go.";
        break;
    default:
        echo "Invalid color";
}
}
?>

</body>
</html>
