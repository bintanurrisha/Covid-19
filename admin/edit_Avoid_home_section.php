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

            if(isset($_POST['Avoid_edit_btn']))
            {
                $Avoid_id = $_POST['Avoid_edit_id'];
                
                $queryAvoid_section = "SELECT * FROM Avoid_section WHERE Avoid_id='$Avoid_id' ";
                $query_runAvoid_section = mysqli_query($connection, $queryAvoid_section);

                foreach($query_runAvoid_section as $row)
                {
                    ?>

                        <form action="code.php" method="POST" enctype='multipart/form-data'>

                            <input type="hidden" name="avoid_edit_id" value="<?php echo $row['Avoid_id'] ?>">

                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" name="edit_Avoid_Title" value="<?php echo $row['Avoid_Title'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> Description </label>
                                <input type="text" name="edit_Avoid_description" value="<?php echo $row['Avoid_description'] ?>" class="form-control"
                                    >
                            </div>
                            <div class="form-group">
                            <label> span_1 </label>
                                <input type="text" name="edit_Avoid_span_1" value="<?php echo $row['Avoid_span_1'] ?>" class="form-control"
                                    >
                            </div>
                            <div class="form-group">
                                <label> span_2</label>
                                <input type="text" name="edit_Avoid_span_2" value="<?php echo $row['Avoid_span_2'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> span_3</label>
                                <input type="text" name="edit_Avoid_span_3" value="<?php echo $row['Avoid_span_3'] ?>" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label> span_4 </label>
                                <input type="text" name="edit_Avoid_span_4" value="<?php echo $row['Avoid_span_4'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="Avoid_image" value="<?php echo $row['Avoid_image'] ?>" class="form-control"
                                    placeholder="Upload Image">
                            </div>
                            

                            <a href="Avoid_home_section.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="Avoid_section_updatebtn" class="btn btn-primary"> Update </button>

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