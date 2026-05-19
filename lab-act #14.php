<!DOCTYPE html>
<html>
<body>

<h2>Menu Selection</h2>

<form method="POST">

<h3>MENU</h3>
1 = Add <br>
2 = Edit <br>
3 = Delete <br><br>

Enter your choice: <input type="number" name="chc" required> <br><br>
<input type="submit" value="Submit"> <br><br>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$chc = $_POST["chc"];

switch($chc) {
    case 1:
        echo "You selected Add";
        break;
    case 2:
        echo "You selected Edit";
        break;
    case 3:
        echo "You selected Delete";
        break;
    default:
        echo "Invalid choice";
}
}
?>

</body>
</html>
