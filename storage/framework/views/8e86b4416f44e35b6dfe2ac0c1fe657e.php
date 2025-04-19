<?php if (isset($component)) { $__componentOriginal166a02a7c5ef5a9331faf66fa665c256 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal166a02a7c5ef5a9331faf66fa665c256 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament-panels::components.page.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament-panels::page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    

    <?php
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
        $totalPaid = $payments->collections->filter(fn ($fee) => optional($fee->pivot)->collection_status === 'paid')->sum('amount');
        $totalUnpaid = $payments->collections->filter(fn ($fee) => optional($fee->pivot)->collection_status !== 'paid')->sum('amount');
    ?>

    <div class="p-6 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-200">
        <h1 class="mb-6 text-2xl font-bold text-right dark:text-white">INVOICE</h1>
        <p class="mb-6 text-right text-.5xl dark:text-white">BISU Calape PTGEA MS</p>

        <div class="p-4 mb-6">
            <h2 class="mb-4 text-xl font-semibold dark:text-white">Student Information</h2>
            <div class="flex mb-2">
                <span class="w-32">Name:</span>
                <span><strong><?php echo e($payments->stud->firstname); ?> <?php echo e($payments->stud->middlename); ?> <?php echo e($payments->stud->lastname); ?></strong></span>
            </div>
            <div class="flex mb-2">
                <span class="w-32">Student IDN:</span>
                <span><strong><?php echo e($payments->stud->studentidn); ?></strong></span>
            </div>
            <div class="flex mb-2">
                <span class="w-32">College:</span>
                <span><strong><?php echo e($payments->college->college); ?></strong></span>
            </div>
            <div class="flex mb-2">
                <span class="w-32">Program:</span>
                <span><strong><?php echo e($payments->program->program); ?></strong></span>
            </div>
            <div class="flex mb-2">
                <span class="w-32">Year Level:</span>
                <span><strong><?php echo e($payments->yearlevel->yearlevel); ?></strong></span>
            </div>
            <div class="flex mb-2">
                <span class="w-32">School Year:</span>
                <span><strong><?php echo e($payments->schoolyear->schoolyear); ?></strong></span>
            </div>
        </div>

        <div class="p-4 mb-6">
            <h2 class="mb-4 text-xl font-semibold text-left dark:text-white">Siblings Information</h2>
            <table class="w-full mb-6 border border-collapse border-gray-300 dark:border-gray-600">
                <thead>
                    <tr class="bg-gray-100 dark:bg-gray-700 dark:text-gray-300">
                        <th class="p-2 text-left border border-gray-300 dark:border-gray-600">Complete Name</th>
                        <th class="p-2 text-left border border-gray-300 dark:border-gray-600">College</th>
                        <th class="p-2 text-left border border-gray-300 dark:border-gray-600">Program</th>
                        <th class="p-2 text-left border border-gray-300 dark:border-gray-600">Year Level</th>
                    </tr>
                </thead>
                <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $siblingsInformation->siblings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siblingsInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="dark:hover:bg-gray-700">
                            <td class="p-2 border border-gray-300 dark:border-gray-600"><?php echo e($siblingsInfo->stud->firstname); ?> <?php echo e($siblingsInfo->stud->middlename); ?> <?php echo e($siblingsInfo->stud->lastname); ?></td>
                            <td class="p-2 border border-gray-300 dark:border-gray-600"><?php echo e($siblingsInfo->stud->enrollments->college->college); ?></td>
                            <td class="p-2 border border-gray-300 dark:border-gray-600"><?php echo e($siblingsInfo->stud->enrollments->program->program); ?></td>
                            <td class="p-2 border border-gray-300 dark:border-gray-600"><?php echo e($siblingsInfo->stud->enrollments->yearlevel->yearlevel); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5" class="p-2 text-center border border-gray-300 dark:border-gray-600 dark:text-gray-400">
                                No sibling/s found.
                            </td>
                        </tr>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>
        </div>

        

        <div class="p-4 mb-6">
            <h2 class="mb-4 text-xl font-semibold text-left dark:text-white">Fund Type</h2>
            <table class="w-full mb-6 border border-collapse border-gray-300 dark:border-gray-600">
                <thead>
                    <tr class="bg-gray-100 dark:bg-gray-700 dark:text-gray-300">
                        <th class="p-2 text-left border border-gray-300 dark:border-gray-600">Description</th>
                        <th class="p-2 text-left border border-gray-300 dark:border-gray-600">Status</th>
                        <th class="p-2 text-right border border-gray-300 dark:border-gray-600">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $payments->collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php
                            $collectionStatus = optional($fee->pivot)->collection_status;
                            $rowClass = is_null($collectionStatus)
                                ? 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200'
                                : 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200';
                        ?>
                        <tr class="<?php echo e($rowClass); ?>">
                            <td class="p-2 border border-gray-300 dark:border-gray-600">
                                <?php echo e($fee->description); ?> - Semester <?php echo e($fee->semester->semester ?? '-'); ?>

                            </td>
                            <td class="p-2 border border-gray-300 dark:border-gray-600">
                                <?php echo e($collectionStatus ?? 'unpaid'); ?>

                            </td>
                            <td class="p-2 text-right border border-gray-300 dark:border-gray-600">
                                ₱<?php echo e(number_format($fee->amount ?? 0, 2)); ?>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="3" class="p-2 text-center border border-gray-300 dark:border-gray-600 dark:text-gray-400">
                                No fund type/s available.
                            </td>
                        </tr>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>

            <div class="w-full mt-2 text-[9px] text-right dark:text-gray-100">
                <div class="grid grid-cols-2 px-2 py-1 border border-gray-300 dark:border-gray-600 dark:bg-gray-700">
                    <div>Total Amount Paid:</div>
                    <div class="text-right">₱<?php echo e(number_format($totalPaid, 2)); ?></div>
                </div>
                <div class="grid grid-cols-2 px-2 py-1 border border-gray-300 dark:border-gray-600 dark:bg-gray-700">
                    <div>Total Amount Unpaid:</div>
                    <div class="text-right">₱<?php echo e(number_format($totalUnpaid, 2)); ?></div>
                </div>
                <div class="grid grid-cols-2 px-2 py-1 text-base font-bold border border-gray-300 dark:border-gray-600 dark:bg-gray-700">
                    <div>Total Amount Due:</div>
                    <div class="text-right">₱<?php echo e(number_format($payments->collections->sum('amount'), 2)); ?></div>
                </div>
            </div>
        </div>


        <div class="p-4 mb-6">
            <h2 class="mb-4 text-xl font-semibold text-left dark:text-white">Payment History</h2>
            <table class="w-full mb-6 border border-collapse border-gray-300 dark:border-gray-600">
                <thead>
                    <tr class="bg-gray-100 dark:bg-gray-700 dark:text-gray-300">
                        <th class="p-2 border border-gray-300 dark:border-gray-600">Date</th>
                        <th class="p-2 text-left border border-gray-300 dark:border-gray-600">Status</th>
                        <th class="p-2 text-right border border-gray-300 dark:border-gray-600">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $payments->pays; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="dark:hover:bg-gray-700">
                            <td class="p-2 border border-gray-300 dark:border-gray-600"><?php echo e($invoice->created_at->format('M d, Y h:i a')); ?></td>
                            <td class="p-2 text-left border border-gray-300 dark:border-gray-600">
                                <span class="font-semibold">
                                    <?php echo e($invoice->status1); ?>

                                </span>
                            </td>
                            <td class="p-2 text-right border border-gray-300 dark:border-gray-600">₱<?php echo e(number_format($invoice->amount, 2)); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="5" class="p-2 text-center border border-gray-300 dark:border-gray-600 dark:text-gray-400">
                                No payment history available.
                            </td>
                        </tr>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </tbody>
            </table>
            <div class="flex justify-end">
                <div class="w-full p-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700">
                    <h2 class="text-xl font-bold text-right dark:text-gray-100">Total Amount Paid: ₱<?php echo e(number_format($payments->pays->sum('amount'), 2)); ?></h2>
                </div>
            </div>
        </div>

        <div class="p-4 mb-6">
            <div class="flex justify-end">
                <div class="w-full p-2 border border-gray-300 dark:border-gray-600 dark:bg-gray-700">
                    <?php
                        $isNegative = $remainingBalance < 0;
                    ?>

                    <!--[if BLOCK]><![endif]--><?php if($isNegative): ?>
                        <h2 class="text-2xl font-bold text-right" style="color: green;">
                            Fully Paid!
                        </h2>
                        <h2 class="text-xl font-bold text-right" style="color: goldenrod;">
                            Refundable Balance: ₱<?php echo e(number_format(abs($remainingBalance), 2)); ?>

                        </h2>
                    <?php elseif($remainingBalance == 0): ?>
                        <h2 class="text-2xl font-bold text-right" style="color: green;">
                            Fully Paid!
                        </h2>
                    <?php else: ?>
                        <h2 class="text-2xl font-bold text-right" style="color: red;">
                            Remaining Balance: ₱<?php echo e(number_format($remainingBalance, 2)); ?>

                        </h2>
                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                </div>
            </div>
        </div>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal166a02a7c5ef5a9331faf66fa665c256)): ?>
<?php $attributes = $__attributesOriginal166a02a7c5ef5a9331faf66fa665c256; ?>
<?php unset($__attributesOriginal166a02a7c5ef5a9331faf66fa665c256); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal166a02a7c5ef5a9331faf66fa665c256)): ?>
<?php $component = $__componentOriginal166a02a7c5ef5a9331faf66fa665c256; ?>
<?php unset($__componentOriginal166a02a7c5ef5a9331faf66fa665c256); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\public_html - Copy (2)\resources\views/filament/resources/enrollment-resource/pages/invoice.blade.php ENDPATH**/ ?>