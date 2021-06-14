<?php
include('security.php');
include('includes/header.php'); 
include('includes/navbar.php');

?>
<div class="container-fluid">

    <!-- register edit -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Section </h6>
        </div>
        <div class="card-body">
        <?php

            if(isset($_POST['prevent_edit_btn']))
            {
                $Prevent_id = $_POST['prevent_edit_id'];
                
                $queryprevent = "SELECT * FROM prevent_section WHERE Prevent_id='$Prevent_id' ";
                $query_runprevent = mysqli_query($connection, $queryprevent);

                foreach($query_runprevent as $row)
                {
                    ?>

                        <form action="code.php" method="POST" enctype='multipart/form-data'>

                            <input type="hidden" name="Prevent_edit_id" value="<?php echo $row['Prevent_id'] ?>">

                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" name="edit_Prevent_title" value="<?php echo $row['Prevent_title'] ?>" class="form-control"
                                    placeholder="title">
                            </div>
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="Prevent_image" value="<?php echo $row['Prevent_image'] ?>" class="form-control"
                                    placeholder="Upload Image">
                            </div>
                            

                            <a href="prevent_section.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="Prevent_section_updatebtn" class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>
<?php
include('includes/scripts.php');
include('includes/footer.php');
?>