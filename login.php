<!DOCTYPE html>
<?php 
//starting the session
session_start();
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<link rel="stylesheet" type="text/css" href="style.php?theme=blue"/>
		
	</head>
<body style="background:url(photo-1614149162883-504ce4d13909.jpg) ;background-repeat:no-repeat;background-size:100% 150%">
	
	<br style="clear:both;"/><br />
	<br style="clear:both;"/><br />

<div class="container fluid">
	
		
	
	

	
	<div class="row justify-content-center h-100">
		<div class="card-healer text-center shadow border: 2px solid red;
         padding: 10px;
         border-radius: 50px 20px; my-auto text-white h-100 w-50">
		
		<h3 class="text-primary" style="color:red"  >LOGIN TO MUSIC</h3>
        
		
		
        
		<hr style="border-top:1px dotted #ccc;"/>
		<!-- Link for redirecting page to Registration page -->
		

		
          
		<br style="clear:both;"/><br />
		<div class="col-md-3"></div>
		
			<!-- Login Form Starts -->

            <form method="POST" action="login_query.php">
				
			
				<div class="form-group">
				
					<input type="text" name="username" class="form-control" placeholder="@email.com" required="required"/>
                
				</div>
				<br style="clear:both;"/><br />
				<div class="form-group">
				<i class="fa fa-envelope icon"></i>
					<input type="password" name="password" class="form-control" placeholder="Password" required="required"/>
					
				</div>

				<br style="clear:both;"/><br />
				<?php
					//checking if the session 'error' is set. Erro session is the message if the 'Username' and 'Password' is not valid.
					if(ISSET($_SESSION['error'])){
				?>
				<!-- Display Login Error message -->
					<div class="alert alert-danger"><?php echo $_SESSION['error']?></div>
				<?php
                					//Unsetting the 'error' session after displaying the message. 
					unset($_SESSION['error']);
                }
            ?>
			
			
		   <label><input type="checkbox"> Remember me</label>
			<a href="index.php" style="color:white">Not a member yet? Register here...</a>
			
		<br style="clear:both;"/><br />
            <button class="btn btn-primary btn-block" name="login"><span class="glyphicon glyphicon-log-in"></span> Login</button>
			<br style="clear:both;"/><br />
			</div>
			

        </form>	
        <!-- Login Form Ends -->
	</div>
</div>
</body>
</html>