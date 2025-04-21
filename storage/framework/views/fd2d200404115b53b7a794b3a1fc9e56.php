<style>
    @page {
        size: 350px auto; /* Set the width to match your container width */
        margin: 0; /* Remove default margins for a snug fit */
    }
    body {
        margin: 0;
        padding: 0;
    }
</style>
<?php
    $totalCollections = 0;
    $totalYearLevelPayments = 0;
    $totalPays = $payments->pluck('pays')->flatten()
    ->where('status1', 'paid')->sum('amount')
    - $payments->pluck('pays')->flatten()
    ->where('status1', 'refunded')->sum('amount');
    $allFees = collect();

    foreach ($payments as $enrollment) {
        $schoolYear = $enrollment->schoolyear->schoolyear ?? 'N/A';

        foreach ($enrollment->yearlevelpayments as $fee) {
            $allFees->push([
                'type' => 'Year Level Fee',
                'description' => $fee->description . ' - Year Level ' . optional($fee->yearlevel)->yearlevel,
                'amount' => $fee->amount,
                'schoolyear' => $schoolYear
            ]);
            $totalYearLevelPayments += $fee->amount;
        }

        $totalPaid = 0;
        $totalUnpaid = 0;
        // This line was moved to the top, so we comment it here to avoid reset
        // $totalCollections = 0;

        foreach ($enrollment->collections as $fee) {
            // Push the fee data into the collection
            $allFees->push([
                'type' => 'School Year Fee',
                'description' => $fee->description . ' - Semester ' . optional($fee->semester)->semester,
                'amount' => $fee->amount,
                'collection_status' => $fee->pivot->collection_status ?? 'unpaid', // Default if null
                'schoolyear' => $schoolYear
            ]);

            // Accumulate the total collection amount
            $totalCollections += $fee->amount;

            // Calculate totalPaid and totalUnpaid based on collection status
            if ($fee->pivot->collection_status === 'paid') {
                $totalPaid += $fee->amount;
            } else {
                $totalUnpaid += $fee->amount;
            }
        }
    }

    $groupedFees = $allFees->groupBy('schoolyear');
    $remainingBalance = ($totalCollections + $totalYearLevelPayments) - $totalPays;
?>

<div style="padding: 10px; background-color: white; font-family: 'DejaVu Sans', sans-serif; font-size: 12px;">
    <h1 style="text-align: right; font-size: 16px; margin-bottom: 10px;">INVOICE</h1>
    <p style="margin-bottom: 0.25rem; text-align: right; font-size: 15px; line-height: 0.5;">BISU Calape PTGEA MS</p>

    <div style="margin-bottom: 10px;">
        <h2 style="font-size: 14px; margin-bottom: 5px;">Student Information</h2>
        <?php if($payments->isNotEmpty()): ?>
            <div><strong>Name:</strong> <?php echo e(optional($payments->first()->stud)->firstname); ?> <?php echo e(optional($payments->first()->stud)->middlename); ?> <?php echo e(optional($payments->first()->stud)->lastname); ?></div>
            <div><strong>Student IDN:</strong> <?php echo e(optional($payments->first()->stud)->studentidn); ?></div>
        <?php endif; ?>
    </div>

    <div>
        <h2 style="font-size: 14px; margin-bottom: 5px;">Fees Summary</h2>
        <table style="width: 100%; border-collapse: collapse; font-size: 12px;">
            <thead>
                <tr style="background-color: #f0f0f0;">
                    <th style="border: 1px solid #ccc; padding: 5px; text-align: left;">Fee Type</th>
                    <th style="border: 1px solid #ccc; padding: 5px; text-align: left;">Description</th>
                    <th style="border: 1px solid #ccc; padding: 5px; text-align: left;">Status</th>
                    <th style="border: 1px solid #ccc; padding: 5px; text-align: right;">Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $groupedFees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schoolYear => $fees): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr style="background-color: #e0e0e0;">
                        <td colspan="4" style="border: 1px solid #ccc; padding: 5px; font-weight: bold;">School Year: <?php echo e($schoolYear); ?></td>
                    </tr>
                    <?php $__currentLoopData = $fees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $textColor = $fee['collection_status'] == 'paid' ? 'green' : 'red';
                        ?>
                        <tr style="color: <?php echo e($textColor); ?>;">
                            <td style="border: 1px solid #ccc; padding: 5px;"><?php echo e($fee['type']); ?></td>
                            <td style="border: 1px solid #ccc; padding: 5px;"><?php echo e($fee['description']); ?></td>
                            <td style="border: 1px solid #ccc; padding: 5px;"><?php echo e($fee['collection_status']); ?></td>
                            <td style="border: 1px solid #ccc; padding: 5px; text-align: right;">₱<?php echo e(number_format($fee['amount'], 2)); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4" style="border: 1px solid #ccc; padding: 5px; text-align: center;">No fees available.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>

        <!-- Breakdown of Paid, Unpaid, and Total Amounts -->
        <div style="text-align: right; margin-top: 5px;">
            <div style="margin-bottom: 1px; font-size: 9px;">
                <strong>Total Amount Paid:</strong> ₱<?php echo e(number_format($totalPaid, 2)); ?>

            </div>
            <div style="margin-bottom: 1px; font-size: 9px;">
                <strong>Total Amount Unpaid:</strong> ₱<?php echo e(number_format($totalUnpaid, 2)); ?>

            </div>
            <div style="font-weight: bold; margin-top: 1px; font-size: 11px;">
                <strong>Total Amount Due:</strong> ₱<?php echo e(number_format($totalCollections + $totalYearLevelPayments, 2)); ?>

            </div>
        </div>
    </div>

    <div>
        <h2 style="font-size: 14px; margin-bottom: 5px;">Payment History</h2>
        <table style="width: 100%; border-collapse: collapse; font-size: 12px;">
            <thead>
                <tr style="background-color: #f0f0f0;">
                    <th style="border: 1px solid #ccc; padding: 5px;">Date</th>
                    <th style="border: 1px solid #ccc; padding: 5px; text-align: right;">Status</th>
                    <th style="border: 1px solid #ccc; padding: 5px; text-align: right;">Amount</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $payments->pluck('pays')->flatten(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td style="border: 1px solid #ccc; padding: 5px;"><?php echo e($payment->created_at->format('M d, Y h:i a')); ?></td>
                        <td style="border: 1px solid #ccc; padding: 5px; text-align: right;"><?php echo e(ucfirst($payment->status1)); ?></td>
                        <td style="border: 1px solid #ccc; padding: 5px; text-align: right;">₱<?php echo e(number_format($payment->amount, 2)); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="3" style="border: 1px solid #ccc; padding: 5px; text-align: center;">No payments recorded.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
        <div style="text-align: right; font-weight: bold; margin-top: 5px;">Total Amount Paid: ₱<?php echo e(number_format($totalPays, 2)); ?></div>
        
        <?php
            $isNegative = $remainingBalance < 0;
        ?>

        <hr style="margin: 20px 0; border-top: 2px solid #ccc;" />

        <?php if($isNegative): ?>
            <div style="text-align: right; font-family: 'DejaVu Sans', sans-serif; font-size: 16px; font-weight: bold; color: green;">
                Fully Paid!
            </div>
            <div style="text-align: right; font-family: 'DejaVu Sans', sans-serif; font-size: 16px; font-weight: bold; color: goldenrod;">
                Refundable Balance: ₱<?php echo e(number_format(abs($remainingBalance), 2)); ?>

            </div>
        <?php elseif($remainingBalance == 0): ?>
            <div style="text-align: right; font-family: 'DejaVu Sans', sans-serif; font-size: 16px; font-weight: bold; color: green;">
                Fully Paid!
            </div>
        <?php else: ?>
            <div style="text-align: right; font-family: 'DejaVu Sans', sans-serif; font-size: 16px; font-weight: bold; color: red;">
                Remaining Balance: ₱<?php echo e(number_format($remainingBalance, 2)); ?>

            </div>
        <?php endif; ?>

    </div>
</div>


<?php /**PATH C:\laragon\www\public_html - Copy (2)\resources\views/reusable/invoices/new_print_invoices.blade.php ENDPATH**/ ?>