<!DOCTYPE html> 
<html lang="en">
<head>
    <title>Mikoposoft | Employee Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Lucid Bootstrap 4.1.1 Admin Template">
    <meta name="author" content="WrapTheme, design by: ThemeMakker.com">
    <link rel="icon" href="<?php echo base_url() ?>assets/images/traglogo.png" type="image/x-icon" />
    
    <!-- Poppins Font from Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">
    
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/css/color_skins.css">
    
    <style>
        /* Apply Poppins font globally */
        body {
    font-family: 'Poppins', sans-serif;
    background-image: url('<?php echo base_url(); ?>assets/img/lugrace.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
}

        .input-group {
            position: relative;
        }

      



.input-group input {
   
    width: 100%;
    color: #fff; /* Set text color to white */
    border: 1px solid #0056b3; /* Add border color to match the background */
    border-radius: 4px; /* Optional: make the corners rounded */
}

/* Apply dark blue background color to the button */
.btn-info {
    background-color: #004085; /* Dark blue background */
    border-color: #003366; /* Darker blue border */
    color: white; /* White text */
}

.btn-info:hover {
    background-color: #003366; /* Even darker blue on hover */
    border-color: #002a4b; /* Darker border color on hover */
}

      
    </style>
</head>
<body class="theme-cyan" style="">

    <!-- WRAPPER -->
    <div class="container">
        <div class="">
            <div class="">
                <br><br><br><br><br>
                <div class="">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="body">
                                    <!-- <div class="text-center">
                                        <img src="<//?php echo base_url() ?>assets/img/foru.png" style="width: 200px;height: 50px;">
                                    </div> -->
                                    <hr>

                                    <?php if ($das = $this->session->flashdata('mass')): ?> 
                                        <div class="row"> 
                                            <div class="col-md-12"> 
                                                <div class="alert alert-dismissible alert-danger"> 
                                                    <a href="" class="close">&times;</a> <?php echo $das;?> 
                                                </div> 
                                            </div> 
                                        </div> 
                                    <?php endif; ?>

                                    <?php if ($das = $this->session->flashdata('massage')): ?> 
                                        <div class="row"> 
                                            <div class="col-md-12"> 
                                                <div class="alert alert-dismissible alert-success"> 
                                                    <a href="" class="close">&times;</a> <?php echo $das;?> 
                                                </div> 
                                            </div> 
                                        </div> 
                                    <?php endif; ?>

                                    <?php echo form_open("welcome/Employee_signin", ['class' => 'form-auth-small']); ?>
                                        <div class="form-group"> 
                                            <label for="empl_no"><?php echo $this->lang->line('phone_number_menu'); ?></label>
                                            <div class="input-group">
                                              
                                                <input type="number" name="empl_no" id="empl_no" required class="form-control" placeholder="<?php echo $this->lang->line('create_number_menu'); ?>"> 
                                            </div>
                                            <?php echo form_error("number"); ?> 
                                        </div>
                                        <div class="form-group"> 
                                            <label for="password"><?php echo $this->lang->line("password_menu"); ?></label>
                                            <div class="input-group">
                                                
                                                <input type="password" name="password" id="password" required class="form-control" placeholder="******"> 
                                            </div>
                                            <?php echo form_error("password"); ?> 
                                        </div>
                                        <button type="submit" class="btn btn-info btn-lg btn-block">Sign in</button>
                                        <br> 
                                    <?php echo form_close(); ?>

                                   
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->

</body>
</html>

<!-- Javascript -->
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/datatablescripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets/vendor/sweetalert/sweetalert.min.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/js/pages/tables/jquery-datatable.js"></script>
</body>
</html>
