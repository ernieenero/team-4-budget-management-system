<style>
    :root {
        --bg-color: #9BD5E8;
        --primary-color: #4491B2;
    }
    .alert{
        display: none;
    }
    body{
        background-color: var(--bg-color);
    }
    span, a{
        text-align: center;
        display: block;
        margin: auto;
    }
    .wrapper{
        margin: 80px;
    }
    .form-signin{
        max-width: 650px;
        margin: 0 auto;
        background-color: white;
        padding: 50px;
        border: 1px solid #e5e5e5;
        border-radius: 10px;
    }
    .form-signin .form-signin-heading, .form-signin .checkbox{
        margin-bottom: 30px;
    }
    .form-signin input[type="text"], 
    .form-signin input[type="password"],
    .form-signin input[type="date"],
    .form-signin .gender{
        display: inline;
        margin: 0px 20px 20px 0px;
        max-width: 250px;
        padding: 10px;
    }
    .form-signin input[type="text"], 
    .form-signin input[type="password"],
    .form-signin input[type="date"],
    .form-signin button{
        border-radius: 15px;
    }
    .form-signin
    .form-signin button{
        max-width: 300px;
        margin: 20px auto;
    }
</style>
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
        <form action="#" class="form-signin">
            <h2 class="form-signin-heading text-center">Welcome New User</h2>
            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
            <input type="text" class="form-control" name="firstname" placeholder="First Name" required>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <input type="text" class="form-control" name="lastname" placeholder="Last Name" required>
            <input type="text" class="form-control" name="email" placeholder="Email" required>
            <input type="text" class="form-control" name="birthdate" placeholder="Birthdate" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}" required>
            <input type="text" class="form-control" name="country" placeholder="Country" required>
            <div class="gender">
                <label>M</label> <input type="radio" name="gender" required>
                <label>F</label> <input type="radio" name="gender" >
            </div>
            <button type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
            
            <a href="#">Already Have an Account?</a>
        </form>
    </div>