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

            if(isset($_POST['aboutcorona_edit_btn']))
            {
                $aboutcorona_id = $_POST['aboutcorona_edit_id'];
                
                $queryaboutcorona_section = "SELECT * FROM aboutcorona_section WHERE aboutcorona_id='$aboutcorona_id' ";
                $query_runaboutcorona_section = mysqli_query($connection, $queryaboutcorona_section);

                foreach($query_runaboutcorona_section as $row)
                {
                    ?>

                        <form action="code.php" method="POST" enctype='multipart/form-data'>

                            <input type="hidden" name="aboutcorona_edit_id" value="<?php echo $row['aboutcorona_id'] ?>">

                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" name="edit_aboutcorona_title" value="<?php echo $row['aboutcorona_title'] ?>" class="form-control"
                                    placeholder="title">
                            </div>
                            <div class="form-group">
                                <label> Description </label>
                                <input type="text" name="edit_aboutcorona_Description" value="<?php echo $row['aboutcorona_Description'] ?>" class="form-control"
                                    placeholder="title">
                            </div>
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="aboutcorona_image" value="<?php echo $row['aboutcorona_image'] ?>" class="form-control"
                                    placeholder="Upload Image">
                            </div>
                            

                            <a href="home-About Corona Virus.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="aboutcorona_section_updatebtn" class="btn btn-primary"> Update </button>

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