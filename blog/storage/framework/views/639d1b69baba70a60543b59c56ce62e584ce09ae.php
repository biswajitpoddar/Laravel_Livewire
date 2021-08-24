<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel with Live Wire</title>
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('counter')->html();
} elseif ($_instance->childHasBeenRendered('QgbN81z')) {
    $componentId = $_instance->getRenderedChildComponentId('QgbN81z');
    $componentTag = $_instance->getRenderedChildComponentTagName('QgbN81z');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('QgbN81z');
} else {
    $response = \Livewire\Livewire::mount('counter');
    $html = $response->html();
    $_instance->logRenderedChild('QgbN81z', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>;
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html><?php /**PATH D:\Tortoise Git\Laravel_Projects_2021\Laravel_LiveWIre\trunk\blog\resources\views/welcome.blade.php ENDPATH**/ ?>