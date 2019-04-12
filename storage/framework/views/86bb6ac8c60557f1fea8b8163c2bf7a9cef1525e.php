<?php
    $user_profs = \App\User::get();
    $prof = new \App\Professor;
    $studL = \App\Student::get()->where('user_id',auth()->user()->id)->first();
 ?>
<?php $__env->startSection('content'); ?>

  <div class="row  form-group">
    <div class="col-md-8 col-md-offset-2">

    <h1>Graduation Project</h1>
    <h5>Step 3: Project Details</h5>

    </div>
  </div>
  
     <?php echo Form::open(['action' => 'StudentController@register_gp_Project_post', 'method' => 'POST', 'enctype' => 'multipart/form-data']); ?>




        <div class="row  form-group">
            <div class="form-group<?php echo e($errors->has('title') ? ' has-error' : ''); ?>">
                            <div class="col-md-8 col-md-offset-2">

            <?php echo e(Form::label('title', 'Title')); ?>

            <?php echo e(Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])); ?>


        <div class="col-md-6">

                    <?php if($errors->has('title')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('title')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            </div>
        </div>

        <div class="row form-group">
            <div class="form-group<?php echo e($errors->has('body') ? ' has-error' : ''); ?>">
                            <div class="col-md-8 col-md-offset-2">

            <?php echo e(Form::label('body', 'Body')); ?>

            <?php echo e(Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])); ?>

        <div class="col-md-6">

                    <?php if($errors->has('body')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('body')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
         </div>

        </div>
        

                            <div class="row form-group">

                                        <div class="col-md-8 col-md-offset-2">
                                            
                                            <select class="search_iput" style="width:100%" name="prof">

                                                <option selected disabled>Select your Professor Supervisor.</option>

                                                <?php $__currentLoopData = $user_profs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_prof): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <?php if($user_prof->type == 'p'): ?>

                                                        <?php echo e($prof =  \App\Professor::get()->where('user_id',$user_prof->id)->first()); ?>


                                                        <?php if($prof->dept_id == $studL->dept_id): ?>

                                                            <option value="<?php echo e($user_prof->id); ?>">
                                                                <?php echo e($user_prof->name); ?>

                                                            </option>

                                                        <?php endif; ?>

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
<?php /* C:\Users\HOME\Desktop\GPM\resources\views/students/register_gp_Project.blade.php */ ?>