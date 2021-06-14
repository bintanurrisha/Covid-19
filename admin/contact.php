<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php');

?>

<div class="modal fade" id="addsection" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">messages </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- section form-->
      <form action="code.php" method="POST" enctype='multipart/form-data'>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="save__section" class="btn btn-primary">Save</button>
        </div>
      </form>
            <!--section form end-->
    </div>
  </div>
</div>


<div class="container-fluid">

<!-- Admin Profile  Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <a class="btn btn-success"style="float:right;" href="pdf.php">Genarate PDF</a>
      <h2 class="m-0 font-weight-bold text-secondary">Messages</h2>
      
    </div>


  <div class="card-body">

   <!-- registration show form database--> 
    <?php
                if(isset($_SESSION['success']) && $_SESSION['success'] !='') 
                    {
                        echo '<h2 class=" text-danger"> '.$_SESSION['success'].' </h2>';
                        unset($_SESSION['success']);
                    }
                    if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
                    {
                        echo '<h2 class=" text-danger"> '.$_SESSION['status'].' </h2>';
                        unset($_SESSION['status']);
                    }
    ?>

    <div class="table-responsive">
      <?php
                $query = "SELECT * FROM contact_form";
                $query_run = mysqli_query($connection, $query);
            ?>

     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> Id </th>
                            <th> First Name </th>
                            <th>Last Name </th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>DELETE</th>
                        </tr>
                    </thead>


<tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                           <tr>
                                <td><?php  echo $row['contact_Id']; ?></td>
                                <td><?php  echo $row['firstdName']; ?></td>
                                 <td><?php  echo $row['lastdName']; ?></td>

                                <td><?php  echo $row['fldEmail']; ?></td>

                                <td><?php  echo $row['fldPhone']; ?></td>

                                <td><?php  echo $row['fldMessage']; ?></td>
                                <td>
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="delete_contact_Id" value="<?php echo $row['contact_Id']; ?>">
                                        <button type="submit" name="delete_contact_btn" class="btn btn-danger"> DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>



                  
                </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>