<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
	<div class="bg-primary">
		<h1> nombre de los usuarios</h1>
		<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 			<p><?php echo e($user->name); ?></p>	
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('users-table', [])->html();
} elseif ($_instance->childHasBeenRendered('lk8PhCT')) {
    $componentId = $_instance->getRenderedChildComponentId('lk8PhCT');
    $componentTag = $_instance->getRenderedChildComponentTagName('lk8PhCT');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('lk8PhCT');
} else {
    $response = \Livewire\Livewire::mount('users-table', []);
    $html = $response->html();
    $_instance->logRenderedChild('lk8PhCT', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?></livewire:users-table>
	</div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.welcome','data' => []]); ?>
<?php $component->withName('jet-welcome'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH /home/vagrant/proyectoslarabel/jhvj/jeststream/resources/views/users.blade.php ENDPATH**/ ?>