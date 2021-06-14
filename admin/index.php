<?php
session_start();
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php'); 

?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Total Registered Admin -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admin</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

             <?php
                
                            $query = "SELECT register_id FROM register ORDER BY register_id";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4> Total Admin: '.$row.'</h4>';
                        ?>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    






  <?php
include('includes/scripts.php');

?>