<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter a number: <input type="number" name="num" required> <br><br>
    <input type="submit" value="Submit"> <br><br>
</form>

    <?php
    if (isset($_POST['num'])) {

        $num = $_POST['num'];

        if ($num % 2 == 0) {
            echo "<p>Even Number</p>";
        } else {
            echo "<p>Odd Number</p>";
        }
    }
    ?>

</body>
</html>
