<?php if(isset($_SESSION['success']) && $_SESSION['success'] != ""){ ?>


    <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php 
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    ?>
    </div>

<?php } ?>

<?php if(isset($_SESSION['error']) && $_SESSION['error'] != ""){ ?>

	 <div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    
    <?php 
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    ?>
    </div>


<?php } ?>