<!DOCTYPE html>
<html lang="en.US">

<head>
	<meta charset="UTF-8" />
	<title>Covid 19 Website</title>

	<!--pavicon-->
  	<link href="css/slick.css" rel="stylesheet">
    	<link href="css/slick-theme.css" rel="stylesheet">
		<link href="css/uikit.min.css" rel="stylesheet">
	<link href="css/font/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!--font-awesome-->

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!--bootstrap.css-->

	<!--style.css-->
	<link href="css/style.css" rel="stylesheet">
	<!--style.css-->
<link rel="shortcut icon" type="image/x-icon" href="images/coronafaviconico.jpg">

</head>

<body>
	<!--navbar section-->
	<!--navbar section-->
  <nav class="navbar navbar-dark  navbar-expand-md " uk-sticky="top: 200; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up" >
    <div class="container">
      <a href="#" class="navbar-brand">
        Covid-19
      </a>
      <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ">
            <a href="index.php" class="nav-link ">Home</a>
          </li>
          <li class="nav-item active">
            <a href="about.php" class="nav-link">About Corona</a>
          </li>
          <li class="nav-item ">
            <a href="covid_19 update.php" class="nav-link">Covid-19 Update</a>
          </li>

          <li class="nav-item ">
            <a href="contuct.php" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--header section-->
<section class="aboutHead">
  <div class="about text-center text-light ">
    <h1 class="text-danger display-4 font-weight-bold ">About Corona</h1>
    <p class="lead text-dark">The outbreak of COVID-19</p>
  </div>
</section>
<!--about  section-->
<section id="do" class="py-5">
<div class="container">
  <div class="row">
                      <?php

                        require 'admin/database/dbconfig.php';
                        $query = "SELECT * FROM about_section";
                        $query_run = mysqli_query($connection, $query);
                        $check=mysqli_num_rows($query_run) > 0;
                        if($check)        
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                      ?>
    <div class="col-md-6 align-self-center">
      <h1 class=""><?php  echo $row['about_title']; ?></h1>
      <p class="lead text-secondary "><?php  echo $row['about_text']; ?></p>
    </div>
    <div class="col-md-6 text ">
       <img class="img-fluid " src="admin/upload/<?php echo $row['about_image']; ?>" width="450px;" height="450px;" alt="About image">
    </div>
    <?php
                               
                            }
                        }
                        else{
                            echo "No record found";
                        }
                ?>
  </div>
</div>
</section>



<!--ask question -->
<section>
<div id="accordiam1" role="tablist" class="py-5 bg-dark ">
  <div class="container">
    <h2 class="text-center text-light pb-4">Frequently Asked Questions</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-3 ">
          <div class="card-header" role="tab">
            <h5 class="mb-0">
              <div>
               <a data-toggle="collapse" href="#collapse1"  class="text-dark">What causes COVID-19?</a>
              </div>
            </h5>
          </div>
          <div id="collapse1" class="collapse " data-parent="#accordiam1">
            <div class="card-body">
              <p class="lead">COVID-19 is caused by infection with the severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) virus strain.!</p>
            </div>
          </div>
        </div>

          <div class="card mb-3">
            <div class="card-header" role="tab">
              <h5 class="mb-0">
                <div data-toggle="collapse" href="#collapse2">
                <a href="#collapse2" class="text-dark">What is the coronavirus disease?</a>
                </div>
              </h5>
            </div>
            <div id="collapse2" class="collapse" data-parent="#accordiam1">
              <div class="card-body">
                <p class="lead">Coronaviruses are a large family of respiratory viruses, known to cause illness ranging from the common cold to more severe illnesses such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS).

The current outbreak has been caused by a strain of coronavirus that had not previously detected anywhere in the world before the outbreak was reported in Wuhan, China in December 2019.p>
              </div>
            </div>
          </div>


          <div class="card mb-3">
            <div class="card-header" role="tab">
              <h5 class="mb-0">
                <div data-toggle="collapse" href="#collapse3">
                <a href="#collapse3" class="text-dark">Can the coronavirus spread via feces?</a>
                </div>
              </h5>
            </div>
            <div id="collapse3" class="collapse" data-parent="#accordiam1">
              <div class="card-body">
                <p class="lead">There is some evidence that COVID-19 infection may lead to intestinal infection and be present in faeces. However, to date only one study has cultured the COVID-19 virus from a single stool specimen. There have been no reports of faecal−oral transmission of the COVID-19 virus to date.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-3 ">
            <div class="card-header" role="tab">
              <h5 class="mb-0">
                <div data-toggle="collapse" href="#collapse4">

                <a href="#collapse4" class="text-dark">Does heat prevent COVID-19?</a>
                </div>
              </h5>
            </div>
            <div id="collapse4" class="collapse" data-parent="#accordiam1">
              <div class="card-body">
                <p class="lead">FACT: Exposing yourself to the sun or temperatures higher than 25°C DOES NOT protect you from COVID-19. You can catch COVID-19, no matter how sunny or hot the weather is. Countries with hot weather have reported cases of COVID-19.</p>
              </div>
            </div>
          </div>

            <div class="card mb-3">
              <div class="card-header" role="tab">
                <h5 class="mb-0">
                  <div data-toggle="collapse" href="#collapse5">
                  <a href="#collapse5" class="text-dark">Can COVID-19 spread in hot and humid climates?</a>
                  </div>
                </h5>
              </div>
              <div id="collapse5" class="collapse" data-parent="#accordiam1">
                <div class="card-body">
                  <p class="lead">The best way to protect yourself against COVID-19 is by maintaining physical distance of at least 1 metre from others and frequently cleaning your hands. By doing this you eliminate viruses that may be on your hands and avoid infection that could occur by then touching your eyes, mouth, and nose</p>
                </div>
              </div>
            </div>


            <div class="card mb-3">
              <div class="card-header" role="tab">
                <h5 class="mb-0">
                  <div data-toggle="collapse" href="#collapse6">
                  <a href="#collapse6" class="text-dark">Is COVID-19 caused by a virus or a bacteria?</a>
                  </div>
                </h5>
              </div>
              <div id="collapse6" class="collapse" data-parent="#accordiam1">
                <div class="card-body">
                  <p class="lead">The coronavirus disease (COVID-19) is caused by a virus, NOT by bacteria.</p>
                </div>
              </div>
            </div>
          </div>
      </div>
      </div>

      </div>



  </section>
	<!-- Copyright -->
   <section id="copyright" class="text-center py-3 ">
     <div class="container">
       <div class="row">
         <div class="col">
           <p class="lead mb-0">Copyright 2021 &copy; Risha</p>
         </div>
       </div>
     </div>
   </section>

	<!--bootstrap.js-->

	<!--custom.js-->
	<script src="js/proper.min.js"></script>

	<!--navbar.js-->
	<script src="js/jqury.js"></script>
	<!--jquary.js-->
<script src="js/bootstrap.min.js"></script>
	<script src="js/uikit.min.js"></script>
	<script src="js/uikit-icons.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script>
    $('.slider').slick({
      infinite: true,
      slideToShow: 1,
      slideToScroll: 1
    });
  </script>
</body>

</html>
