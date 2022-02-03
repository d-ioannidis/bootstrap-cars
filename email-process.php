<?php

  $name = $_POST['name'];
  $email = $_POST['email'];

  $text = <<<TEXT
  <div style="max-width:1100px;margin-top:80px;margin-bottom:80px">
  <h2>Hello, $name!</h2>
  <h2>Your contact form has been submitted.</h2>
  <p>We will be in touch with you soon.</p>
  </div>
  TEXT;

  $errormessage = <<<TXT
  <div style="max-width:1100px;margin-top:80px;margin-bottom:80px">  
    <h2>Oh no! The email couldn't be sent. Either the email address given is invalid or doesn't exist.</h2>  
  </div>
  TXT;

  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $to = 'info@electric-cars.com';
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: " . $email . "\r\n";

    $conn = new mysqli("localhost", "root", "", "electric_cars");

    $sql = "INSERT INTO contact (`name`, email, `subject`, `message`)
    VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
      //echo "New record created successfully";
    } else {
      //echo "Error: " . $sql . "<br>" . $conn->error;
    }

    /* check if server is alive */
    /*
    if ($conn->ping()) {
        printf ("Our connection is ok!\n");
    } else {
        printf ("Error: %s\n", $mysqli->error);
    }
    */

    /* close connection */
    $conn->close();
  }

    if (@mail($to, $subject, $message, $headers)) {
        echo $text;
    } else {
        echo $errormessage;
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
  </head>

  <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;            
            text-align: center;
        }
    </style>
  <body>
    <!-- Navbar -->
    <?php 
      include('navbar.php');
    ?>

    <!--Footer-->
    <?php 
      include('footer.php');
    ?>
    
  </body>
</html>