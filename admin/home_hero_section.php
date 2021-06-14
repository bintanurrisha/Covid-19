<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php');

?>

<div class="modal fade" id="addsection" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <!-- section form-->
      <form action="code.php" method="POST" enctype='multipart/form-data'>

        <div class="modal-body">

            <div class="form-group">
                <label> Sub-Title </label>
                <input type="text" name="hero_sub_title" class="form-control" placeholder="Sub-Title " required>
            </div>
            
            <div class="form-group">
                <label> Title </label>
                <input type="text" name="hero_title" class="form-control" placeholder="Title " required>
            </div>
            <div class="form-group">
                <label> Title-Span </label>
                <input type="text" name="hero_title_span" class="form-control" placeholder="Title-span " required>
            </div>
            <div class="form-group">
                <label> Description </label>
                <input type="text" name="hero_Description" class="form-control" placeholder="Description " required>
            </div>
            <div class="form-group">
                <label> Button </label>
                <input type="text" name="hero_Button" class="form-control" placeholder="Button " required>
            </div>
            <div class="form-group">
                <label> Upload Image </label>
                <input type="file" name="hero_image" id="hero_image" class="form-control"required >
            </div>
            

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="save_hero_section" class="btn btn-primary">Save</button>
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
      <h6 class="m-0 font-weight-bold text-primary">Hero_section
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addsection">
                Add 
              </button>
      </h6>
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
                $query = "SELECT * FROM hero_section";
                $query_run = mysqli_query($connection, $query);
            ?>

     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> id </th>
                            <th> Sub-Title </th>
                            <th> Title </th>
                            <th> Title-Span </th>
                            <th> description </th>
                            <th> Button </th>
                            <th>Image </th>
                            <th>EDIT</th>
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
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['hero_sub_title']; ?></td>
                                <td><?php  echo $row['hero_title']; ?></td>
                                <td><?php  echo $row['hero_title_span']; ?></td>
                                <td><?php  echo $row['hero_Description']; ?></td>
                                <td><?php  echo $row['hero_Button']; ?></td>
                                <td><?php echo '<img src="upload/'.$row['hero_image'].'"  width="100px;" height="100px ;" alt="image" >'?> </td>
                                <td>
                                    <form action="Edit_home_hero_section.php" method="post">
                                        <input type="hidden" name="hero_edit_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="hero_edit_btn" class="btn btn-primary"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="hero_delete_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="hero_delete_btn" class="btn btn-danger"> DELETE</button>
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