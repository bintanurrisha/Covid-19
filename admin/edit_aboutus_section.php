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

            if(isset($_POST['aboutus_edit_btn']))
            {
                $Id = $_POST['aboutus_edit_id'];
                
                $queryaboutus_section = "SELECT * FROM about_section WHERE Id='$Id' ";
                $query_runaboutus_section = mysqli_query($connection, $queryaboutus_section);

                foreach($query_runaboutus_section as $row)
                {
                    ?>

                        <form action="code.php" method="POST" enctype='multipart/form-data'>

                            <input type="hidden" name="aboutus_edit_id" value="<?php echo $row['Id'] ?>">

                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" name="edit_aboutus_Title" value="<?php echo $row['about_title'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> Description </label>
                                <input type="text" name="edit_aboutus_text" value="<?php echo $row['about_text'] ?>" class="form-control"
                                    >
                            </div>
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="about_image" value="<?php echo $row['about_image'] ?>" class="form-control"
                                    placeholder="Upload Image">
                            </div>
                            

                            <a href="about-us-section.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="aboutus_section_updatebtn" class="btn btn-primary"> Update </button>

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