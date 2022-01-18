<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Budgetarian</title>

        <!-- css -->
        <link rel="stylesheet" href="<?php echo base_url('/public/css/home-page.css');?>">
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </head>
    <body class='home-page'>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Budgetarian</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse navigation" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>">Home</a>
                <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
                <a class="nav-link" href="<?php echo base_url(); ?>login">Login</a>
  
            </div>
            </div>
        </div>
        </nav>

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
    </body>
</html>