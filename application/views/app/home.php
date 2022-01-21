<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class='home-page'>
    <?php $this->load->view('templates/navbar.php'); ?>

    <div class="content">
        <div class="image-design">
            <img src="<?php echo base_url("public/images/budget.png"); ?>" alt="" class="home-des">
            <img src="<?php echo base_url("public/images/money (1).png"); ?>" alt="" class="home-des">
            <img src="<?php echo base_url("public/images/money.png"); ?>" alt="" class="home-des">
            <img src="<?php echo base_url("public/images/save-money.png"); ?>" alt="" class="home-des">
        </div>
        <div class="direction">
            <img src="<?php echo base_url("public/images/right-drawn-arrow.png"); ?>" alt="" class="home-des">
            

            <a href="<?php  echo base_url();?>signup" class="btn btn-info started">Let's Get Starded</a>
        </div>
        
    </div>
</div>
