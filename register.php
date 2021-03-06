<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Online Quiz System</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<link rel="stylesheet" href="assets/css/bootstrap.css" media="screen">
		<link rel="stylesheet" href="assets/css/custom.css" media="screen">
		<script src="assets/js/jquery-1.10.2.min.js"></script>
		<script src="assets/js/bootstrap/dist/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="container">
		<div class="span6 offset3 jumbotron">
		  <h1>Online Quiz</h1>
		  <p>Account registration</p>
		  <p></p>
		  <form class="form-horizontal">
		  <fieldset>
	      <div class="form-group">
		      <label for="username" class="col-lg-1 control-label">Username</label>
		      <div class="col-lg-10">
		        <input class="form-control" id="username" placeholder="Username" type="text">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputEmail" class="col-lg-1 control-label">Email</label>
		      <div class="col-lg-10">
		        <input class="form-control" id="inputEmail" placeholder="Email" type="text">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="password" class="col-lg-1 control-label">Password</label>
		      <div class="col-lg-10">
		        <input class="form-control" id="password" placeholder="Password" type="password">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="confirmPassword" class="col-lg-1 control-label">Confirm Password</label>
		      <div class="col-lg-10">
		        <input class="form-control" id="confirmPassword" placeholder="Confirm Password" type="password">
		      </div>
		    </div>
		    <div class="form-group">
		      <label for="inputLoginButton" class="col-lg-1 control-label"></label>
		      <div class="col-lg-10">
		        <a class="btn btn-primary" href="login.php">Login</a>&nbsp;<a href="register.php" class="btn btn-success">Register</a>
		      </div>
		    </div>
	    	</fieldset>
	    </form>
		</div>
	</div>
	</body>
</html>