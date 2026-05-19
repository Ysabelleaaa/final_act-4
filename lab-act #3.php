<!DOCTYPE html>
<html>
<body>
    
    <form method="post">
    Enter your grade: <input type="number" name="grd" required> <br><br>
    <input type="submit" value="Submit"> <br><br>
</form

    <?php
    if (isset($_POST['grade'])) {

        $grade = $_POST['grade'];

        if ($grade >= 90 && $grade <= 100) {
            echo "<p>Excellent</p>";
        } elseif ($grade >= 80) {
            echo "<p>Good</p>";
        } elseif ($grade >= 70) {
            echo "<p>Average</p>";
        } else {
            echo "<p>Failed</p>";
        }
    }
    ?>

</body>
</html>
