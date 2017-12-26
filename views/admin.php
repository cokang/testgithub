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
	  <div class="container-fluid">
		<div class="navbar-header">
		  <p class="navbar-brand">Simple Login System</p>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <form class="navbar-form navbar-right" role="search" action="<?php echo 'http://localhost/answers/index.php/logout/logout'; ?>">
			<button type="submit" class="btn btn-default" style="border-radius: 50%;">Logout</button>
		  </form>
		</div>
	  </div>
	</nav>
    <div class="container" height=100%>
	  <h2>Welcome to this system, 
        <?php 
			$this->load->library('session');
			$login_session = $this->session->userdata('userlogin');
			//$username = $this->session->userdata('userlogin');
			echo $login_session['Username'];
		?>
	  </h2>
    </div>
	<div style="margin-top:50%;text-align:center;">
	  <a href="http://ExplicitPHP.blogspot.com" style="text-decoration:none">
		<p>©2016 ExplicitPHP. PHP is Easy.</p>
	  </a>
	 </div>
  </body>
</html>
