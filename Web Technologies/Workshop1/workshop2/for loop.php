<!DOCTYPE html>
<html>
<body>
        <form method="POST">
            Enter a number: <input type="text" name="number">
            <input type="Submit" value="Calculate">
        </form>
</body>
</html>

<?php
if ($_POST) {
    $num = $_POST["number"];
    echo nl2br("<p>Multiplication Table of $num:</p>");
    for ($i = 1; $i <= 10; $i++) {
        echo ($num . " x " . "$i" . " = " . $num * $i . "<br>");
    }
}
?>
