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

    <!-- Video Background -->
    <section
      class="bg-light text-light p-0 p-lg-0 pt-lg-0 text-center text-sm-start"
    >
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          
            <video class="background-video" autoplay loop muted playsinline>
              <source src="video/001.mp4" type="video/mp4">
            </video>
          
        </div>
      </div>
    </section>    

    <!-- Showcase Sections -->
    <section id="learn" class="p-5">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/001_carousel.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/002_carousel.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/003_carousel.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/004_carousel.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/005_carousel.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="images/006_carousel.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-md p-5">
            <h2>The future is here</h2>
            <p class="lead">
              Sales of electric cars will roar in 2022, as new models will begin flooding the market. By 2025, it is predicted that around 20% of all new cars sold on a global scale will be electric. By 2030, it will reach up to 40% of sales and by 2040, virtually every car sold in any part of the world will be electric, according to the investment bank UBS.
            </p>
            <p>
              Electric pickups are arriving, including the Ford F-150 Lightning, Rivian R1T, and GMC Hummer. Compact crossovers, which are currently the highest selling model in the U.S. market, will add key new entries too. These include the Nissan Ariya, Hyundai IONIQ 5, Kia EV6, and Toyota bZ4X, among others. No longer will EV shoppers looking beyond Tesla be faced with an array of un-aspirational small five-door hatchbacks.
            </p>
            <a href="#" class="btn btn-dark mt-3">
              <i class="bi bi-chevron-right"></i> Read More
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="learn" class="p-5 bg-dark text-light">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md p-5">
            <h2>A greener answer to the environment</h2>
            <p class="lead">
              The batteries in electric vehicles charge on power that is coming straight off the electric grid — which is itself often powered by fossil fuels. And there are questions about how energy-intensive it is to build an EV or an EV battery, versus building a comparable traditional vehicle.
            </p>
            <p>
              Experts broadly agree that electric vehicles create a lower carbon footprint over the course of their lifetime than do cars and trucks that use traditional, internal combustion engines. Last year, researchers from the universities of Cambridge, Exeter and Nijmegen in The Netherlands found that in 95% of the world, driving an electric car is better for the environment than driving a gasoline-powered car.
            </p>
            <a href="#" class="btn btn-light mt-3">
              <i class="bi bi-chevron-right"></i> Read More
            </a>
          </div>
          <div class="col-md">
            <img src="images/003_logo_electir_car.jpg" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
    </section>

    <!-- Research Centre  -->
    <section class="p-5">
      <div class="container">
        <h2 class="text-center mb-4">Electric Vehicle (IHUEV) Research Centre at International Hellenic University</h2>
        
        <div class="row g-4">
          <div class="col-md">
            <h3 class="text-center mb-4">Contact Info</h2>
            <ul class="list-group list-group-flush lead">
              <li class="list-group-item">
                <span class="fw-bold">Location:</span> Serres, Greece
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Phone:</span> +30 23210 49341
              </li>              
              <li class="list-group-item">
                <span class="fw-bold">Email:</span>
                info@ict.ihu.gr
              </li>
            </ul>
          </div>
          <div class="col-md">
            <div id="map"><img src="images/dipae.jpg" class="img-fluid" alt="" /></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php 
      include('footer.php');
    ?>        

    <script src="js/bootstrap.bundle.min.js"></script>    
    
  </body>
</html>
