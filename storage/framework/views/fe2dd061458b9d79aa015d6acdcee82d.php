<style>
    @page {
        size: 89mm auto; /* Set the width to match your container width */
        margin: 0; /* Remove default margins for a snug fit */
    }
    body {
        margin: 0;
        padding: 0;
    }
</style>
<?php
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");
    $paidAmount = $payments->pays->where('status1', 'paid')->sum('amount');
    $refundedAmount = $payments->pays->where('status1', 'refunded')->sum('amount');
    $totalPays = $paidAmount - $refundedAmount;

    $totalCollections = 0;
    $totalYearLevelPayments = 0;
    $allFees = collect();

    $schoolYear = $payments->schoolyear->schoolyear ?? 'N/A';

    foreach ($payments->yearlevelpayments as $fee) {
        $allFees->push([
            'type' => 'Year Level Fee',
            'description' => $fee->description . ' - Year Level ' . optional($fee->yearlevel)->yearlevel,
            'amount' => $fee->amount,
            'schoolyear' => $schoolYear
        ]);
        $totalYearLevelPayments += $fee->amount;
    }

    foreach ($payments->collections as $fee) {
        $allFees->push([
            'type' => 'School Year Fee',
            'description' => $fee->description . ' - Semester ' . optional($fee->semester)->semester,
            'amount' => $fee->amount,
            'schoolyear' => $schoolYear
        ]);
        $totalCollections += $fee->amount;
    }

    $groupedFees = $allFees->groupBy('schoolyear');
    $remainingBalance = ($totalCollections + $totalYearLevelPayments) - $totalPays;
?>

<head>
    <title>Print Invoice</title>
</head>
<div style="margin: 0 auto; padding: 0.5rem; background-color: #fff; border-radius: 0.5rem; color: #333; font-family: 'DejaVu Sans', sans-serif; font-size: 11px;">
    <h1 style="margin-bottom: 0.5rem; font-size: 16px; font-weight: bold; text-align: right; color: #000; line-height: 1.2;">INVOICE</h1>
    <p style="margin-bottom: 0.25rem; text-align: right; font-size: 10px; line-height: 0.5;">BISU Calape PTGEA MS</p>

    <div style="padding: 0.10rem 0.75rem; line-height: .80;">
        <h2 style="margin-bottom: 0.5rem; font-size: 13px; font-weight: bold;">Student Information</h2>
        <div style="margin-bottom: 0.25rem; display: flex;">
            <span style="width: 110px; font-weight: bold;">Name:</span>
            <span><?php echo e($payments->stud->firstname); ?> <?php echo e($payments->stud->middlename); ?> <?php echo e($payments->stud->lastname); ?></span>
        </div>
        <div style="margin-bottom: 0.25rem; display: flex;">
            <span style="width: 110px; font-weight: bold;">Student IDN:</span>
            <span><?php echo e($payments->stud->studentidn); ?></span>
        </div>
        <div style="margin-bottom: 0.25rem; display: flex;">
            <span style="width: 110px; font-weight: bold;">College:</span>
            <span><?php echo e($payments->college->college); ?></span>
        </div>
        <div style="margin-bottom: 0.25rem; display: flex;">
            <span style="width: 110px; font-weight: bold;">Program:</span>
            <span><?php echo e($payments->program->program); ?></span>
        </div>
        <div style="margin-bottom: 0.25rem; display: flex;">
            <span style="width: 110px; font-weight: bold;">Year Level:</span>
            <span><?php echo e($payments->yearlevel->yearlevel); ?></span>
        </div>
        <div style="margin-bottom: 0rem; display: flex;">
            <span style="width: 110px; font-weight: bold;">School Year:</span>
            <span><?php echo e($payments->schoolyear->schoolyear); ?></span>
        </div>
    </div>

    <div style="padding: 0.10rem 0.75rem; margin-bottom: 0rem; line-height: .80;">
        <h2 style="margin-bottom: 0.5rem; font-size: 13px; font-weight: bold;">Siblings Information</h2>
        <table style="width: 100%; margin-bottom: 0rem; border-collapse: collapse; border: 1px solid #ccc; font-size: 11px;">
            <thead>
                <tr style="background-color: #f9f9f9;">
                    <th style="padding: 0.25rem; text-align: left; border: 1px solid #ccc;">Complete Name</th>
                    <th style="padding: 0.25rem; text-align: left; border: 1px solid #ccc;">College</th>
                    <th style="padding: 0.25rem; text-align: left; border: 1px solid #ccc;">Program</th>
                    <th style="padding: 0.25rem; text-align: left; border: 1px solid #ccc;">Year Level</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $siblingsInformation->siblings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siblingsInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td style="padding: 0.25rem; border: 1px solid #ccc;"><?php echo e($siblingsInfo->stud->firstname); ?> <?php echo e($siblingsInfo->stud->middlename); ?> <?php echo e($siblingsInfo->stud->lastname); ?></td>
                        <td style="padding: 0.25rem; border: 1px solid #ccc;"><?php echo e($siblingsInfo->stud->enrollments->college->college); ?></td>
                        <td style="padding: 0.25rem; border: 1px solid #ccc;"><?php echo e($siblingsInfo->stud->enrollments->program->program); ?></td>
                        <td style="padding: 0.25rem; border: 1px solid #ccc;"><?php echo e($siblingsInfo->stud->enrollments->yearlevel->yearlevel); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4" style="padding: 0rem; text-align: center; border: 1px solid #ccc;">No sibling/s found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    

    <div style="padding: 0.10rem 0.75rem; line-height: .80;">
        <h2 style="margin-bottom: 0.5rem; font-size: 13px; font-weight: bold;">Fund Type</h2>
        <table style="width: 100%; border-collapse: collapse; border: 1px solid #ccc; font-size: 11px;">
            <thead>
                <tr style="background-color: #f9f9f9;">
                    <th style="padding: 0.25rem; text-align: left; border: 1px solid #ccc;">Description</th>
                    <th style="padding: 0.25rem; text-align: left; border: 1px solid #ccc;">Status</th>
                    <th style="padding: 0.25rem; text-align: right; border: 1px solid #ccc;">Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $totalPaid = 0;
                    $totalUnpaid = 0;
                ?>

                <?php $__empty_1 = true; $__currentLoopData = $payments->collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php
                        $collectionStatus = optional($fee->pivot)->collection_status;
                        $rowColor = is_null($collectionStatus) ? 'red' : 'green';

                        if (strtolower($collectionStatus) === 'paid') {
                            $totalPaid += $fee->amount;
                        } else {
                            $totalUnpaid += $fee->amount;
                        }
                    ?>
                    <tr style="color: <?php echo e($rowColor); ?>;">
                        <td style="padding: 0.25rem; border: 1px solid #ccc;">
                            <?php echo e($fee->description); ?> - Semester <?php echo e($fee->semester->semester ?? '-'); ?>

                        </td>
                        <td style="padding: 0.25rem; border: 1px solid #ccc;">
                            <?php echo e($collectionStatus ?? 'unpaid'); ?>

                        </td>
                        <td style="padding: 0.25rem; text-align: right; border: 1px solid #ccc;">
                            ₱<?php echo e(number_format($fee->amount ?? 0, 2)); ?>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="3" style="padding: 0.25rem; text-align: center; border: 1px solid #ccc;">
                            No school year fee type/s available.
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <div style="text-align: right; margin-top: 0.75rem; font-size: 9px; font-weight: semi-bold;">
            Total Amount Paid: ₱<?php echo e(number_format($totalPaid, 2)); ?>

        </div>
        <div style="text-align: right; margin-top: 0.25rem; font-size: 9px; font-weight: semi-bold;">
            Total Amount Unpaid: ₱<?php echo e(number_format($totalUnpaid, 2)); ?>

        </div>
        <div style="text-align: right; margin-top: 0.25rem; font-size: 11px; font-weight: bold;">
            Total Amount Due: ₱<?php echo e(number_format($totalPaid + $totalUnpaid, 2)); ?>

        </div>
    </div>


    <div style="padding: 0.10rem 0.75rem; line-height: .80;">
        <h2 style="margin-bottom: 0.5rem; font-size: 13px; font-weight: bold;">Payment History</h2>
        <table style="width: 100%; margin-bottom: 0.75rem; border-collapse: collapse; border: 1px solid #ccc; font-size: 11px;">
            <thead>
                <tr style="background-color: #f9f9f9;">
                    <th style="padding: 0.25rem; text-align: left; border: 1px solid #ccc;">Date</th>
                    <th style="padding: 0.25rem; text-align: left; border: 1px solid #ccc;">Status</th>
                    <th style="padding: 0.25rem; text-align: right; border: 1px solid #ccc;">Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $payments->pays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pay): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td style="padding: 0.25rem; border: 1px solid #ccc;"><?php echo e($pay->created_at->format('M d, Y / h:i:s a')); ?></td>
                        <td style="padding: 0.25rem; border: 1px solid #ccc;"><?php echo e($pay->status1); ?></td>
                        <td style="padding: 0.25rem; text-align: right; border: 1px solid #ccc;">₱<?php echo e(number_format($pay->amount, 2)); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="3" style="padding: 0.25rem; text-align: center; border: 1px solid #ccc;">No payment history found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <div style="text-align: right; margin-top: 0rem; font-size: 11px; font-weight: bold;">Total: ₱<?php echo e(number_format($payments->pays->sum('amount'), 2)); ?></div>
    </div>

    <?php
    $isNegative = $remainingBalance < 0;
    ?>

    <div style="padding: 0.5rem 0.75rem;">
        <hr style="margin: 10px 0; border-top: 1px solid #ccc;" />
        <?php if($isNegative): ?>
            <div style="text-align: right; font-size: 14px; font-weight: bold; color: green;">Fully Paid!</div>
            <div style="text-align: right; font-size: 14px; font-weight: bold; color: goldenrod;">Refundable Balance: ₱<?php echo e(number_format(abs($remainingBalance), 2)); ?></div>
        <?php elseif($remainingBalance == 0): ?>
            <div style="text-align: right; font-size: 14px; font-weight: bold; color: green;">Fully Paid!</div>
        <?php else: ?>
            <div style="text-align: right; font-size: 14px; font-weight: bold; color: red;">Remaining Balance: ₱<?php echo e(number_format($remainingBalance, 2)); ?></div>
        <?php endif; ?>
    </div>

</div>

<?php /**PATH C:\laragon\www\public_html - Copy (2)\resources\views/reusable/invoices/print_invoices.blade.php ENDPATH**/ ?>