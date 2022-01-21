<link rel="stylesheet" href="<?php echo base_url('/public/css/user-homepage.css');?>">


<nav class="sidebar">
    <ul class="nav navbar-nav dropdown">
        <strong>Accounts</strong>
        <li><a href="#"><?= $acc1; ?></a></li>
        <li><a href="#"><?= $acc2; ?></a></li>
        <li><a href="#"><?= $acc3; ?></a></li>
    </ul>
    <a href="#" type="button" class="btn btn-primary add-btn">Add account</a>
</nav>
<div class="container my-container">
    <div class="row">
        <div class="col"></div>
        <div class="col-2">
            <a href="#">USER</a>    
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div id="active-account"> <strong> <?=$acc1; ?></strong></div>
        </div>
        <div class="col">
            <div id="total-expenses" >TOTAL EXPENSES: $<?= $total_expenses?></div>
        </div>
    </div>
    <div class="row">
        <div class="col-auto">
            <div class="btn-vert">
                <a href="" type="button" class="btn btn-primary green">ACCOUNT BAL: <?=$acc1_bal?></a>
                <a href="" type="button" class="btn btn-primary">SET INCOME</a>
                <a href="" type="button" class="btn btn-primary">SET RECURRING EXPENSES</a>
                <a href="" type="button" class="btn btn-primary">DASHBOARD</a>
            </div>
        </div>
        <div class="col" id="expense-table">
        
        <!-- SAMPLE TABLE ONLY -->
        <caption>LIST OF EXPENSES</caption> 
        <table class="table table-sm">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">NAME</th>
                <th scope="col">BUDGET</th>
                <th scope="col">DATE</th>
                <th scope="col">QTY</th>
                <th scope="col">TYPE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Rice</td>
                    <td>$999</td>
                    <td>Dec 25, 2020</td>
                    <td>1</td>
                    <td>recurring</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Water</td>
                    <td>$999</td>
                    <td>Dec 25, 2020</td>
                    <td>1</td>
                    <td>recurring</td>
                </tr>
            </tbody>
            </table>

            <a href="#" type="button" class="btn btn-primary">ADD NEW EXPENSE</a>
        </div>
    </div>
</div>

<script>

</script>