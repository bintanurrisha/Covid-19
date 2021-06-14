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

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM section WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="code.php" method="POST" enctype='multipart/form-data'>

                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" name="edit_title" value="<?php echo $row['title'] ?>" class="form-control"
                                    placeholder="title">
                            </div>
                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="image" value="<?php echo $row['image'] ?>" class="form-control"
                                    placeholder="Upload Image">
                            </div>
                            

                            <a href="section.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="section_updatebtn" class="btn btn-primary"> Update </button>

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