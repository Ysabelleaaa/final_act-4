<!DOCTYPE html>
<html>
<body>

<h2>Password Checker</h2>

<form method="post">
    Enter your password: <input type="password" name="psw" required> <br><br>
    <input type="submit" value="Submit"> <br><br>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

$psw = $_POST["psw"];

if($psw == "admin123") {
 echo "Access Granted";
} else {
    echo "Access Denied";
}
}
?>

</body>
</html>
