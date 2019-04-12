<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-8 col-md-offset-2">

    <a href="/projects" class="btn btn-default">Go Back</a>
    <br><br>
    <div class="well">
    <h1><?php echo e($project->title); ?></h1>
    <br><br>
    <div style="word-wrap: break-word;">
        <?php echo $project->body; ?>

    </div>
    <hr>
    <small>Written on <?php echo e($project->created_at); ?> by <?php echo e($project->user->name); ?></small>
    <hr>
    <?php if(!Auth::guest()): ?>
        <?php if(Auth::user()->id == $project->user_id): ?>
            <a href="/projects/<?php echo e($project->id); ?>/edit" class="btn btn-default">Edit</a>

            <?php echo Form::open(['action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

                <?php echo e(Form::hidden('_method', 'DELETE')); ?>

                <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>

            <?php echo Form::close(); ?>

        <?php endif; ?>
    <?php endif; ?>
    </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\HOME\Desktop\GPM\resources\views/projects/show.blade.php */ ?>