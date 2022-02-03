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
        <h1>Login</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                    <form name="login-form" action="login-process.php" method="POST">
                        <div class="row mb-3">
                            <label for="inputUsername" class="col-sm-3 col-form-label">Username: *</label>
                            <div class="col-sm-10">
                            <input type="username" name="username" class="form-control" id="inputUsername" placeholder="Please enter your Username" required="required" data-error="Username is required.">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Password: *</label>
                            <div class="col-sm-10">
                            <input type="password" name="passwordfield" class="form-control" id="inputPassword" placeholder="Please enter your Password" required="required" data-error="Password is required.">
                            </div>
                        </div>                       
                        
                        <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Log in">
                        <p><a style="text-decoration: none" href="register.php">Don't have an account?</a></p>
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
