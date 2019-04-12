<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php if(!empty($gp)): ?>
                        <h3>Your Graduation Project</h3>
                            <div class="row form-group">
                                        <div class="col-md-4">
                                         <?php echo e($gp->title); ?>

                                               </div>
                                               <div class="col-md-8 ">
                                                <a href="/projects/<?php echo e($gp->id); ?>/edit" class="btn btn-default">Edit</a>
                                                 <?php echo Form::open(['action' => ['ProjectsController@destroy', $gp->id], 'method' => 'POST','style'=>'display:inline']); ?>

                                                <?php echo e(Form::hidden('_method', 'DELETE')); ?>


                                                <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>


                                            <?php echo Form::close(); ?>

                                    </div>
                                    </div>
                        <hr/>
                        <?php else: ?>
                        <p>You have no Graduation Project</p>
                        <hr/>
                    <?php endif; ?>
                    <?php if(count($projects) > 0): ?>
                        <h3>Your Projects Ideas</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th  class="text-center">Actions</th>
                            </tr>
                            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($project->is_gp == 0): ?>
                                    <tr>
                                        <td><?php echo e($project->title); ?></td>
                                        <td  class="text-center"><a href="/projects/<?php echo e($project->id); ?>/edit" class="btn btn-default">Edit</a>
                                            
                                            <?php echo Form::open(['action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST','style'=>'display:inline']); ?>

                                                <?php echo e(Form::hidden('_method', 'DELETE')); ?>


                                                <?php echo e(Form::submit('Delete', ['class' => 'btn btn-danger'])); ?>


                                            <?php echo Form::close(); ?>

                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    <?php else: ?>
                        <p>You have no project ideas</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\HOME\Desktop\GPM\resources\views/dashboard.blade.php */ ?>