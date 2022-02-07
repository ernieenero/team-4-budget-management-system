

        <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/create-user.css">
    </head>
<body>
<nav class="login-nav">
        <img src="" alt="Logo">
        <a class="cancel__button" href="<?php echo base_url(); ?>">Cancel</a>
    </nav>


    <div class="alert alert-success" role="alert">
        A simple success alert—check it out!
    </div>
    <div class="alert alert-danger" role="alert">
        A simple danger alert—check it out!
    </div>
    <div class="alert alert-warning" role="alert">
        A simple warning alert—check it out!
    </div>

    <div class="wrapper">
    <span style="color: red;" class="error"><?php echo form_error('username')?></span>
            
        <form method="post" action="<?php echo base_url(); ?>signup" class="form-signin">
            <h2 class="form-signin-heading text-center">Welcome New User</h2>
            <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
            <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
            <input type="text" class="form-control" name="email" placeholder="Email" required>
            <input type="text" class="form-control" name="birthdate" placeholder="Birthdate" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" required>
            <input type="text" class="form-control" name="country" placeholder="Country" required>
            <div class="gender">
                <label>M</label> <input type="radio" name="gender" value="M" required>
                <label>F</label> <input type="radio" name="gender" value="F">
            </div>
            <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="Register">
            <br>
            <a href="<?php echo base_url(); ?>login">Already Have an Account?</a>
        </form>
    </div>