<?php $__env->startSection('content'); ?>

<div class="container">

    <?php echo $__env->make('forms.register', ['clases'=>'offset-md-4 col-md-4'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>