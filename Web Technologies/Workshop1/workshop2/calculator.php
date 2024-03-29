<!DOCTYPE html>
<html>
<body>
<h2> Calculator </h2>

<!-- Calculator form -->


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    <label for="num1">Input Number 1:   </label><input type="number" name="num1"><br><br>
    <label for="num2">Input Number 2:   </label><input type="number" name="num2"><br><br>

<label for="operator">Select Operator: </label>
<select name="operator" id="operator">
    <option value=""></option>
    <option value="+">Addition (+)</option>
    <option value="-">Subtraction (-)</option>
	<option value="/">Division (/) </option>
    <option value="*">Multiplication (*)</option>
</select>
<br><br>
    <input type="submit" value="Calc"><br><br>
</form>
<?php

	if ($_SERVER['REQUEST_METHOD'] === 'GET') {
		
		$num1 = $_GET['num1'];
		$num2 = $_GET['num2'];
		$operator = $_GET['operator'];
		
		switch ($operator) {
			case "+":
			// code to be executed if operator is Addition
				$result = $num1 + $num2;
				break;
			case "-":
			// code to be executed if operator is Subtration
				$result = $num1 - $num2;
				break;
			case "/":
			// code to be executed if operator is division
			$result = $num1 / $num2;
				break;
				case "*":
			// code to be executed if operator is multiplcation
				$result = $num1 * $num2;
			break;
			default:
			// code to be executed if none of the cases match
			$result = "Invalid Operator";
			}
		echo "$num1 $operator $num2 = $result";
	}

?>


</body>
</html>