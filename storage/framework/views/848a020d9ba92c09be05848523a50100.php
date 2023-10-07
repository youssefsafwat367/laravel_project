<div>
    <form action="<?php echo e($action); ?>" method="POST">
        <?php echo method_field('delete'); ?>
        <?php echo csrf_field(); ?>
        <input type="submit" class="btn btn-danger" value="Delete">
    </form>
</div>
<?php /**PATH D:\My Courses\Back End\Eraa Soft Course\Sessions codes\New folder (15)\first_project\resources\views/components/delete-button.blade.php ENDPATH**/ ?>