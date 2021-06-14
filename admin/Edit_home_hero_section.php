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

            if(isset($_POST['hero_edit_btn']))
            {
                $id = $_POST['hero_edit_id'];
                
                $queryhero_section = "SELECT * FROM hero_section WHERE id='$id' ";
                $query_runhero_section = mysqli_query($connection, $queryhero_section);

                foreach($query_runhero_section as $row)
                {
                    ?>

                        <form action="code.php" method="POST" enctype='multipart/form-data'>

                            <input type="hidden" name="hero_edit_id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> Sub-Title </label>
                                <input type="text" name="edit_hero_sub_title" value="<?php echo $row['hero_sub_title'] ?>" class="form-control"
                                    placeholder="sub-title">
                            </div>
                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" name="edit_hero_title" value="<?php echo $row['hero_title'] ?>" class="form-control"
                                    placeholder="title">
                            </div>
                            <div class="form-group">
                                <label> Title-Span </label>
                                <input type="text" name="edit_hero_title_span" value="<?php echo $row['hero_title_span'] ?>" class="form-control"
                                    placeholder="Title-Span">
                            </div>
                            <div class="form-group">
                                <label> description </label>
                                <input type="text" name="edit_hero_Description" value="<?php echo $row['hero_Description'] ?>" class="form-control"
                                    placeholder="description">
                            </div>
                            <div class="form-group">
                                <label> Button </label>
                                <input type="text" name="edit_hero_Button" value="<?php echo $row['hero_Button'] ?>" class="form-control"
                                    placeholder="Button">
                            </div>
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="hero_image" value="<?php echo $row['hero_image'] ?>" class="form-control"
                                    placeholder="Upload Image">
                            </div>
                            

                            <a href="home_hero_section.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="hero_section_updatebtn" class="btn btn-primary"> Update </button>

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