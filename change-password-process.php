<?php
$username = $_POST['username'];
$email = $_POST['email'];
$newpwd = $_POST['newpassword'];
$confirmpwd= $_POST['confirmpassword'];

$emailerror = <<<TXT
<div style="max-width:1100px;margin-top:80px;margin-bottom:80px">  
  <h2>Email address given is invalid or doesn't exist.</h2>  
</div>
TXT;

$change_success = <<<TEXT
<div style="max-width:1100px;margin-top:80px;margin-bottom:80px">
  <h2>Your password change was successful.</h2>
  <p><a href="login.php">Click here to log in.</a></p>
</div>
TEXT;

$existerror = <<<TXT
<div style="max-width:1100px;margin-top:80px;margin-bottom:80px">  
  <h2>Can't change password, email or user isn't registered. </h2>  
</div>
TXT;

$passworderror = <<<TXT
  <div style="max-width:1100px;margin-top:80px;margin-bottom:80px">  
    <h2>Invalid password. Make sure your password complies with the requirements shown below:</h2>
    <ul>
      <li>Must include at least 8 characters.</li>
      <li>At least 1 lowercase character.</li>
      <li>At least 1 uppercase character.</li>
      <li>At least 1 numeric character.</li>
      <li>At least 1 special character.</li>
      <li>Make sure both password fields are equal.</li>
    </ul>  
  </div>
  TXT;

$conn = new mysqli("localhost", "root", "", "electric_cars");

$sql_username = "SELECT * FROM user WHERE username='$username'";
$sql_email = "SELECT * FROM user WHERE email='$email'";
$res_email = $conn->query($sql_email);
$res_username = $conn->query($sql_username);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo $emailerror;
  header("refresh:5;url=change-password.php");
}  
else if (!mysqli_num_rows($res_username) > 0 || !mysqli_num_rows($res_email) > 0)
  {
    echo $existerror;
    header("refresh:5;url=change-password.php");
  }
else if (mb_strlen($newpwd) <= 8 
  || !preg_match("#[0-9]+#",$newpwd) 
  || !preg_match("#[A-Z]+#",$newpwd) 
  || !preg_match("#[a-z]+#",$newpwd) 
  || !preg_match("#[\W]+#", $newpwd)
  || $newpwd != $confirmpwd) 
  {
      echo $passworderror;
      header("refresh:5;url=change-password.php");
 } else {
      echo $change_success;
      $update_sql = "UPDATE user SET `password`='$newpwd' WHERE username='$username'";
      
      if ($conn->query($update_sql) === TRUE) {
        //echo "Record changed successfully";
      } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
      }
  }

$conn->close();
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

