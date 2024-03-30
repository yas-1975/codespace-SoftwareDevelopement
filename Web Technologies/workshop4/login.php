<?php 
include ('include/head.php');

echo '<br><div class="text-center"><img src="img/logo.jpg" alt="Logo Image"></div><br>';

# Display any error messages if present.
if (isset($errors) && !empty($errors)) {
    echo '<p id="err_msg">Oops! There was a problem:<br>';
    foreach ($errors as $msg) { echo " - $msg<br>"; }
    echo 'Please try again or <a href="register.php">Register</a></p>';
}
?>

<!-- Display body section. -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card bg-light mb-3 form-border">
                <div class="card-header"><h2>Login</h2>
                    <div class="card-body">
                        <form action="login_action.php" method="post">
                            <div class="form-group">
                                <label for="inputemail">Email</label>
                                <input type="text" name="email" class="form-control" required placeholder="* Enter Email"> 
                            <br>
							</div>
							<br>
                            <div class="form-group">
                                <label for="inputpassword">Password</label>
                                <input type="password" name="password" class="form-control" required placeholder="* Enter Password">
                            <br><br>
							</div>
							<div class="card-footer bg-transparent border-black text-center">
                        	<br>
							<input type="submit" class="btn btn-dark btn-lg btn-block" value="Login">
							<br>
							<br>
							<div class="card-footer bg-transparent border-black text-center">
            				 	<div>
							<p>Do not have an account? <a href="register.php">Create account</a></p>
							</div>
						</form>
						
    				</div>
                </div>
            </div>
        </div>
    </div>
	</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>
