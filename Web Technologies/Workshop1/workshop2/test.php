<!-- A simple HTML form that submits data to the same page using GET -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Submit">
</form>

<?php
// Get the values submitted via the form, using $_GET
$name = $_GET['name'];
$email = $_GET['email'];

// Display the submitted values
echo "Name: $name <br>";
echo "Email: $email <br>";
?>