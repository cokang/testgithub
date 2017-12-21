<!DOCTYPE html>
<html lang="en">
<head>
  <title>Simple Login System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid" style="background:#FFC0CB;">
		<div class="navbar-header">
		  <p class="navbar-brand">Simple Login System</p>
		</div>
	  </div>
	</nav>
	<div class="container" height=100%>
	  <form class="form-horizontal" role="form" action="<?php echo 'http://localhost/answers/index.php/login/login'; ?>" method="post">
		<div class="form-group">
		  <label class="control-label col-sm-2" for="username">Username:</label>
		  <div class="col-sm-10">
			<input type="username" class="form-control" id="username" name="username" placeholder="Enter username">
		  </div>
		</div>
		<div class="form-group">
		  <label class="control-label col-sm-2" for="pwd">Password:</label>
		  <div class="col-sm-10">          
			<input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
		  </div>
		</div>
		<div class="form-group">        
		  <div class="col-sm-offset-2 col-sm-10">
			<div class="checkbox">
			  <label><input type="checkbox"> Remember me</label>
			</div>
		  </div>
		</div>
		<div class="form-group">        
		  <div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default">Login</button>
		  </div>
		</div>
	  </form>
	  <div style="margin-top:50%;text-align:center;">
	  <a href="http://ExplicitPHP.blogspot.com" style="text-decoration:none">
		<p>©2016 ExplicitPHP. PHP is Easy.</p>
	  </a>
	 </div>
	</div>
</body>
</html>

