<?php
    $error_number = 500;
?>

<?php $__env->startSection('title'); ?>
    
    Sa fonction pas
<?php $__env->stopSection(); ?>

<?php $__env->startSection('description'); ?>
    <?php
        $default_error_message = 'An internal server error has occurred. If the error persists please contact the development team.';
    ?>
    <?php echo isset($exception)
        ? ($exception->getMessage()
            ? e($exception->getMessage())
            : $default_error_message)
        : $default_error_message; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('errors.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\auzone_libre\resources\views/errors/500.blade.php ENDPATH**/ ?>