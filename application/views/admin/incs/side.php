  
 <?php
$setup_permissions = [
    'Loan Category',
    'Loan Fee',
    'Penart Setting',
    'Interest Formular Setting',
    'Transaction Accounts'
];

// check if user has ANY setup permission
$show_setup = false;
foreach ($setup_permissions as $perm) {
    if (has_permission($perm)) {
        $show_setup = true;
        break;
    }
}
?>

 <?php
$transanctionsReports_permissions = [
    'Penalts Payments',
    'Backdated Payments',
    'Branchwise Payments',
    'Staffwise Payments',
    'General Transactions'
];

// check if user has ANY setup permission
$show_transanctionsReports = false;
foreach ($transanctionsReports_permissions as $perm) {
    if (has_permission($perm)) {
        $show_transanctionsReports = true;
        break;
    }
}
?>


 <?php
$communication_permissions = [
    'Via Sms',
    
];

// check if user has ANY setup permission
$show_communication = false;
foreach ($communication_permissions as $perm) {
    if (has_permission($perm)) {
        $show_communication = true;
        break;
    }
}
?>



  
 <?php
$log_permissions = [
    'Deleted Customer',
    'Deleted Loans',
   
];

// check if user has ANY setup permission
$show_log = false;
foreach ($log_permissions as $perm) {
    if (has_permission($perm)) {
        $show_log = true;
        break;
    }
}
?>




 <?php
$loan_permissions = [
    'Loan Application Form',
    'Loan Pending Approve',
    'Approved Loans',
    'Loan withdrawal List',
    'Loan Rejected List'
];

// check if user has ANY setup permission
$show_loan = false;
foreach ($loan_permissions as $perm) {
    if (has_permission($perm)) {
        $show_loan = true;
        break;
    }
}
?>



 <?php
$income_permissions = [
    'Register Income',
    'Penalt Dashboard',
    'Processing Fee'
 
];

// check if user has ANY setup permission
$show_income = false;
foreach ($income_permissions as $perm) {
    if (has_permission($perm)) {
        $show_income = true;
        break;
    }
}
?>


 <?php
$employee_permissions = [
    'Register Employee',
    'All Employees',
   
 
];

// check if user has ANY setup permission
$show_employee = false;
foreach ($income_permissions as $perm) {
    if (has_permission($perm)) {
        $show_employee = true;
        break;
    }
}
?>




 <?php
$branch_permissions = [
    'Register Branch',
   
];

// check if user has ANY setup permission
$show_branch = false;
foreach ($branch_permissions as $perm) {
    if (has_permission($perm)) {
        $show_branch = true;
        break;
    }
}
?>



 <?php
$teller_permissions = [
    'Teller Dashboard',
   
];

// check if user has ANY setup permission
$show_teller = false;
foreach ($teller_permissions as $perm) {
    if (has_permission($perm)) {
        $show_teller = true;
        break;
    }
}
?>







<?php
$capital_permissions = [
    'Share Holders',
    'Add Capitals',
    'Float',
];

// check if user has ANY capital permission
$show_capital = false;
foreach ($capital_permissions as $perm) {
    if (has_permission($perm)) {
        $show_capital = true;
        break;
    }
}
?>

<?php
$customer_permissions = ['Register Customer', 'All Customer'];
$show_customer = false;
foreach ($customer_permissions as $perm) {
    if (has_permission($perm)) {
        $show_customer = true;
        break;
    }
}
?>

>

  
  <div id="left-sidebar" class="sidebar">
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="<?php echo base_url() ?>assets/img/male.jpeg" class="rounded-circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    
                    <span><?php echo $this->lang->line('karibu_menu'); ?>,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong><?php echo @$_SESSION['comp_name']; ?></strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="javascript:;"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="<?php echo base_url("admin/setting"); ?>"><i class="icon-settings"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
                <!-- <hr> -->
               <!--  <ul class="row list-unstyled">
                    <li class="col-4">
                        <small>Employee</small>
                        <h6>14</h6>
                    </li>
                    <li class="col-4">
                        <small>Customer</small>
                        <h6>13</h6>
                    </li>
                    <li class="col-4">
                        <small>Admin</small>
                        <h6>213</h6>
                    </li>
                </ul> -->
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>                
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#sub_menu">Report</i></a></li>
                <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i class="icon-book-open"></i></a></li> -->
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>                
            </ul>
                
            <!-- Tab panes -->
            <div class="tab-content p-l-0 p-r-0">
                <div class="tab-pane active" id="menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">

                        <li class="active"><a href="<?php echo base_url("admin/index"); ?>"><i class="icon-home"></i><span>Dashboard</span></a></li>
<?php if ($show_setup): ?>
<li>
    <a href="javascript:void(0);" class="has-arrow">
        <i class="icon-settings"></i>
        <span>Setup</span>
    </a>
    <ul>

        <?php if (has_permission('Loan Category')): ?>
            <li><a href="<?= base_url('admin/loan_category') ?>">Loan Category</a></li>
        <?php endif; ?>

        <?php if (has_permission('Loan Fee')): ?>
            <li><a href="<?= base_url('admin/loan_fee') ?>">Loan Fee</a></li>
        <?php endif; ?>

        <?php if (has_permission('Penart Setting')): ?>
            <li><a href="<?= base_url('admin/penart_setting') ?>">Penart Setting</a></li>
        <?php endif; ?>

        <?php if (has_permission('Interest Formular Setting')): ?>
            <li><a href="<?= base_url('admin/formular_setting') ?>">Interest Formular Setting</a></li>
        <?php endif; ?>

        <?php if (has_permission('Transaction Accounts')): ?>
            <li><a href="<?= base_url('admin/transaction_account') ?>">Transaction Accounts</a></li>
        <?php endif; ?>

    </ul>
</li>
<?php endif; ?>



<?php if ($show_capital): ?>
<li>
    <a href="javascript:void(0);" class="has-arrow">
        <i class="icon-wallet"></i>
        <span>Capital</span>
    </a>
    <ul>

        <?php if (has_permission('Share Holders')): ?>
            <li><a href="<?= base_url('admin/shareHolder') ?>">Share Holders</a></li>
        <?php endif; ?>

        <?php if (has_permission('Add Capitals')): ?>
            <li><a href="<?= base_url('admin/capital') ?>">Add Capitals</a></li>
        <?php endif; ?>

        <?php if (has_permission('Float')): ?>
            <li><a href="<?= base_url('admin/transfar_amount') ?>">Float</a></li>
        <?php endif; ?>

      

    </ul>
</li>
<?php endif; ?>






                            



                             <?php if ($show_branch): ?>
                             <li><a href="<?php echo base_url("admin/blanch"); ?>"><i class="icon-size-actual"></i>Register Branch</a></li>
                          <?php endif; ?>


                             <!-- <li><a href="javascript:;"><i class="icon-users"></i>Group</a></li> -->


                             <?php if ($show_income): ?>
<li>
    <a href="javascript:void(0);" class="has-arrow">
        <i class="icon-wallet"></i>
        <span>Income</span>
    </a>
    <ul>

        <?php if (has_permission('Register Income')): ?>
         <li><a href="<?php echo base_url("admin/income_detail"); ?>">Register Income</a></li>
        <?php endif; ?>

      

        <?php if (has_permission('Penalt Dashboard')):?>
                    <li><a href="<?php echo base_url("admin/income_dashboard"); ?>">Fain</a></li>
                <?php endif; ?>
   
                <?php if(has_permission('Processing Fee')): ?>
                <li><a href="<?php echo base_url("admin/deducted_income"); ?>">Fomu</a></li>
                <?php endif;?>
                                    <!-- <li><a href="javascript:;">Transfor Income Branch To Branch</a></li>
                                    <li><a href="javascript:;">Transfor Income Branch To Company</a></li> -->
                                    <!-- <li><a href="</?php echo base_url("admin/income_balance"); ?>">Income Balance</a></li> -->

    </ul>
</li>
<?php endif; ?>

                             
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="icon-credit-card"></i><span>Expenses</span> </a>
                                <ul>
                                    <li><a href="<?php echo base_url("admin/expenses"); ?>">Register Expenses</a></li>
                                    <li><a href="<?php echo base_url("admin/expnses_requisition_form"); ?>">Request Expenses</a></li>
                                    <li><a href="<?php echo base_url("admin/get_recomended_request"); ?>">All Expenses Request</a></li>
                                </ul>
                            </li>


                                                         <?php if ($show_employee): ?>
<li>
    <a href="javascript:void(0);" class="has-arrow">
        <i class="icon-wallet"></i>
        <span>Employee</span>
    </a>
    <ul>

        <?php if (has_permission('Register Employee')): ?>
         <li><a href="<?php echo base_url("admin/employee"); ?>">Register Employee</a></li>
        <?php endif; ?>

      

        <?php if (has_permission('All Employees')):?>
                 <li><a href="<?php echo base_url("admin/all_employee"); ?>">All Employee</a></li>
                <?php endif; ?>

    </ul>
</li>
<?php endif; ?>

                          
                            
                            
                              
<?php if ($show_customer): ?>
<li>
    <a href="javascript:void(0);" class="has-arrow">
        <i class="icon-user"></i>
        <span>Customer</span>
    </a>
    <ul>
        <?php if (has_permission('Register Customer')): ?>
            <li><a href="<?= base_url('admin/customer') ?>">Register Customer</a></li>
        <?php endif; ?>

        <?php if (has_permission('All Customer')): ?>
            <li><a href="<?= base_url('admin/all_customer') ?>">All Customer</a></li>
        <?php endif; ?>
    </ul>
</li>
<?php endif; ?>



<?php if ($show_loan): ?>
<li>
    <a href="javascript:void(0);" class="has-arrow">
        <i class="icon-user"></i>
        <span>Loan</span>
    </a>
    <ul>
        <?php if (has_permission('Loan Application Form')): ?>
 <li><a href="<?php echo base_url("admin/loan_application"); ?>">Loan Application</a></li>
        <?php endif; ?>

        <?php if (has_permission('Loan Pending Approve')): ?>
     <li><a href="<?php echo base_url("admin/loan_pending"); ?>">Loan Pending Approve</a></li>
        <?php endif; ?>

              <?php if (has_permission('Approved Loans')): ?>
    <li><a href="<?php echo base_url("admin/disburse_loan"); ?>">Loan Disbursed</a></li>
        <?php endif; ?>

              <?php if (has_permission('Loan withdrawal List')): ?>
  <li><a href="<?php echo base_url("admin/loan_withdrawal"); ?>">Loan Withdrawal</a></li>
        <?php endif; ?>

                      <?php if (has_permission('Loan Rejected List')): ?>
                <li><a href="<?php echo base_url("admin/all_loan_lejected"); ?>">Loan Rejected</a></li>
        <?php endif; ?>

    </ul>
</li>
<?php endif; ?>
                  
                            </li>
                    
                                  <?php if ($show_teller): ?>
                                        <li><a href="<?php echo base_url("admin/teller_dashboard"); ?>"><i class="icon-list"></i>Teller Dashboard</a></li>
                          <?php endif; ?>
                 
<?php if ($show_log): ?>
<li>
    <a href="javascript:void(0);" class="has-arrow">
        <i class="icon-user"></i>
        <span>Activity Log</span>
    </a>
    <ul>
        <?php if (has_permission('Deleted Customer')): ?>
     <li><a href="<?php echo base_url("admin/deleted_customers"); ?>">Deleted Customer</a></li>
        <?php endif; ?>




        <?php if (has_permission('Deleted Loans')): ?>
  <li><a href="<?php echo base_url("admin/deleted_loans"); ?>">Deleted  Loans</a></li>
        <?php endif; ?>

    </ul>
</li>
<?php endif; ?>




<?php if ($show_communication): ?>
<li>
    <a href="javascript:void(0);" class="has-arrow">
        <i class="icon-user"></i>
        <span>Communications</span>
    </a>
    <ul>
        <?php if (has_permission('Via Sms')): ?>
       <li><a href="<?php echo base_url("admin/reminder_sms"); ?>">Via SMS</a> </li>
        <?php endif; ?>
    </ul>
</li>
<?php endif; ?>
                            

                        </ul>
                    </nav>
                    <br><br><br><br>
                </div>

                <div class="tab-pane" id="sub_menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                        	




<?php if ($show_transanctionsReports): ?>
<li>
    <a href="javascript:void(0);" class="has-arrow">
        <i class="icon-user"></i>
        <span>Transaction Report</span>
    </a>
    <ul>
        <?php if (has_permission('General Transactions')): ?>
        <li><a href="<?php echo base_url("admin/cash_transaction") ?>">General Transactions</a></li>
        <?php endif; ?>

          <?php if (has_permission('Penalts Payments')): ?>
         <li><a href="<?php echo base_url("admin/penalt_payments") ?>">Penalt Payments</a></li>
        <?php endif; ?>

          <?php if (has_permission('Backdated Payments')): ?>
            <li><a href="<?php echo base_url("admin/backdated") ?>">Backdated payments</a></li>
        <?php endif; ?>

          <?php if (has_permission('Staffwise Payments')): ?>
                   <li><a href="<?php echo base_url("admin/teller_transaction") ?>">Teller Officer Cash Transaction</a></li>
        <?php endif; ?>

          <?php if (has_permission('Branchwise Payments')): ?>
    <li><a href="<?php echo base_url("admin/branch_trans") ?>">Branchwise Transactions</a></li>
        <?php endif; ?>
    </ul>
</li>
<?php endif; ?>
             

                            <li>
                                <a href="#uiElements" class="has-arrow"><i class="icon-wallet"></i> <span>Monthly Report </span></a>
                                <ul>
                                    <li><a href="<?php echo base_url("admin/monthly_withdrawal") ?>">Branchwise Withdrawal</a></li>
                                    <li><a href="<?php echo base_url("admin/monthly_income") ?>">Monthly Penalt</a></li>
                                    <li><a href="<?php echo base_url("admin/mikopo_chefuchefu") ?>">bad debts</a></li>
                                </ul>
                            </li>
                        


                            <li><a href="<?php echo base_url("admin/blanchiwise_report"); ?>"><i class="icon-list"></i>Branch Wise Report</a></li>
                        	<li><a href="<?php echo base_url("admin/loan_pending_time"); ?>"><i class="icon-list"></i>Loan Pending</a></li>
                        	<li><a href="<?php echo base_url("admin/repaymant_data"); ?>"><i class="icon-list"></i>Loan Repayment</a></li>
                        	<li><a href="<?php echo base_url("admin/Default_loan"); ?>"><i class="icon-list"></i>Default Loan</a></li>
                        	<li><a href="<?php echo base_url("admin/loan_collection"); ?>"><i class="icon-list"></i>Loan Collection</a></li>
                        	<!-- <li><a href="javascript:;"><i class="icon-list"></i>Customer Loan Report</a></li> -->
                        	<li><a href="<?php echo base_url("admin/customer_account_statement"); ?>"><i class="icon-list"></i>Customer Account</a></li>
                        	<li><a href="<?php echo base_url("admin/today_recevable_loan"); ?>"><i class="icon-list"></i>Today Receivable</a></li>
                        	<li><a href="<?php echo base_url("admin/today_receved_loan"); ?>"><i class="icon-list"></i>Today Received</a></li>
                        	

                            <li><a href="<?php echo base_url("admin/daily_report"); ?>"><i class="icon-wallet"></i>Daily Report</a></li>  
                          
                        
                        </ul>
                    </nav>
                    <br><br><br>
                </div>
               
                <div class="tab-pane p-l-15 p-r-15" id="setting">
                    <h6>Choose Skin</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>                   
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="cyan" class="active">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="blush">
                            <div class="blush"></div>
                            <span>Blush</span>
                        </li>
                    </ul>

               
                </div>             
            </div>          
        </div>
    </div>














