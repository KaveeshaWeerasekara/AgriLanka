<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home</title>
	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Fontawesome CSS -->
	<link href="css/all.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <?php include('../header.php'); ?>

    <header class="slider-main">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <!-- Slide One - Set the background image for this slide in the line below -->
               <div class="carousel-item active" style="background-image: url('images/officer.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h2>Welcome to AGRI LANKA</h2>
                     
                  </div>
               </div>
               <!-- Slide Two - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('images/farmer.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h2>Welcome to AGRI LANKA</h2>
                    
                  </div>
               </div>
               <!-- Slide Three - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('images/paddyfield.jpeg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h2>Welcome to AGRI LANKA</h2>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <!-- Page Content -->
    

        <!-- About Section -->
        <div class="about-main">
            <div class="row">
               <div class="col-lg-6">
                  <h2>Welcome to N & LW Lawn Care</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <h5>Our smart approach</h5>
                  <ul>
                     <li>Sed at tellus eu quam posuere mattis.</li>
                     <li>Phasellus quis erat et enim laoreet posuere ac porttitor ipsum.</li>
                     <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                     <li>Duis porttitor odio pellentesque mollis vulputate.</li>
                     <li>Quisque ac eros non ex hendrerit vehicula.</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
               </div>
               <div class="col-lg-6">
                  <img class="img-fluid rounded" src="images/about-img.jpg" alt="" />
               </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- Portfolio Section -->
        <div class="portfolio-main">
            <h2>Our Portfolio</h2>
            <div class="row">
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="images/seeds.jpg" height="300px" width="200px" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="http://localhost/form/display.php">Seeds</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="images/plants.jpg" height="300px" width="200px" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">plants</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 portfolio-item">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="#">
                           <img class="card-img-top" src="images/fertilizers.jpg" height="300px" width="200px" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Fertilizers</a>
                        </h4>
                     </div>
                  </div>
               </div>
              

        <hr>
     
    <!-- /.container -->
    <!--footer starts from here-->
    <?php include('../footer.php'); ?>
	  
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>