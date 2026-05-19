<!DOCTYPE html>
<html>
<body>
    <form method="post">
    Enter your grade (A, B, C, D, F): <input type="text" name="ltr"  maxlength="1" pattern="[A-Za-z]" required> <br><br>
    <input type="submit" value="Submit"> <br><br>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
$ltr = $_POST["ltr"];

switch (strtoupper($ltr)){
    case "A":
        echo "90-100% (Excellent)";
        break;
    case "B":
        echo "80-89% (Good)";
        break;
    case "C":
        echo "70-79% (Satisfactory/Average)";
        break;
    case "D":
        echo "60-69% (Poor/Passing)";
        break;
    case "F":
        echo "0-59% (Fail)";
        break;
    default:
        echo "This letter is not part of the grading scale";
}
}
?>

</body>
</html>
