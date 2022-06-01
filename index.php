<?php 
//starting the session
session_start();
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
	<br style="clear:both;"/><br />
<body style="background:url(photo-1614149162883-504ce4d13909.jpg) ;background-repeat:no-repeat;background-size:100% 200%">
	
		
	
	
	
	<div class="container-fluid">
	<div class="row justify-content-center h-100">
		<div class="card-healer text-center  shadow  my-auto text-white h-100 w-50">
		<h3 class="text-primary">GONGGONG REGISTRATION </h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<!-- Link for redirecting to Login Page -->
		
		<br style="clear:both;"/><br />
		
		
			<!-- Registration Form start -->
			<form method="POST" action="save_member.php">	
				
				<div class="form-group">
					
					<input type="text" name="username" class="form-control"  placeholder="Username" required="required"/>
				</div>
				<br style="clear:both;"/><br />
				<div class="form-group">
					
					<input type="password" name="password" class="form-control" placeholder="Password" required="required"/>
				</div>
				<br style="clear:both;"/><br />
				<div class="form-group">
					
					<input type="text" name="firstname" class="form-control" placeholder="Firstname" required="required"/>
				</div>
				<br style="clear:both;"/><br />
				<div class="form-group">
					
					<input type="text" name="lastname" class="form-control" placeholder="Lastname" required="required"/>
				</div>
				<br style="clear:both;"/><br />
				<?php
					//checking if the session 'success' is set.
					if(ISSET($_SESSION['success'])){
				?>
				<!-- Display regostration success message -->
				<div class="alert alert-success"><?php echo $_SESSION['success']?></div>
				<?php
                					//Unsetting the 'success' session after displaying the message. 
					unset($_SESSION['success']);
                }
            ?>
            <button class="btn btn-primary btn-block" name="register"><span class="glyphicon glyphicon-save"></span> Register</button>
			<br style="clear:both;"/><br />
			<a href="login.php" style="color:white">Already a member? Log in here...</a>
        </form>	
        <!-- Registration Form end -->
    
</div>
</body>
</html>