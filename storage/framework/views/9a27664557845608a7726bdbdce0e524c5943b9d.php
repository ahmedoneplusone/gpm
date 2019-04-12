<?php $__env->startSection('content'); ?>

<div class="row  form-group">
    <div class="col-md-8 col-md-offset-2">

    <h1>Graduation Project</h1>
    <h5>Step 2: Team Members</h5>

    </div>
  </div>

    <?php echo Form::open(['action' => 'StudentController@register_gp_Members_post', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>



            <div class="row  form-group">
            <div class="col-md-8 col-md-offset-2">
                
            <?php echo Form::select('members_number', array('4' => 'Four', '5' => 'Five','6' => 'Six'), 'Four');; ?>

            <?php echo e(Form::label('members_number', 'Members')); ?>


            </div>
            </div>

            <?php for($i=0 ; $i < 4 ; $i++): ?>

            <div class="row  form-group">
            <div class="col-md-8 col-md-offset-2">

                <h3>Member <?php echo e($i+1); ?></h3>

            </div>
            </div>

            <div class="row form-group">
            <div class="form-group<?php echo e($errors->has('name_'.$i) ? ' has-error' : ''); ?>">
            <div class="col-md-8 col-md-offset-2">

                    <?php echo e(Form::label('name', 'Name')); ?>

                    <?php echo e(Form::text('name_'.$i, '', ['class' => 'form-control', 'placeholder' => 'Name'])); ?>

                
               <div class="col-md-6">

                    <?php if($errors->has('name_'.$i)): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('name_'.$i)); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            </div>
        </div>

            <div class="row form-group">
            <div class="form-group<?php echo e($errors->has('email_'.$i) ? ' has-error' : ''); ?>">
            <div class="col-md-8 col-md-offset-2">

                    <?php echo e(Form::label('email', 'E-mail')); ?>

                    <?php echo e(Form::email('email_'.$i, '', ['class' => 'form-control', 'placeholder' => 'E-mail'])); ?>

                
               <div class="col-md-6">

                    <?php if($errors->has('email_'.$i)): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('email_'.$i)); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        </div>

        <div class="row form-group">
            <div class="form-group<?php echo e($errors->has('student_id_'.$i) ? ' has-error' : ''); ?>">
            <div class="col-md-8 col-md-offset-2">

                    <?php echo e(Form::label('student_id', 'ID')); ?>

                    <?php echo e(Form::number('student_id_'.$i, '', ['class' => 'form-control', 'placeholder' => 'Faculty ID'])); ?>

                
               <div class="col-md-6">

                    <?php if($errors->has('student_id_'.$i)): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('student_id_'.$i)); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        </div>


                <hr>

            <?php endfor; ?>
        
        
            <div class="row  form-group">
               <div class="col-md-12 text-center">
                    <?php echo e(Form::submit('Next', ['class'=>'btn btn-primary'])); ?>

            </div>
            </div>


        <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\HOME\Desktop\GPM\resources\views/students/register_gp_Members.blade.php */ ?>