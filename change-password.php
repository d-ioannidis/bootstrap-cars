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
        <h1>Change password</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                    <form name="login-form" action="change-password-process.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <label for="form_username">Username *</label> 
                                <input id="inputUsername" type="text" name="username" class="form-control" placeholder="Please enter your username" required="required" data-error="Username is required."> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <label for="form_lastname">Email *</label> 
                                <input id="inputEmail" type="text" name="email" class="form-control" placeholder="Please enter your email" required="required" data-error="Email is required."> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group"> <label for="form_firstname">Password *</label> 
                                <input id="inputNPassword" type="password" name="newpassword" class="form-control" placeholder="Please enter your password" required="required" data-error="Password is required."> </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <label for="form_lastname">Retype Password *</label> 
                                <input id="inputCPassword" type="password" name="confirmpassword" class="form-control" placeholder="Please confirm your password" required="required" data-error="Confirmation is required."> </div>
                            </div>
                        </div>                           
                        
                        <input style="margin-top: 30px;" type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Change">
                        <p><a style="text-decoration: none" href="login.php">Click here to login.</a></p>
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
