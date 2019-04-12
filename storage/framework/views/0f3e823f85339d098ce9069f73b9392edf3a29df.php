<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-8 col-md-offset-2">

    <h1>Projects Ideas</h1>
    <a href="/projects/create" class="btn btn-primary">Create Project Idea</a>



<br/><br/>



    <?php if(count($projects) > 0): ?>
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="well">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/projects/<?php echo e($project->id); ?>"><?php echo e($project->title); ?></a></h3>
                        <small>Written on <?php echo e($project->created_at); ?> by <?php echo e($project->user->name); ?></small>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($projects->links()); ?>

    <?php else: ?>
        <p>No projects found</p>
    <?php endif; ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\HOME\Desktop\GPM\resources\views/projects/index.blade.php */ ?>