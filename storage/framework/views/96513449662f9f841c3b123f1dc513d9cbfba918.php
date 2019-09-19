<?php $__env->startSection('content'); ?>

<div class="container">

  <?php echo $__env->make('forms.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>