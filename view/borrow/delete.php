<?php
include 'view/layout/nav_2.php';
?>
<div class="container">
    <div class="col-md-12">
        <h1>Are you sure you want to delete this borrow?</h1>
        <h3><?php echo $id; ?></h3>
        <form  method="post">
            <div class="form-group">
                <input type="submit" value="Delete" class="btn btn-danger"/>
                <a class="btn btn-default" href="index.php">Cancel</a>
            </div>
        </form>
    </div>
</div>