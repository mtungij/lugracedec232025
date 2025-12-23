<?php include('incs/header.php'); ?>
<?php include('incs/nav.php'); ?>
<?php include('incs/side.php'); ?>

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url("admin/index"); ?>"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active">Penalt Payments</li>
                        </ul>
                    </div>            
                 
                </div>
            </div>
                  <?php if ($das = $this->session->flashdata('massage')): ?> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="alert alert-dismisible alert-success"> <a href="" class="close">&times;</a> 
                                    <?php echo $das;?> </div> 
                            </div> 
                        </div> 
                    <?php endif; ?>
            <div class="row clearfix">
                <div class="col-md-12">
                    
                        
                      

                <div class="col-lg-12">
                    <div class="card">
                         <div class="header">
                            <h2>Backdated payments made today</h2> 
                            <div class="pull-right">
                              <a href="<?= base_url('admin/print_backdate_cash') ?>" target="_blank" class="btn btn-info mb-3">
    <i class="icon-printer"></i> Print PDF
</a>

                            </div>   
                             </div>
                          <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover js-basic-example dataTable table-custom">
                                    <thead class="thead-primary">
                    
                                         <thead class="thead-primary">
                                         <th>S/No.</th>
                                         <th>Branch</th>
                                         <th>Staff</th>
                                        <th>Customer Name</th>
                                        <th>Phone Number</th>
                                        <th>Amount</th>
                                        <th>Method</th>
                                        <th>Backdated/Prepaid Date</th>
                                        <th>Action Date</th>
                                        <th>payment_type</th>
                                    </thead>
                                    
                                   
<tbody>
<?php 
$no = 1; 
$grand_total = 0; // total for all employees

$grouped = []; 
// Group backdates by employee
foreach ($backdates as $backdate) {
    $grouped[$backdate->empl_name][] = $backdate;
}

foreach ($grouped as $empl_name => $payments): 
    $employee_total = 0; // total per employee
?>
    <!-- Employee Header Row -->
    <tr class="table-primary fw-bold">
        <td colspan="10"><?= $empl_name; ?></td>
    </tr>

    <?php foreach ($payments as $backdate): ?>
        <tr>
            <td><?php echo $no++; ?></td>  
            <td><?php echo $backdate->blanch_name; ?></td>               
            <td><?php echo $backdate->empl_name; ?></td>
            <td><?php echo $backdate->f_name; ?> <?php echo $backdate->m_name; ?> <?php echo $backdate->l_name; ?></td>
            <td><?php echo $backdate->phone_no; ?></td>
            <td><?php echo number_format($backdate->depost); ?></td>
            <td><?php echo $backdate->deposit_account; ?></td>
            <td><?php echo $backdate->lecod_day; ?></td>
            <td><?= $backdate->time_rec; ?></td>
            <td><?= $backdate->payment_type; ?></td>
        </tr>
        <?php 
        $employee_total += $backdate->depost; 
        $grand_total += $backdate->depost; 
        ?>
    <?php endforeach; ?>

    <!-- Employee Total Row -->
    <tr class="fw-bold table-secondary">
        <td colspan="5" class="text-end">Total for <?= $empl_name; ?>:</td>
        <td><?= number_format($employee_total); ?></td>
        <td colspan="4"></td>
    </tr>

<?php endforeach; ?>

<!-- GRAND TOTAL ROW -->
<tr class="fw-bold table-success">
    <td colspan="5" class="text-end">Grand Total:</td>
    <td><?= number_format($grand_total); ?></td>
    <td colspan="4"></td>
</tr>
</tbody>

                                </table>
                            </div>
                        </div>

                    </div>
                </div> 


             
            </div>
        </div>
    </div>
</div>

<?php include('incs/footer.php'); ?>



<script>
$(document).ready(function(){
$('#blanch').change(function(){
var blanch_id = $('#blanch').val();
//alert(blanch_id)
if(blanch_id != ''){

$.ajax({
url:"<?php echo base_url(); ?>admin/fetch_ward_data",
method:"POST",
data:{blanch_id:blanch_id},
success:function(data)
{
$('#customer').html(data);
//$('#district').html('<option value="">All</option>');
}
});
}
else
{
$('#customer').html('<option value="">Select customer</option>');
//$('#district').html('<option value="">All</option>');
}
});



$('#customer').change(function(){
var customer_id = $('#customer').val();
 //alert(customer_id)
if(customer_id != '')
{
$.ajax({
url:"<?php echo base_url(); ?>admin/fetch_data_vipimioData",
method:"POST",
data:{customer_id:customer_id},
success:function(data)
{
$('#loan').html(data);
//$('#malipo_name').html('<option value="">select center</option>');
}
});
}
else
{
$('#loan').html('<option value="">Select Active loan</option>');
//$('#malipo_name').html('<option value="">chagua vipimio</option>');
}
});

// $('#social').change(function(){
//  var district_id = $('#social').val();
//  if(district_id != '')
//  {
//   $.ajax({
//    url:"<?php echo base_url(); ?>user/fetch_data_malipo",
//    method:"POST",
//    data:{district_id:district_id},
//    success:function(data)
//    {
//     $('#malipo_name').html(data);
//     //$('#malipo').html('<option value="">chagua malipo</option>');
//    }
//   });
//  }
//  else
//  {
//   //$('#vipimio').html('<option value="">chagua vipimio</option>');
//   $('#malipo_name').html('<option value="">chagua vipimio</option>');
//  }
// });


});
</script>



 <div class="modal fade" id="addcontact1" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Filter Income</h6>
            </div>
            <?php echo form_open("admin/previous_income"); ?>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-md-12">
                    <span>Select Branch:</span>
                    <select type="number" class="form-control" name="blanch_id" required>
                        <option value="">---Select Branch---</option>
                        <?php foreach ($blanch as $blanchs): ?>
                        <option value="<?php echo $blanchs->blanch_id; ?>"><?php echo $blanchs->blanch_name; ?></option>
                        <?php endforeach; ?>
                        <option value="all">All</option>
                    </select>            
                    </div>
                    <?php $date = date("Y-m-d"); ?>
                    <div class="col-md-6">
                    <span>From:</span>
                    <input type="date" class="form-control" value="<?php echo $date; ?>" name="from" required>    <input type="hidden" name="comp_id" value="<?php echo $_SESSION['comp_id']; ?>">       
                    </div>
                    <div class="col-md-6">
                    <span>To:</span>
                    <input type="date" class="form-control" name="to" value="<?php echo $date; ?>" required>           
                    </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Filter</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>


