<?php

$username = $_POST['username'];
$password = $_POST['passwordfield'];

$existerror = <<<TXT
<div style="max-width:1100px;margin-top:80px;margin-bottom:80px">
  <h2>Login failed, username or password doesn't exist.</h2>
</div>  
TXT;

$login_success = <<<TEXT
<div style="max-width:1100px;margin-top:80px;margin-bottom:80px">
  <h2>You are now logged in as $username.</h2>
</div>
TEXT;

$conn = new mysqli("localhost", "root", "", "electric_cars");

$sql_user = "SELECT * FROM user WHERE username='$username'";
$sql_pwd = "SELECT * FROM user WHERE `password`='$password'";
$res_user = $conn->query($sql_user);
$res_pwd = $conn->query($sql_pwd);

if (mysqli_num_rows($res_user) == 0 || mysqli_num_rows($res_pwd) == 0) {
    echo $existerror;
    header("refresh:5;url=login.php");
} else {
    echo $login_success;
    header("refresh:5;url=index.php");
}

?>
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

    <!-- Footer -->
    <?php 
      include('footer.php');
    ?>        

    <script src="js/bootstrap.bundle.min.js"></script>    
    
  </body>
</html>