<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/custom/style.css')); ?>">
    <div class="d-flex p-2">
        <div class="parent">
            <a href="" class="button1">Users</a>
            <a href="" class="button2">Majors</a>
        </div>
        <br>
        <br>
        <div class="parent">
            <a href="" class="button3">Doctors</a>
            <a href="" class="button4">Booking</a>
        </div>
        <br>
        <br>
        <div class="parent">
            <a href="" class="button5">Contacts</a>
        </div>






    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\My Courses\Back End\Eraa Soft Course\Sessions codes\New folder (15)\first_project\resources\views/admin/index.blade.php ENDPATH**/ ?>