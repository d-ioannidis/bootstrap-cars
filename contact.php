<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/global.css" />
    <title>Electric Cars Project</title>
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

<div class="container"> <div class=" text-center mt-5 ">
        <h1>Contact Us</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contact-form" role="form" name="contact" action="email-process.php" method="POST">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Full Name *</label> 
                                        <input id="form_fullname" type="text" name="name" class="form-control" placeholder="Please enter your fullname" required="required" data-error="Full-name is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Email *</label> 
                                        <input id="form_email" type="text" name="email" class="form-control" placeholder="Please enter your email" required="required" data-error="Email is required."> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Subject *</label> 
                                        <input id="form_subject" type="text" name="subject" class="form-control" placeholder="Message subject" required="required" data-error="Subject is required."> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> <label for="form_message">Message *</label> 
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here" rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>
                                    </div>
                                    <div style="margin-top: 30px;" class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Submit"> </div>
                                </div>
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
