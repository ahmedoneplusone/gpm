<?php $__env->startSection('content'); ?>
<?php
    $facs = \App\Faculty::get();
    $depts = \App\Departments::get();
 ?>
<div class="row  form-group">
    <div class="col-md-8 col-md-offset-2">

    <h1>Graduation Project</h1>
    <h5>Step 1: Team Leader</h5>

    </div>
  </div>

    <?php echo Form::open(['action' => 'StudentController@register_gp_SLeader_post', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>


        <div class="row form-group">
            <div class="form-group<?php echo e($errors->has('student_id') ? ' has-error' : ''); ?>">
                 <div class="col-md-8 col-md-offset-2">
            <?php echo e(Form::label('student_id', 'ID')); ?>

            <?php echo e(Form::number('student_id', $studentL->student_id , ['class' => 'form-control', 'placeholder' => 'Your Faculty ID'])); ?>

                <div class="col-md-6">

                    <?php if($errors->has('student_id')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('student_id')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        </div>


         <div class="row form-group">
                <div class="col-md-8 col-md-offset-2">
                    <?php echo e(Form::label('faculty', 'Faculty')); ?>

                    <select class="search_iput" style="width:100%" name="faculty">

                        <?php $__currentLoopData = $facs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fac): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php if($fac->id ==  $studentL->faculty_id): ?>

                                <option selected value="<?php echo e($fac->id); ?>">
                                    <?php echo e($fac->little_name); ?>

                                </option>

                            <?php else: ?>
                            <option value="<?php echo e($dept->id); ?>">
                                    <?php echo e($dept->name); ?>

                                </option>
                                <?php endif; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>

                </div>
            </div>


        <div class="row form-group">
                <div class="col-md-8 col-md-offset-2">
                    <?php echo e(Form::label('dept', 'Department')); ?>

                    <select class="search_iput" style="width:100%" name="dept">

                        <?php $__currentLoopData = $depts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dept): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <?php if($dept->id ==  $studentL->dept_id): ?>

                                <option selected value="<?php echo e($dept->id); ?>">
                                    <?php echo e($dept->name); ?>

                                </option>

                            
                                <?php else: ?>
                            <option value="<?php echo e($dept->id); ?>">
                                    <?php echo e($dept->name); ?>

                                </option>
                                <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </select>

                </div>
            </div>

         <div class="row form-group">
               <div class="col-md-12 text-center">

        <?php echo e(Form::submit('Next', ['class'=>'btn btn-primary'])); ?>

                </div>
</div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\HOME\Desktop\GPM\resources\views/students/register_gp_SLeader.blade.php */ ?>