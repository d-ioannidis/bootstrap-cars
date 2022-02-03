<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/global.css" />
    <title>Electric Cars</title>

    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;            
            text-align: center;
        }
    </style>
  </head>
  <body>
    <!-- Navbar -->
    <?php 
      include('navbar.php');
    ?>

<div class="container"> <div class="text-center mt-5">
        <h1>Register</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                    <form name="login-form" action="register-process.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <label for="form_firstname">Firstname *</label> 
                                <input id="inputFirstname" type="text" name="firstname" class="form-control" placeholder="Please enter your firstname" required="required" data-error="Firstname is required."> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <label for="form_lastname">Lastname *</label> 
                                <input id="inputLastname" type="text" name="lastname" class="form-control" placeholder="Please enter your lastname" required="required" data-error="Lastname is required."> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <label for="form_email">Email *</label> 
                                <input id="inputEmail" type="text" name="email" class="form-control" placeholder="Please enter your email" required="required" data-error="Email is required."> </div>
                            </div>
                        <div class="col-md-6">
                            <div class="form-group"> <label for="form_username">Username *</label> 
                            <input id="inputUsername" type="text" name="username" class="form-control" placeholder="Please enter your username" required="required" data-error="Username is required."> </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <label for="form_email">Password *</label> 
                                <input id="inputPassword" type="password" name="passwordfield" class="form-control" placeholder="Please enter your password" required="required" data-error="Password is required."> </div>
                            </div>
                        <div class="col-md-6">
                            <div class="form-group"> <label for="form_username">Retype Password *</label> 
                            <input id="inputCPassword" type="password" name="cpasswordfield" class="form-control" placeholder="Please retype password" required="required" data-error="Retype is required."> </div>
                        </div>
                        </div>                                     
                        <div style="margin-top: 30px;" class="col-md-12"> 
                            <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Register">
                            <p><a style="text-decoration: none" href="login.php">Already have an account?</a></p>
                            <p><a style="text-decoration: none" href="change-password.php">Forgot password?</a></p> 
                        </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>


    <!-- Footer -->
    <?php 
      include('footer.php');
    ?>        

    <script src="js/bootstrap.bundle.min.js"></script>    
    
  </body>
</html>
