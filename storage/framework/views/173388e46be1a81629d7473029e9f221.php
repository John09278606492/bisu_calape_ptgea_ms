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
    <!--[if BLOCK]><![endif]--><?php if(!$studentInfo): ?>
        <!-- Display message if no student found -->
        <p class="text-lg italic text-center text-gray-500">Student not found.</p>
    <?php else: ?>
        <!-- If studentInfo exists, display the UI -->
        <?php if (isset($component)) { $__componentOriginal447636fe67a19f9c79619fb5a3c0c28d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal447636fe67a19f9c79619fb5a3c0c28d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.tabs.index','data' => ['label' => 'Content tabs']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::tabs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => 'Content tabs']); ?>
            <?php if (isset($component)) { $__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.tabs.item','data' => ['active' => $activeTab === 'student info','wire:click' => '$set(\'activeTab\', \'student info\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::tabs.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($activeTab === 'student info'),'wire:click' => '$set(\'activeTab\', \'student info\')']); ?>
                Student Info
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f)): ?>
<?php $attributes = $__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f; ?>
<?php unset($__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f)): ?>
<?php $component = $__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f; ?>
<?php unset($__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.tabs.item','data' => ['active' => $activeTab === 'enrollment','wire:click' => '$set(\'activeTab\', \'enrollment\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::tabs.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($activeTab === 'enrollment'),'wire:click' => '$set(\'activeTab\', \'enrollment\')']); ?>
                Enrollment Info
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f)): ?>
<?php $attributes = $__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f; ?>
<?php unset($__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f)): ?>
<?php $component = $__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f; ?>
<?php unset($__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.tabs.item','data' => ['active' => $activeTab === 'siblings','wire:click' => '$set(\'activeTab\', \'siblings\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::tabs.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($activeTab === 'siblings'),'wire:click' => '$set(\'activeTab\', \'siblings\')']); ?>
                Siblings
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f)): ?>
<?php $attributes = $__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f; ?>
<?php unset($__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f)): ?>
<?php $component = $__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f; ?>
<?php unset($__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.tabs.item','data' => ['active' => $activeTab === 'invoice','wire:click' => '$set(\'activeTab\', \'invoice\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::tabs.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($activeTab === 'invoice'),'wire:click' => '$set(\'activeTab\', \'invoice\')']); ?>
                Invoice
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f)): ?>
<?php $attributes = $__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f; ?>
<?php unset($__attributesOriginal35d4caf141547fb7d125e4ebd3c1b66f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f)): ?>
<?php $component = $__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f; ?>
<?php unset($__componentOriginal35d4caf141547fb7d125e4ebd3c1b66f); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal447636fe67a19f9c79619fb5a3c0c28d)): ?>
<?php $attributes = $__attributesOriginal447636fe67a19f9c79619fb5a3c0c28d; ?>
<?php unset($__attributesOriginal447636fe67a19f9c79619fb5a3c0c28d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal447636fe67a19f9c79619fb5a3c0c28d)): ?>
<?php $component = $__componentOriginal447636fe67a19f9c79619fb5a3c0c28d; ?>
<?php unset($__componentOriginal447636fe67a19f9c79619fb5a3c0c28d); ?>
<?php endif; ?>

        
        <!--[if BLOCK]><![endif]--><?php if($activeTab === 'student info'): ?>
            <?php if (isset($component)) { $__componentOriginalee08b1367eba38734199cf7829b1d1e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee08b1367eba38734199cf7829b1d1e9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.section.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <?php if (isset($component)) { $__componentOriginal44a508883f9207a939367952373b4021 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44a508883f9207a939367952373b4021 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.fieldset','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::fieldset'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('label', null, []); ?> Student IDN <?php $__env->endSlot(); ?>
                        <span class="font-bold"><?php echo e($studentInfo->studentidn); ?></span>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44a508883f9207a939367952373b4021)): ?>
<?php $attributes = $__attributesOriginal44a508883f9207a939367952373b4021; ?>
<?php unset($__attributesOriginal44a508883f9207a939367952373b4021); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44a508883f9207a939367952373b4021)): ?>
<?php $component = $__componentOriginal44a508883f9207a939367952373b4021; ?>
<?php unset($__componentOriginal44a508883f9207a939367952373b4021); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal44a508883f9207a939367952373b4021 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44a508883f9207a939367952373b4021 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.fieldset','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::fieldset'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('label', null, []); ?> First Name <?php $__env->endSlot(); ?>
                        <span class="font-bold"><?php echo e($studentInfo->firstname); ?></span>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44a508883f9207a939367952373b4021)): ?>
<?php $attributes = $__attributesOriginal44a508883f9207a939367952373b4021; ?>
<?php unset($__attributesOriginal44a508883f9207a939367952373b4021); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44a508883f9207a939367952373b4021)): ?>
<?php $component = $__componentOriginal44a508883f9207a939367952373b4021; ?>
<?php unset($__componentOriginal44a508883f9207a939367952373b4021); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal44a508883f9207a939367952373b4021 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44a508883f9207a939367952373b4021 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.fieldset','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::fieldset'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('label', null, []); ?> Middle Name <?php $__env->endSlot(); ?>
                        <span class="font-bold"><?php echo e($studentInfo->middlename); ?></span>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44a508883f9207a939367952373b4021)): ?>
<?php $attributes = $__attributesOriginal44a508883f9207a939367952373b4021; ?>
<?php unset($__attributesOriginal44a508883f9207a939367952373b4021); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44a508883f9207a939367952373b4021)): ?>
<?php $component = $__componentOriginal44a508883f9207a939367952373b4021; ?>
<?php unset($__componentOriginal44a508883f9207a939367952373b4021); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal44a508883f9207a939367952373b4021 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44a508883f9207a939367952373b4021 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.fieldset','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::fieldset'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('label', null, []); ?> Last Name <?php $__env->endSlot(); ?>
                        <span class="font-bold"><?php echo e($studentInfo->lastname); ?></span>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44a508883f9207a939367952373b4021)): ?>
<?php $attributes = $__attributesOriginal44a508883f9207a939367952373b4021; ?>
<?php unset($__attributesOriginal44a508883f9207a939367952373b4021); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44a508883f9207a939367952373b4021)): ?>
<?php $component = $__componentOriginal44a508883f9207a939367952373b4021; ?>
<?php unset($__componentOriginal44a508883f9207a939367952373b4021); ?>
<?php endif; ?>
                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee08b1367eba38734199cf7829b1d1e9)): ?>
<?php $attributes = $__attributesOriginalee08b1367eba38734199cf7829b1d1e9; ?>
<?php unset($__attributesOriginalee08b1367eba38734199cf7829b1d1e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee08b1367eba38734199cf7829b1d1e9)): ?>
<?php $component = $__componentOriginalee08b1367eba38734199cf7829b1d1e9; ?>
<?php unset($__componentOriginalee08b1367eba38734199cf7829b1d1e9); ?>
<?php endif; ?>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--><?php if($activeTab === 'enrollment'): ?>
        <div class="p-6 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-200">
            <h2 class="mb-4 text-sm font-semibold text-left dark:text-white">Student Information</h2>
            <div class="overflow-x-auto">
                <table class="w-full border border-collapse border-gray-300 min-w-max dark:border-gray-600">
                    <thead>
                        <tr class="bg-gray-100 dark:bg-gray-700 dark:text-gray-300">
                            <th class="p-2 text-xs text-left border border-gray-300 dark:border-gray-600 sm:text-sm">School Year</th>
                            <th class="p-2 text-xs text-left border border-gray-300 dark:border-gray-600 sm:text-sm">Semester</th>
                            <th class="p-2 text-xs text-left border border-gray-300 dark:border-gray-600 sm:text-sm">College</th>
                            <th class="p-2 text-xs text-left border border-gray-300 dark:border-gray-600 sm:text-sm">Program</th>
                            <th class="p-2 text-xs text-left border border-gray-300 dark:border-gray-600 sm:text-sm">Year Level</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $studentSchoolyear; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enrollment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="dark:hover:bg-gray-700">
                                <td class="p-2 text-xs border border-gray-300 dark:border-gray-600 sm:text-sm">
                                    <?php echo e(optional($enrollment->schoolyear)->schoolyear ?? 'N/A'); ?>

                                </td>
                                <td class="p-2 text-xs border border-gray-300 dark:border-gray-600 sm:text-sm">
                                    <?php echo e($enrollment->semesters->pluck('semester')->join(', ') ?? 'N/A'); ?>

                                </td>
                                <td class="p-2 text-xs border border-gray-300 dark:border-gray-600 sm:text-sm">
                                    <?php echo e(optional($enrollment->college)->college ?? 'N/A'); ?>

                                </td>
                                <td class="p-2 text-xs border border-gray-300 dark:border-gray-600 sm:text-sm">
                                    <?php echo e(optional($enrollment->program)->program ?? 'N/A'); ?>

                                </td>
                                <td class="p-2 text-xs border border-gray-300 dark:border-gray-600 sm:text-sm">
                                    <?php echo e(optional($enrollment->yearlevel)->yearlevel ?? 'N/A'); ?>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->


        <!--[if BLOCK]><![endif]--><?php if($activeTab === 'siblings'): ?>
            <?php if (isset($component)) { $__componentOriginalee08b1367eba38734199cf7829b1d1e9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalee08b1367eba38734199cf7829b1d1e9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.section.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <!--[if BLOCK]><![endif]--><?php if($studentInfo->siblings->isEmpty()): ?>
                    <p class="text-sm italic text-center text-gray-500">No siblings found.</p>
                <?php else: ?>
                    <table class="w-full mb-6 border border-collapse border-gray-300 dark:border-gray-600">
                        <thead>
                            <tr class="bg-gray-100 dark:bg-gray-700 dark:text-gray-300">
                                <th class="p-2 text-left border border-gray-300 dark:border-gray-600">First Name</th>
                                <th class="p-2 text-left border border-gray-300 dark:border-gray-600">Middle Name</th>
                                <th class="p-2 text-left border border-gray-300 dark:border-gray-600">Last Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $studentInfo->siblings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siblingsInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="dark:hover:bg-gray-700">
                                    <td class="p-2 border border-gray-300 dark:border-gray-600"><?php echo e($siblingsInfo->stud->firstname); ?></td>
                                    <td class="p-2 border border-gray-300 dark:border-gray-600"><?php echo e($siblingsInfo->stud->middlename); ?></td>
                                    <td class="p-2 border border-gray-300 dark:border-gray-600"><?php echo e($siblingsInfo->stud->lastname); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                        </tbody>
                    </table>
                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalee08b1367eba38734199cf7829b1d1e9)): ?>
<?php $attributes = $__attributesOriginalee08b1367eba38734199cf7829b1d1e9; ?>
<?php unset($__attributesOriginalee08b1367eba38734199cf7829b1d1e9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee08b1367eba38734199cf7829b1d1e9)): ?>
<?php $component = $__componentOriginalee08b1367eba38734199cf7829b1d1e9; ?>
<?php unset($__componentOriginalee08b1367eba38734199cf7829b1d1e9); ?>
<?php endif; ?>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--><?php if($activeTab === 'invoice'): ?>
            <!--[if BLOCK]><![endif]--><?php if(!$payments || $payments->isEmpty()): ?>
                <p class="text-lg italic text-center text-gray-500">No records found for this student.</p>
            <?php else: ?>
                <?php
                    $totalCollections = 0;
$totalYearLevelPayments = 0;
$totalPays = 0;
$allFees = collect();
$totalPaid = 0;
$totalUnpaid = 0;

foreach ($payments as $enrollment) {
    $schoolYear = $enrollment->schoolyear->schoolyear;

    foreach ($enrollment->yearlevelpayments as $fee) {
        $allFees->push([
            'type' => 'Year Level Fee',
            'description' => $fee->description . ' - Year Level ' . $fee->yearlevel->yearlevel,
            'amount' => $fee->amount,
            'schoolyear' => $schoolYear
        ]);
        $totalYearLevelPayments += $fee->amount;
    }

    foreach ($enrollment->collections as $fee) {
        $allFees->push([
            'type' => 'School Year Fee',
            'description' => $fee->description . ' - Semester ' . optional($fee->semester)->semester,
            'amount' => $fee->amount,
            'collection_status' => $fee->pivot->collection_status ?? 'unpaid',
            'schoolyear' => $schoolYear
        ]);

        $totalCollections += $fee->amount;

        if ($fee->pivot->collection_status === 'paid') {
            $totalPaid += $fee->amount;
        } else {
            $totalUnpaid += $fee->amount;
        }
    }

    $totalPays += $enrollment->pays
        ->where('status1', 'paid')
        ->sum('amount')
        - $enrollment->pays
        ->where('status1', 'refunded')
        ->sum('amount');
}


                    $groupedFees = $allFees->groupBy('schoolyear');
                    $remainingBalance = ($totalCollections + $totalYearLevelPayments) - $totalPays;
                ?>

                <?php if (isset($component)) { $__componentOriginal505efd9768415fdb4543e8c564dad437 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal505efd9768415fdb4543e8c564dad437 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.input.wrapper','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::input.wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php if (isset($component)) { $__componentOriginal97dc683fe4ff7acce9e296503563dd85 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal97dc683fe4ff7acce9e296503563dd85 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.input.select','data' => ['wire:model' => 'selectedSchoolYear','wire:change' => '$refresh']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::input.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'selectedSchoolYear','wire:change' => '$refresh']); ?>
                        <option value="all">All</option>
                        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $schoolYears ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <option value="<?php echo e($sy->id); ?>" <?php echo e($sy->id == $selectedSchoolYear ? 'selected' : ''); ?>>
                                <?php echo e($sy->schoolyear); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <option value="">No school years available</option>
                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal97dc683fe4ff7acce9e296503563dd85)): ?>
<?php $attributes = $__attributesOriginal97dc683fe4ff7acce9e296503563dd85; ?>
<?php unset($__attributesOriginal97dc683fe4ff7acce9e296503563dd85); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal97dc683fe4ff7acce9e296503563dd85)): ?>
<?php $component = $__componentOriginal97dc683fe4ff7acce9e296503563dd85; ?>
<?php unset($__componentOriginal97dc683fe4ff7acce9e296503563dd85); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal505efd9768415fdb4543e8c564dad437)): ?>
<?php $attributes = $__attributesOriginal505efd9768415fdb4543e8c564dad437; ?>
<?php unset($__attributesOriginal505efd9768415fdb4543e8c564dad437); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal505efd9768415fdb4543e8c564dad437)): ?>
<?php $component = $__componentOriginal505efd9768415fdb4543e8c564dad437; ?>
<?php unset($__componentOriginal505efd9768415fdb4543e8c564dad437); ?>
<?php endif; ?>


                <div class="flex justify-end mt-4">
                    <a href="<?php echo e(route('PRINT.INVOICE.DOWNLOAD', ['id' => $payments->first()->id, 'schoolYear' => $selectedSchoolYear ?? 'all'])); ?>">
                        <?php if (isset($component)) { $__componentOriginal6330f08526bbb3ce2a0da37da512a11f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'filament::components.button.index','data' => ['size' => 'sm','class' => 'w-auto','icon' => 'heroicon-m-arrow-down-tray','color' => 'danger']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'sm','class' => 'w-auto','icon' => 'heroicon-m-arrow-down-tray','color' => 'danger']); ?>
                            Download PDF
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6330f08526bbb3ce2a0da37da512a11f)): ?>
<?php $attributes = $__attributesOriginal6330f08526bbb3ce2a0da37da512a11f; ?>
<?php unset($__attributesOriginal6330f08526bbb3ce2a0da37da512a11f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6330f08526bbb3ce2a0da37da512a11f)): ?>
<?php $component = $__componentOriginal6330f08526bbb3ce2a0da37da512a11f; ?>
<?php unset($__componentOriginal6330f08526bbb3ce2a0da37da512a11f); ?>
<?php endif; ?>
                    </a>
                </div>

                <div class="p-3 bg-white rounded-lg shadow sm:p-6 dark:bg-gray-800 dark:text-gray-200">
                    <!-- Invoice Header -->
                    <h1 class="mb-4 text-xl font-bold text-right sm:mb-6 sm:text-2xl dark:text-white">INVOICE</h1>
                    <p style="margin-bottom: 0.25rem; text-align: right; font-size: 15px; line-height: 0.5;">BISU Calape PTGEA MS</p>

                    <!-- Student Information -->
                    <div class="p-3 mb-4 sm:p-4 sm:mb-6">
                        <h2 class="mb-3 text-lg font-semibold sm:mb-4 sm:text-xl dark:text-white">Student Information</h2>

                        <div class="flex flex-col mb-2 sm:flex-row sm:items-center">
                            <span class="w-32 font-medium">Name:</span>
                            <strong class="flex-1 text-left"><?php echo e($payments->first()->stud->firstname); ?> <?php echo e($payments->first()->stud->middlename); ?> <?php echo e($payments->first()->stud->lastname); ?></strong>
                        </div>

                        <div class="flex flex-col mb-2 sm:flex-row sm:items-center">
                            <span class="w-32 font-medium">Student IDN:</span>
                            <strong class="flex-1 text-left"><?php echo e($payments->first()->stud->studentidn); ?></strong>
                        </div>
                    </div>

                    <!-- Fees Summary -->
                    <div class="p-3 mb-4 sm:p-4 sm:mb-6">
                        <h2 class="mb-3 text-lg font-semibold text-left sm:mb-4 sm:text-xl dark:text-white">Fees Summary</h2>
                        <div class="overflow-x-auto">
                            <table class="w-full mb-4 border border-collapse border-gray-300 sm:mb-6 dark:border-gray-600">
                                <thead>
                                    <tr class="bg-gray-100 dark:bg-gray-700 dark:text-gray-300">
                                        <th class="p-2 text-left border border-gray-300 dark:border-gray-600">Fee Type</th>
                                        <th class="p-2 text-left border border-gray-300 dark:border-gray-600">Description</th>
                                        <th class="p-2 text-left border border-gray-300 dark:border-gray-600">Status</th>
                                        <th class="p-2 text-right border border-gray-300 dark:border-gray-600">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $groupedFees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schoolYear => $fees): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr class="bg-gray-200 dark:bg-gray-800">
                                            <td colspan="4" class="p-2 text-base font-bold text-left border border-gray-300 sm:text-lg dark:border-gray-600">
                                                School Year: <?php echo e($schoolYear); ?>

                                            </td>
                                        </tr>
                                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $fees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $collectionStatus = $fee['collection_status'] ?? null;
                                                $rowClass = is_null($collectionStatus) || $collectionStatus !== 'paid'
                                                    ? 'bg-red-100 text-red-800 dark:bg-red-900 dark:text-red-200'
                                                    : 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200';
                                            ?>

                                            <tr class="<?php echo e($rowClass); ?>">
                                                <td class="p-2 border border-gray-300 dark:border-gray-600 min-w-[100px]">
                                                    <?php echo e($fee['type']); ?>

                                                </td>
                                                <td class="p-2 border border-gray-300 dark:border-gray-600">
                                                    <?php echo e($fee['description']); ?>

                                                </td>
                                                <td class="p-2 border border-gray-300 dark:border-gray-600">
                                                    <?php echo e($collectionStatus ?? 'unpaid'); ?>

                                                </td>
                                                <td class="p-2 text-right border border-gray-300 dark:border-gray-600 whitespace-nowrap">
                                                    ₱<?php echo e(number_format($fee['amount'], 2)); ?>

                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="3" class="p-2 text-center border border-gray-300 dark:border-gray-600 dark:text-gray-400">
                                                No fees available.
                                            </td>
                                        </tr>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </tbody>
                            </table>
                        </div>
                        <!-- Breakdown of Paid, Unpaid, and Total Amounts -->
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
                                <div class="text-right">₱<?php echo e(number_format($totalCollections + $totalYearLevelPayments, 2)); ?></div>
                            </div>
                        </div>

                    </div>

                    <!-- Payment History -->
                    <div class="p-3 mb-4 sm:p-4 sm:mb-6">
                        <h2 class="mb-3 text-lg font-semibold text-left sm:mb-4 sm:text-xl dark:text-white">Payment History</h2>
                        <div class="overflow-x-auto">
                            <table class="w-full mb-4 border border-collapse border-gray-300 sm:mb-6 dark:border-gray-600">
                                <thead>
                                    <tr class="bg-gray-100 dark:bg-gray-700 dark:text-gray-300">
                                        <th class="p-2 border border-gray-300 dark:border-gray-600">Date</th>
                                        <th class="p-2 text-right border border-gray-300 dark:border-gray-600">Status</th>
                                        <th class="p-2 text-right border border-gray-300 dark:border-gray-600">Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $payments->pluck('pays')->flatten(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr class="dark:hover:bg-gray-700">
                                            <td class="p-2 border border-gray-300 dark:border-gray-600 whitespace-nowrap">
                                                <?php echo e($payment->created_at->format('M d, Y h:i a')); ?>

                                            </td>
                                            <td class="p-2 text-right border border-gray-300 dark:border-gray-600">
                                                <?php echo e($payment->status1); ?>

                                            </td>
                                            <td class="p-2 text-right border border-gray-300 dark:border-gray-600 whitespace-nowrap">
                                                ₱<?php echo e(number_format($payment->amount, 2)); ?>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="3" class="p-2 text-center">No payments recorded.</td>
                                        </tr>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                </tbody>
                            </table>
                        </div>
                        <div class="space-y-2">
                            <div class="text-base font-bold text-right sm:text-l">
                                Total Amount Paid: ₱<?php echo e(number_format($totalPays, 2)); ?>

                            </div>
                            <?php
                                $isNegative = $remainingBalance < 0;
                            ?>

                            <hr style="margin: 20px 0; border-top: 2px solid #ccc;" />

                            <!--[if BLOCK]><![endif]--><?php if($isNegative): ?>
                                <div style="text-align: right; font-weight: 900; font-size: 20px; color: green;">
                                    Fully Paid!
                                </div>
                                <div style="text-align: right; font-weight: 900; font-size: 18px; color: goldenrod;">
                                    Refundable Balance: ₱<?php echo e(number_format(abs($remainingBalance), 2)); ?>

                                </div>
                            <?php elseif($remainingBalance == 0): ?>
                                <div style="text-align: right; font-weight: 900; font-size: 20px; color: green;">
                                    Fully Paid!
                                </div>
                            <?php else: ?>
                                <div style="text-align: right; font-weight: 900; font-size: 20px; color: red;">
                                    Remaining Balance: ₱<?php echo e(number_format($remainingBalance, 2)); ?>

                                </div>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        </div>
                    </div>
                </div>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
<?php /**PATH C:\laragon\www\public_html - Copy (2)\resources\views/filament/pages/student-information.blade.php ENDPATH**/ ?>