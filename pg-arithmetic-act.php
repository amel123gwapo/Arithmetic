<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>

<h2>Arithmetic</h2>
<form method="POST" action="">
    <label for="num1">Enter first number:</label>
    <input type="number" id="num1" name="num1" required><br><br>

    <label for="num2">Enter second number:</label>
    <input type="number"  id="num2" name="num2" required><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if (isset($_POST['submit'])) {
    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    
    $addition = $num1 + $num2;
    $subtraction = $num1 - $num2;
    $multiplication = $num1 * $num2;
    $division = ($num2 != 0) ? $num1 / $num2 : "Undefined (cannot divide by zero)";
    

    
    echo "<h3>Results:</h3>";
    echo "<p>$num1 + $num2 = $addition</p>";
    echo "<p>$num1 - $num2 = $subtraction</p>";
    echo "<p>$num1 * $num2 = $multiplication</p>";
    echo "<p>$num1 / $num2 = $division</p>";

}
?>

</body>
</html>
