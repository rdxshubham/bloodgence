<html>
	<head>
		<title>Welcome To Bloodgence</title>
		<!--<script src="js/bootstrap.js"></script>
		<script src="js/bootstrap.min.js"></script>-->
		<script src="js/materialize.min.js"></script>
		<script src="js/materialize.js"></script>
		<script scr="js/jquery-1.11.3.min.js"></script>
		<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">-->
		<link rel="stylesheet" type="text/css" href="css/materialize.css">
		<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
		<style>
		@font-face {
			font-family: 'Stencil';
			src: url('fonts/Stencil.ttf');
		}
		section {
			font-family: Calibri;
		}
		nav {
			font-family: Stencil;
		}
		
		body {
			background: url('images/fabric_of_squares_gray.png')
		}
		form {
			display: inline-block;
		}
		section input {
			border: 1px dotted rgb(38, 166, 154) !important;
			padding: 0px 10px !important;
		}
		</style>
	</head>
	<body>
		<nav>
			<div class="nav-wrapper">
			<center><a class="brand-logo center" href="index.html">Bloodgence</a></center>
			</div>
		</nav>
		<section>
			<center>
			<br></br>
			<form class="col s12" action="process_login.php" method="post">
				<div class="row">
					<div class="input-field col s12">
					  Username: <input id="email" type="text" name="username" class="validate">
					  <!--<label for="email">Email</label>-->
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
					  Password: <input id="password" type="password" name="password" class="validate">
					  <!--<label for="password">Password</label>-->
					</div>
				</div>
				<button class="btn waves-effect waves-light" type="submit" name="action">Login
					<i class="mdi-content-send right"></i>
				</button>
			</form>
			<br></br>
			<?php if(isset($_GET["success"])&& $_GET["success"]==md5("success")) {
			?>
			<p>Registration Successful,Login with your Username.</p>
			<?php } ?>
			<a href="hospital_register.html">Not Registered? Sign Up</a>
			</center>
			
		</section>
	</body>
</html>