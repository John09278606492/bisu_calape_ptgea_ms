<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'ownerRecord',
    'relationManager',
    'shouldHideRelationManagerHeading' => true,
    'fixIconPaddingLeft',
    'isModalSlideOver'
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'ownerRecord',
    'relationManager',
    'shouldHideRelationManagerHeading' => true,
    'fixIconPaddingLeft',
    'isModalSlideOver'
]); ?>
<?php foreach (array_filter(([
    'ownerRecord',
    'relationManager',
    'shouldHideRelationManagerHeading' => true,
    'fixIconPaddingLeft',
    'isModalSlideOver'
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="<?php echo \Illuminate\Support\Arr::toCssClasses([
    "-mx-6 [&_.fi-ta-ctn]:![box-shadow:none]",
    "-ms-[5.25rem]" => $fixIconPaddingLeft && !$isModalSlideOver,
    "[&_.fi-ta-header-heading]:hidden" => $shouldHideRelationManagerHeading,
]); ?>">
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split($relationManager, ['ownerRecord' => $ownerRecord]);

$__html = app('livewire')->mount($__name, $__params, 'lw-2129098614-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
</div>
<?php /**PATH C:\laragon\www\public_html - Copy (2)\vendor\guava\filament-modal-relation-managers\src\/../resources/views/components/modal-relation-manager.blade.php ENDPATH**/ ?>