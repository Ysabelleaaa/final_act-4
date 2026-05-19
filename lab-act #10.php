<!DOCTYPE html>
<html>
<body>

<h2>Simple Login</h2>

<form method="post">
    Username: <input type="text" name="usn" required> <br><br>
    Password: <input type="password" name="psw" required> <br><br>
    <input type="submit" value="Submit"> <br><br>
</form>


<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

$usn = $_POST["usn"];
$psw = $_POST["psw"];

if($usn == "admin" && $psw == "1234") {
    echo "Access Granted";
}
elseif($usn != "admin" && $psw != "1234") {
    echo "Access Denied: wrong username & password";
}
elseif($usn != "admin") {
    echo "Access Denied: wrong username";
}
else {
    echo "Access Denied: wrong password";
}
}
?>


</body>
</html>
