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
<li class="breadcrumb-item active">Deleted Disbured Loans</li>
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
<div class="col-lg-12">
<div class="card">
<div class="header">
<h2>Deleted Disbured Loans </h2>
<div class="pull-right">
   <a href="" class="btn btn-primary" data-toggle="modal" data-target="#addcontact2"><i class="icon-pencil">Filter</i></a> 
</div>    
 </div>
<div class="body">
<div class="table-responsive">
<table class="table table-hover js-basic-example dataTable table-custom">
<thead class="thead-primary">                             
            <tr>
               <th>S/No.</th>
                <th>customer name</th>
                <th>Phone number</th>
                <th>Branch</th>
                <th>Amount</th>
                <th>Category</th>
                <th>Deleted At</th>
                <th>Deleted By</th>
                <!-- <th>Action</th> -->
            </tr>

            
        
           
            
           
        </thead>
       
        <tbody>
        <?php $no = 1; foreach ($deleted_loans as $loan): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $loan->f_name . ' ' . $loan->m_name . ' ' . $loan->l_name ?></td>
                <td><?= $loan->phone_no ?></td>
                <td><?= $loan->blanch_name ?></td>
                <td><?= number_format($loan->loan_aprove) ?></td>
                
                <td><?= $loan->loan_name ?></td>
                <td><?= $loan->deleted_at ?></td>
                <td><?= $loan->deleted_by_name ?></td>
                <!-- <td>
    <a href="</?= base_url("admin/restore_loan/{$loan->loan_id}") ?>" class="btn btn-success btn-sm"
       onclick="return confirm('Are you sure you want to restore this loan?')">
       Restore
    </a>
</td> -->

            </tr>
        <?php endforeach; ?>
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


<div class="modal fade" id="addcontact2" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h6 class="title" id="defaultModalLabel">Filter Customer</h6>
</div>
<?php echo form_open("admin/filter_customer_status"); ?>
<div class="modal-body">
<div class="row clearfix">
<div class="col-md-6 col-6">
<span>Select Branch</span>
<select type="number" class="form-control" name="blanch_id" required>
<option value="">--Select Branch--</option>
<?php foreach ($blanch as $blanchs): ?>
<option value="<?php echo $blanchs->blanch_id; ?>"><?php echo $blanchs->blanch_name; ?></option>
<?php endforeach; ?>
<option value="all">ALL</option>
</select>     
</div>
<div class="col-md-6 col-6">
<span>Select Status</span>
<select type="number" class="form-control" name="customer_status" required>
<option value="">--Select status--</option>
<option value="open">ACTIVE</option>
<option value="pending">PENDING</option>
<option value="out">DEFAULT</option>
<option value="close">DONE</option>
<!-- <option value="all">ALL</option> -->
</select>     
</div>
<input type="hidden" name="comp_id" value="<?php echo $_SESSION['comp_id']; ?>">
</div>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-primary">Filter</button>
<!--  <a href="" class="btn btn-primary">Resend Code</a> -->
<button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
</div>
<?php echo form_close(); ?>
</div>
</div>
</div>





