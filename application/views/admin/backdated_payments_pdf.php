<!DOCTYPE html>
<html>
<head>
    <title>Backdated Payments</title>
    <style>
        body { font-family: Arial, sans-serif; font-size: 12pt; }
        .company-header { text-align: center; margin-bottom: 20px; }
        .company-header h2 { margin: 0; color: #006c91; }
        .company-header p { margin: 0; }

        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 5px; text-align: left; }
        th { background-color: #00bcd4; color: #fff; }

        .employee-header { background-color: #e0f7fa; font-weight: bold; }
        .employee-total { background-color: #b2ebf2; font-weight: bold; }
        .grand-total { background-color: #80deea; font-weight: bold; }
    </style>
</head>
<body>

<div class="company-header">
    <h2><?= $compdata->comp_name ?></h2>
    <!-- <p>Phone: <?= $compdata->phone ?></p> -->
    <h4>Backdated Payments Made Today</h4>
</div>

<table>
    <thead>
        <tr>
            <th>S/No.</th>
            <th>Branch</th>
            <th>Staff</th>
            <th>Customer Name</th>
            <th>Phone Number</th>
            <th>Amount</th>
            <th>Method</th>
            <th>Backdated/Prepaid Date</th>
            <th>Action Date</th>
            <th>Payment Type</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        $grand_total = 0;
        $grouped = [];
        foreach ($backdates as $backdate) {
            $grouped[$backdate->empl_name][] = $backdate;
        }

        foreach ($grouped as $empl_name => $payments):
            $employee_total = 0;
        ?>
            <!-- Employee Header -->
            <tr class="employee-header">
                <td colspan="10"><?= $empl_name ?></td>
            </tr>

            <?php foreach ($payments as $backdate): ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $backdate->blanch_name ?></td>
                    <td><?= $backdate->empl_name ?></td>
                    <td><?= $backdate->f_name.' '.$backdate->m_name.' '.$backdate->l_name ?></td>
                    <td><?= $backdate->phone_no ?></td>
                    <td><?= number_format($backdate->depost) ?></td>
                    <td><?= $backdate->deposit_account ?></td>
                    <td><?= $backdate->lecod_day ?></td>
                    <td><?= $backdate->time_rec ?></td>
                    <td><?= $backdate->payment_type ?></td>
                </tr>
                <?php 
                $employee_total += $backdate->depost;
                $grand_total += $backdate->depost;
                ?>
            <?php endforeach; ?>

            <!-- Employee Total -->
            <tr class="employee-total">
                <td colspan="5" style="text-align:right;">Total for <?= $empl_name ?>:</td>
                <td><?= number_format($employee_total) ?></td>
                <td colspan="4"></td>
            </tr>
        <?php endforeach; ?>

        <!-- Grand Total -->
        <tr class="grand-total">
            <td colspan="5" style="text-align:right;">Grand Total:</td>
            <td><?= number_format($grand_total) ?></td>
            <td colspan="4"></td>
        </tr>
    </tbody>
</table>

</body>
</html>
