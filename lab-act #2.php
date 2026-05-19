<!DOCTYPE html>
<html>
<head>
    <title> ab 2 - Positive or Negative </title>
</head>
<body>

    <h2> Positive or Negative Checker </h2>

    <form method="post">
    Enter a number: <input type="number" name="num" required> <br><br>
    <input type="submit" value="Submit"> <br><br>
</form>

    <?php
    if (isset($_POST['num'])) {

        $num = $_POST['num'];

        if ($num >= 0) {
            echo "<p>Positive Number</p>";
        } else {
            echo "<p>Negative Number</p>";
        }
    }
    ?>

</body>
</html>
