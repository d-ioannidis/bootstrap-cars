<?php 

// https://phppot.com/php/mysql-blob-using-php/
// https://stackhowto.com/how-to-display-blob-image-in-php-from-database/

  $conn = new mysqli("localhost", "root", "", "electric_cars");

  $vehicle_model = $_GET['model'];

  $model_sql = "SELECT * FROM models WHERE model='$vehicle_model'";

  $sql_result = mysqli_query($conn, $model_sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
	$row = mysqli_fetch_array($sql_result);
	header("Content-type: image/jpg");
    
  echo $row["image"];

  $conn->close();

  ?>