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

      $model = $_POST['model'];

      $conn = new mysqli("localhost", "root", "", "electric_cars");
    
      $model_sql = "SELECT * FROM models WHERE model='$model'";
    
      $sql_result = mysqli_query($conn, $model_sql) or die("<b>Error:</b> Problem on Retrieving Data<br/>" . mysqli_error($conn));
      $row = mysqli_fetch_array($sql_result);
        
      $brand = $row['brand'];
      $accel = $row['acceleration'];
      $speed = $row['top_speed'];
      $range = $row['car_range'];
      $eff = $row['efficiency'];
      $price = $row['price'];
      $rapid_charge = $row['rapid_charge'];
      $bodystyle = $row['bodystyle'];
      $seats = $row['seats'];
      $fast_charge = $row['fast_charge'];
      $powertrain = $row['powertrain'];
      $plug_type = $row['plug_type'];

      $conn->close();
    ?>

<?php 

  $result = <<<TXT
  <section id="learn" class="p-5">
    <div class="container">
  
      <div class="row align-items-center justify-content-between">
        <div class="col-md">
          <img src="imageView.php?model=$model" class="img-fluid"/>                
        </div>
        <div class="col-md p-5">            
          <h2>$brand $model</h2>
          <p>
          Acceleration: $accel Km/h
          <br>
          Speed: $speed Km/h
          <br>
          Range: $range Km
          <br>
          Efficiency: $eff Wh/km
          <br>
          Bodystyle: $bodystyle
          <br>
          Rapid Charging? $rapid_charge
          <br>
          Seats: $seats
          <br>
          Fast Charge: $fast_charge Km/h
          <br>
          Powertrain: $powertrain
          <br>
          Plug Type: $plug_type
          <br>
          Price: $price €
          </p>
        </div>
      </div>
    </div>
  </section>
  TXT;

echo "$result";
   
?>
<!-- Footer -->
<div class="footer">
      <footer class="p-5 bg-light text-white text-center position-relative">
        <div class="container">
          <p class="lead text-dark">Copyright &copy; 2022 Dimitrios Ioannidis</p>
          
          <div class="hstack gap-1 position-absolute bottom-0 start-0 p-5">
            <div class="bg-light"><a href="#" onclick="return false;"><i class="bi bi-facebook h1"></i></a></div>
            <div class="bg-light"><a href="#" onclick="return false;"><i class="bi bi-github h1"></i></a></div>    
            <div class="bg-light"><a href="#" onclick="return false;"><i class="bi bi-linkedin h1"></i></a></div>      
          </div>

          <a href="#" class="position-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
          </a>
        </div>     
      </footer>
  </div>  

    <script src="js/bootstrap.bundle.min.js"></script>    
    
  </body>
</html>