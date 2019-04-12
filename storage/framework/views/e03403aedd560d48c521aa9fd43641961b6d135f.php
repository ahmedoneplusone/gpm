

<?php if(session('success')): ?>

<div class="row">
    <div class="col-md-8 col-md-offset-2">

    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>
<?php endif; ?>

    </div>
</div>
<?php /* C:\Users\HOME\Desktop\GPM\resources\views/inc/messages.blade.php */ ?>