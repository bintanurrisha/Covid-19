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

            if(isset($_POST['symtoms_edit_btn']))
            {
                $Symtoms_id = $_POST['symtoms_edit_id'];
                
                $querysymtoms_section = "SELECT * FROM symtoms_section WHERE Symtoms_id='$Symtoms_id' ";
                $query_runsymtoms_section = mysqli_query($connection, $querysymtoms_section);

                foreach($query_runsymtoms_section as $row)
                {
                    ?>

                        <form action="code.php" method="POST" enctype='multipart/form-data'>

                            <input type="hidden" name="Symtoms_edit_id" value="<?php echo $row['Symtoms_id'] ?>">

                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" name="edit_Symtoms_title" value="<?php echo $row['Symtoms_Title'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> Description </label>
                                <input type="text" name="edit_Symtoms_description" value="<?php echo $row['Symtoms_description'] ?>" class="form-control"
                                    >
                            </div>
                            <div class="form-group">
                            <label> Symtoms-Title-one </label>
                                <input type="text" name="edit_Symtoms_Title_one" value="<?php echo $row['Symtoms_Title_one'] ?>" class="form-control"
                                    >
                            </div>
                            <div class="form-group">
                                <label> Symtoms-description-one </label>
                                <input type="text" name="edit_Symtoms_description_one" value="<?php echo $row['Symtoms_description_one'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> Symtoms-Title-two </label>
                                <input type="text" name="edit_Symtoms_Title_two" value="<?php echo $row['Symtoms_Title_two'] ?>" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label> Symtoms-description-two </label>
                                <input type="text" name="edit_Symtoms_description_two" value="<?php echo $row['Symtoms_description_two'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label> Symtoms-Title-three </label>
                                <input type="text" name="edit_Symtoms_Title_three" value="<?php echo $row['Symtoms_Title_three'] ?>" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label> Symtoms-description-three </label>
                                <input type="text" name="edit_Symtoms_description_three" value="<?php echo $row['Symtoms_description_three'] ?>" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="Symtoms_image" value="<?php echo $row['Symtoms_image'] ?>" class="form-control"
                                    placeholder="Upload Image">
                            </div>
                            

                            <a href="home_Symtoms_section.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="Symtoms_section_updatebtn" class="btn btn-primary"> Update </button>

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