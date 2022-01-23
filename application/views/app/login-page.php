    <link rel="stylesheet" href="<?php echo base_url('/public/css/login-page.css');?>">
    </head>
<body>

<div class="login-page">
    <nav class="login-nav">
        <img src="" alt="Logo">
        <a class="cancel__button" href="<?php echo base_url(); ?>">Cancel</a>
    </nav>
    <div class="login-content">
        <h1 >Log<span style="color: orange;">In</span></h1>
        <form action="login_page.php" method="post">
            <input type="text" name="username" placeholder="Enter Username">
            <input type="password" name='password' placeholder="Enter Password">

            <input id="submit__button" type="submit" name='submit' value="Login">
        </form>
        <hr>
        <h5>or</h5>
        <a id="signup__option" href="<?php echo base_url(); ?>signup">Signup Here</a>
    </div>
</div>