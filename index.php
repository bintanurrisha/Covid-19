<!DOCTYPE html>
<html lang="en.US">

<head>
	<meta charset="UTF-8" />
	<title>Covid 19 Website</title>

	<!--pavicon-->
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
          <li class="nav-item active ">
            <a href="index.php" class="nav-link ">Home</a>
          </li>
          <li class="nav-item ">
            <a href="about.php" class="nav-link">About Corona</a>
          </li>
          <li class="nav-item">
            <a href="covid_19 update.php" class="nav-link">Covid-19 Update</a>
          </li>

          <li class="nav-item">
            <a href="contuct.php" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--header section-->
   <!---------------------------------

			 home hero section start

	---------------------------------------->
	<section id="home-section" class="text-left text-light py-5">
		<div class="primary-overlay">
			<div class="container">
				<div class="row">
                        <?php

                        require 'admin/database/dbconfig.php';
                        $query = "SELECT * FROM hero_section";
                        $query_run = mysqli_query($connection, $query);
                        $check=mysqli_num_rows($query_run) > 0;
                        if($check)        
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                        ?>
                        <div class="col-lg-6">
                            <h4 class="text-danger pt-5 "><?php  echo $row['hero_sub_title']; ?></h4>
                            <h1 class="display-4 font-weight-bold"><?php  echo $row['hero_title']; ?> <span style="color:#CE2C28;"><?php  echo $row['hero_title_span']; ?></span></h1>
                            <p class="text-secondary"><?php  echo $row['hero_Description']; ?></p>
                            <a href="covid_19 update.php"  class="btn btn-danger btn-lg"><?php  echo $row['hero_Button']; ?></a>
                        </div>
                        <div class="col-lg-6 home-bg-img">
                            <div>
                                
                                <img class="img-fluid d-none d-lg-block" src="admin/upload/<?php echo $row['hero_image']; ?>" width="450px;" height="450px;" alt="Hero image">

                            </div>
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
		</div>

	</section>



    <!---------------------------------

			 home hero section end

	---------------------------------------->

    <!--------------------------------------

			 About Section Start From here

	---------------------------------------->



     <section id="about">
        
        <div class="container about-us py-5" >
            <div class="row">
                <?php

                    require 'admin/database/dbconfig.php';
                     $query = "SELECT * FROM aboutcorona_section";
                $query_run = mysqli_query($connection, $query);
                $check=mysqli_num_rows($query_run) > 0;
                 if($check)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                                ?>
                                <div class="col-lg-6 col-md-6 text-center">
                    <div class="" style="border: 0px solid;" >
                                  <img class="mx-auto d-block" src="admin/upload/<?php echo $row['aboutcorona_image']; ?>" width="450px;" height="450px;" alt="Card image cap">
                                  </div>
                </div>

                <div class="col-lg-6  col-md-6 col-12 about-texts">
                    <div class=""  >
                    <span>About Corona Virus</span>
                    <h1 class="card-text"><?php  echo $row['aboutcorona_title']; ?></h1>
                    <p class="card-text"><?php  echo $row['aboutcorona_Description']; ?></p>
                    <a href="about.php">Learn More</a>
                                  </div>
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

  <!--------------------------------------

       Spread Section Start From here 
       
    ---------------------------------------->
    <section id="sparde">
        <div class="text-center title">
            <p>Contagion</p>
            <h4>How To Spread Corona Viruses?</h4>
        </div>
        <div class="container py-5" >
            <div class="row">
                <?php

                    require 'admin/database/dbconfig.php';
                     $query = "SELECT * FROM section";
                $query_run = mysqli_query($connection, $query);
                $check=mysqli_num_rows($query_run) > 0;
                 if($check)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                                ?>
                                <div class="col-md-3 text-center">
                    <div class="card" style="border: 0px solid;" >
                                  <img class="mx-auto d-block" src="admin/upload/<?php echo $row['image']; ?>" width="150px;" height="150px;" alt="Card image cap">

                <div class="card-body">

         <p class="card-text"><?php  echo $row['title']; ?></p>
            </div>
                </div>
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

    <!--------------------------------------

       Symptons Section Start From here 
       
    ---------------------------------------->
    <section id="sysm">
        <div class="container">
            <div class="row">
                     <?php

                        require 'admin/database/dbconfig.php';
                        $query = "SELECT * FROM symtoms_section";
                        $query_run = mysqli_query($connection, $query);
                        $check=mysqli_num_rows($query_run) > 0;
                        if($check)        
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                    ?>
                <div class="col-lg 6 col-md-12 col-12 sysm-main-text">
                    <span><?php  echo $row['Symtoms_Title']; ?></span>
                    <h4><?php  echo $row['Symtoms_description']; ?></h4>
                    <ul>
                        <div class="cards">
                            <li><?php  echo $row['Symtoms_Title_one']; ?></li>
                            <p><?php  echo $row['Symtoms_description_one']; ?></p>
                        </div>
                        <div class="cards-2">
                            <li><?php  echo $row['Symtoms_Title_two']; ?></li>
                            <p><?php  echo $row['Symtoms_description_two']; ?></p>
                        </div>
                        <div class="cards">
                            <li><?php  echo $row['Symtoms_Title_three']; ?></li>
                            <p><?php  echo $row['Symtoms_description_three']; ?></p>
                        </div>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 col-12 sysm-bg">
                    <img class="img-fluid d-none d-lg-block" src="admin/upload/<?php echo $row['Symtoms_image']; ?>" width="450px;" height="450px;" alt="Hero image">
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

    <!---------------------------------

			 home Symptons section end

	---------------------------------------->
    <!--------------------------------------

       Map Section Start From here 
       
    ---------------------------------------->
    <section id="maps">
        <div class="text-center title maos">
            <p>Statistics</p>
            <h4>Corona Virus overview</h4>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-lg-6  col-md-12 col-12 map-img">
                    <img src="images/map.png" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    
                    <div class="world" id="Worldwide">
                        <h1>Worldwide</h1>
                        <hr>
                        <div class="flex-card">
                            <div class="con ">
                                <h1>Confirmed</h1>
                                <h5 id="TotalConfirmed" class="total_cases">0</h5>
                            </div>
                            <div class="rev">
                                <h1>Recovered</h1>
                                <h2 ></h2>
                               <h5 id="TotalRecovered" class="recovered">0</h5>
                            </div>
                            <div class="dea">
                                <h1>Deaths
                                </h1>
                                <h2 id="globdo"></h2>
                                <h5 id="TotalDeaths" class="deaths">0</h5>
                            </div>
                        </div>
                        <br>
                        <br>
                        <a href="covid_19 update.php" class="btn btn-danger btn-lg ">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------------------

       Preventation Section Start From here 
       
    ---------------------------------------->
    <section id="preb">
        <div class="text-center title">
            <p>Preventions</p>
            <h4>To Prevent The Spread <br>
                Of COVID-19
            </h4>
        </div>
       
     <div class="container py-5" >
            <div class="row">
                <?php

                    require 'admin/database/dbconfig.php';
                     $query = "SELECT * FROM prevent_section";
                $query_run = mysqli_query($connection, $query);
                $check=mysqli_num_rows($query_run) > 0;
                 if($check)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                                ?>
                                <div class="col-md-3 text-center">
                    <div class="card" style="border: 0px solid;" >
                                  <img class="mx-auto d-block" src="admin/upload/<?php echo $row['Prevent_image']; ?>" width="150px;" height="150px;" alt="image">

                <div class="card-body">

         <p class="card-text"><?php  echo $row['Prevent_title']; ?></p>
            </div>
                </div>
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

<!----------------------------

			 avoid_close_contact Section Start From here

	 ---------------------------------------->


     <section id="avoid_close_contact">
			 <div class="container avoid_close_contact py-5">
					 <div class="row">
                      <?php

                        require 'admin/database/dbconfig.php';
                        $query = "SELECT * FROM Avoid_section";
                        $query_run = mysqli_query($connection, $query);
                        $check=mysqli_num_rows($query_run) > 0;
                        if($check)        
                            {
                                while($row = mysqli_fetch_assoc($query_run))
                                {
                        ?>
							 <div class="col-lg-6 col-md-12 col-12 close_contact">
                                <img class="img-fluid d-none d-lg-block" src="admin/upload/<?php echo $row['Avoid_image']; ?>" width="450px;" height="450px;" alt="Hero image">
							 </div>
							 <div class="col-lg-6  col-md-12 col-12 about-texts">
									 <span><?php  echo $row['Avoid_Title']; ?></span>
									 <h1><?php  echo $row['Avoid_description']; ?></h1>
									 <p><span1 style="color:#CE2C28;"><?php  echo $row['Avoid_span_1']; ?></span1> <?php  echo $row['Avoid_span_2']; ?>
                                     <span1 style="color:#CE2C28;"><?php  echo $row['Avoid_span_3']; ?></span1> <?php  echo $row['Avoid_span_4']; ?></p>
									 
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
    <script type="text/javascript">
     fetch('https://api.covid19api.com/world/total')
    .then((response)=>{
        return response.json();
    })
    .then((data)=>{
    document.getElementById("TotalConfirmed").innerHTML = data.TotalConfirmed;
    document.getElementById("TotalDeaths").innerHTML = data.TotalDeaths;
    document.getElementById("TotalRecovered").innerHTML = data.TotalRecovered;
    })
    </script>

</body>

</html>
