<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('/public/css/user-homepage.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    
</head>
<body>
  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <p class="sidebar-header"><i class="fa fa-credit-card"></i>Accounts</p>
    <div class="nav-list">
      <button class="nav-link btn btn-success">Personal Saving 1</button>
      <button class="nav-link btn btn-primary">Personal Saving 2</button>
      <button class="nav-link btn btn-primary">Business</button>
      <button class="nav-link btn btn-secondary"><i class="fa fa-plus-circle"></i>Add Account</button>
    </div>

    <button class="nav-link logout btn btn-danger"><i class="fa fa-sign-out"></i>Logout</button>
  </div>

  <div class="main" id="main">
    <button id="openbtn" class="openbtn" onclick="openNav()">☰</button>  
    <div class="main-page container-fluid" id="main-page">
      <!--<img class="img-fluid rounded" src="images/sched.png" alt="sched">-->
      <p class="account-name">Account Name <i class="fa fa-edit"></i></p>
      <div class="user-btn">
        <a href=""><i class="fa fa-user-circle"></i>User</a>
        <div class="total-expenses">Total Expenses: 1231</div>
      </div>
      
      <div class="content">
        <div id="left-content" class="left-content">
            <div class="account-balance">Account Balance: 1234</div>
            <button class="set-income">Set Income</button>
            <button class="set-recurr">Set Recurring Expenses</button>
            <button class="dash-btn">Dashboard</button>
        </div>
        <div class="right-content">
          <h3>Expense List</h3>
          <table class="table">
              <tr>
                  <th>Name</th>
                  <th>Budget</th>
                  <th>Date</th>
                  <th>Quantity</th>
                  <th>Type</th>
              </tr>
              <tr>
                  <td>Rice</td>
                  <td>123</td>
                  <td>Dec 25, 2020</td>
                  <td>1</td>
                  <td>Recurring</td>
              </tr>
              <tr>
                  <td>Water</td>
                  <td>123</td>
                  <td>Dec 26, 2020</td>
                  <td>1</td>
                  <td>Recurring</td>
              </tr>
          </table>
          <button class="add-expense">Add New Expense</button>
        </div>
      </div>
    </div>
  </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/main.js"></script>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "265px";

  document.getElementById("main").style.marginLeft = "265px";
  document.getElementById("openbtn").style.display = "none";
  
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0px";
  document.getElementById("main").style.marginLeft= "0";
  
  document.getElementById("openbtn").style.display = "";
  
  
}
</script>
</html>