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
  <body>
    <!-- Navbar -->
    <?php 
      include('navbar.php');
    ?>

    <!-- Image Background -->
    <section
      class="bg-light text-light p-0 p-lg-0 pt-lg-0 text-center text-sm-start"
    >
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          
        <img src="images/006_logo_electir_car.jpg" class="img-fluid" alt="" />
          
        </div>
      </div>
    </section>  
    
    <!-- Search Box -->
    <section class="bg-dark text-light p-4">
      <div class="container">
        <div class="d-md-flex justify-content-between align-items-center">
          <h3 class="mb-3 mb-md-0">Search for a car model</h3>
          <form action="explore-process.php" method="POST">
          <div class="row">
            <div class="col-md-8">
              <input type="text" name="model" class="form-control" placeholder="Car model...">
            </div>
            <div class="col-md-4">
              <input type="submit" class="form-control btn btn-success" value="Submit">
            </div>
          </div>
        </form>
        </div>
      </div>
    </section>

    <!-- Showcase Sections -->
    <section id="learn" class="p-5">
      <div class="container">

        <div class="row align-items-center justify-content-between">
          <div class="col-md p-5">            
              <div class='tableauPlaceholder' id='viz1642772846694' style='position: relative'>
                <object class='tableauViz'  style='display:none;'>
                <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F'/> 
                <param name='embed_code_version' value='3'/> 
                <param name='site_root' value=''/>
                <param name='name' value='ElectricVehicleAnalysis&#47;ElectricVehicleAnalysis'/>
                <param name='tabs' value='no'/>
                <param name='toolbar' value='yes'/>
                <param name='animate_transition' value='yes'/>
                <param name='display_static_image' value='yes'/>
                <param name='display_spinner' value='yes'/>
                <param name='display_overlay' value='yes'/>
                <param name='display_count' value='yes'/>
                <param name='language' value='en-US'/>
              </object>
            </div>                
              <script type='text/javascript'>                    
                var divElement = document.getElementById('viz1642772846694');                    
                var vizElement = divElement.getElementsByTagName('object')[0];                    
                vizElement.style.width='1016px';vizElement.style.height='991px';                    
                var scriptElement = document.createElement('script');                    
                scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    
                vizElement.parentNode.insertBefore(scriptElement, vizElement);                
              </script>
          </div>
        </div>
      </div>
    </section>
    
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
