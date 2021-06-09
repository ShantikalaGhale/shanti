<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Register</title>
</head>
<body>
    <div class="card">
        <article class="card-body mx-auto" style="max-width: 450px;">
            <p class="divider-text">
                <span class="signin">Create Account</span>
            </p>
            <p class="text-center">Create your account. It's free and only takes a minute.</p>
	        <form>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
		                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        <input name="name" class="form-control" placeholder="Full name" type="text">
		            </div>
                    
                </div> <!-- form-group// -->

               
                    <div class="input-group-prepend">
                    <input name="email" class="form-control" placeholder="Full name" type="text">
		                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		            </div>
                    
                 <!-- form-group// -->

                <div class="form-group input-group">
            
		                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		          
                    <input name="phone" class="form-control" placeholder="Full name" type="text">
                </div> <!-- form-group// -->

                <div class="form-group input-group">
                    <div class="input-group-prepend">
		                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		            </div>
                    <input name="address" class="form-control" placeholder="Full name" type="text">
                </div> <!-- form-group// -->

                <div class="form-group input-group">
                    <div class="form-check-inline">
                        <label>Gender: </label>
                    </div>
                    <div class="form-check-inline">
                        <input type="radio" id="form-check-input" name="optradio" value="option2">
                        <label for="form-check-input">Male</label>
                    </div>
                    <div class="form-check-inline">
                        <input type="radio" id="form-check-input" name="optradio" value="option2">
                        <label for="form-check-input">Female</label>
                    </div>
                    <div class="form-check-inline">
                        <input type="radio" id="form-check-input" name="optradio" value="option2">
                        <label for="form-check-input">Others</label>
                    </div>
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <select class="form-control">
                        <option selected> Select user type</option>
			            <option>Trader</option>
			            <option>Customer</option>
                    </select>
                </div><!-- form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" placeholder="Enter password" type="password">
                    <p style="font-size: 13px;">Password must be at least 8 characters and contain at least one number,one upper case letter,one lower case letter and one special character.</p>
                </div><!-- form-group// -->
                <div class="form-group">
                     <button type="submit" class="btn  btn-block" style="background-color: #d69825;color: #fff;"> Create Account  </button>
                </div>
                <p class="text-center">Already have an account? <a href="login.php">Log In</a> </p>                                                     

                
            </form>
        </article>

    </div>
</body>
</html>
