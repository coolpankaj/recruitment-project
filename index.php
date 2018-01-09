
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home | Recruitment</title>
	<!------------------------Bootstrap 3 linking---------------------->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container-fluid">
		<style type="text/css">
     	.box{transition: box-shadow .3s;}
		.box:hover {
         box-shadow: 0 0 11px rgba(33,33,33,.5); 
         }
        </style>
		<div class="col-md-7 col-md-offset-2 box" style="border: 1px solid lightgrey;border-radius: 5px;font-family: monospace;">
			<ul class="nav nav-tabs">	
				<li class="active"><a href="#rules" data-toggle="tab">Important Rules</a></li>
				<li><a href="#signup" data-toggle="tab" >Sign Up</a></li>
				<li><a href="#login" data-toggle="tab">Login</a></li>
			</ul>

			<div class="tab-content">
				<div id="rules" class="tab-pane fade in active" >
					<h4>my name is pankaj saini....</h4>				
				</div>
				<div id="signup" class="tab-pane fade" >
					<form method="POST" action="signup.php">
						<div class="form-group">
							<label for="fname">First name</label>
							<input type="text" name="f_name" class="form-control">
						</div>
						<div class="form-group">
							<label for="lname">Last Name</label>
							<input type="text" name="l_name" class="form-control">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="mobile">Mobile</label>
							<input type="text" name="mobile" class="form-control">
						</div>
						<div class="form-group">
							      <?php require_once('/recaptcha/recaptchalib.php');
		                           $publickey = "6LegAkAUAAAAAFZs34Powu2xDbKJYVx0GcJXelFO"; // you got this from the signup page
		                           echo recaptcha_get_html($publickey); ?>
                        </div>
						<button type="submit" class="btn btn-success btn-block" name="submit" value="submit">Submit</button><br>
					</form>
				</div>
				<div id="login" class="tab-pane fade">
					<form method="POST" accept="/">
						<div class="form-group">
							<label for="email">Email</label>
						    <input type="text" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="pswd" class="form-control">
						</div>
						
						<button type="submit" class="btn btn-success btn-block" name="submit" value="submit">Submit</button><br>
					</form>	    
				</div>
			</div>
		</div>
	</div>

</body>
</html>

