<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="assets/css/login.css" rel="stylesheet">

    <!-- Checkboxes style -->
    <link href="assets/css/bootstrap-checkbox.css" rel="stylesheet">
</head>

<body>

<div class="container h-100">
	<div class="row h-100 justify-content-center align-items-center">
				
						
		<div class="card">
			<h4 class="card-header">Login</h4>
           
			<div class="card-body">				
			
                    	<p class="text-info">You have sign out!</p>
                        <form data-toggle="validator" role="form" method="post" action="index.php/welcome">                                
								
								<div class="row">	
									<div class="col-md-12">    
									<div class="form-group">
									<label>Login Email</label>
									<div class="input-group">
									  <div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></span>
										</div>
									  <input type="email" class="form-control" name="login_email" data-error="Input valid email" required>								  
									</div>								
									<div class="help-block with-errors text-danger"></div>
									</div>
									</div>
                                </div>
								
								<div class="row">								
									<div class="col-md-12">
									<div class="form-group">
									<label>Password</label>
									<div class="input-group">
										<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fa fa-unlock" aria-hidden="true"></i></span>
										</div>
										<input type="password" id="inputPassword" data-minlength="6" name="login_password" class="form-control" data-error="Password to short" required />
									</div>	
									<div class="help-block with-errors text-danger"></div>
									</div>
									</div>
								</div>
								
								<div class="row">								
								<div class="checkbox checkbox-primary">
                                <input id="checkbox_remember" type="checkbox" name="remember">
                                <label for="checkbox_remember"> Remember me</label>
                                </div>    
								</div>
								
                                <div class="row">
									<div class="col-md-12">
									<input type="hidden" name="redirect" value="" />
									<input type="submit" class="btn btn-primary btn-lg btn-block" value="Login" name="submit" />
									</div>
								</div>
                        </form>

                        <div class="clear"></div> 
						
						                        <i class="fa fa-user fa-fw"></i> No account yet? <a href="register.php">Register new account</a><br />
                                                <i class="fa fa-undo fa-fw"></i> Forgot password? <a href="reset-password.php">Reset password</a>
            
			</div>	
			
		</div>	
		
	</div>	
</div>
	
<!-- Core Scripts -->
<script src="assets/js/jquery-1.10.2.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
	
<!-- Bootstrap validator  -->
<script src="assets/js/validator.min.js"></script>

</body>
</html>