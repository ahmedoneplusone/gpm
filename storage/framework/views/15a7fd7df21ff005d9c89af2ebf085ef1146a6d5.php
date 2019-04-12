<?php $__env->startSection('content'); ?>
    <div class="_sec_navbar">
    	<div class="_navbar_input_search">
    		<form method="POST" >
    			<?php echo csrf_field(); ?>
    			<input type="text" name="q" class="search_iput">
    			<button type="submit" class="_search_submit"><i class="fa fa-search"></i></button>
    		</form>
    	</div>
    </div>
    <br><br>
    <div class="container">
    	<div class="row">
    		<div class="col-md-3 col-sm-12 col-xs-12">
    			<div class="_con_card" style="height: 250px;">
    				<h1 class="h1_optimzed"> <i class="fas fa-bell"></i> <b>RECENT FACULTIES</b></h1>
    				<div class="Content-Li">
    					<?php if(count($companies) >= 1): ?>
    							<?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    							<ul>
		    						<li>
		    							<span><b><?php echo e($company->user->name); ?></b></span> 
		    							<p style="line-height: .5;"> <small><strong>2 min ago</strong></small></p>
		    						</li>
	    						</ul>
	    						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    						<?php else: ?>
    							<div class="text-center">
    								<p style="color:#e74c3c"><small><strong>NO FACULITIES YET</strong></small></p>
    							</div>
    						<?php endif; ?>
    				</div>
    			</div>
    			<br>
    			<div class="_con_card" style="height: 250px;">
    				<h1 class="h1_optimzed"> <i class="fas fa-bell"></i> <b>RECENET COMPANIES</b></h1>
    				<div class="Content-Li">
    					
    						<?php if(count($companies) >= 1): ?>
    							<?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    							<ul>
		    						<li>
		    							<span><b><?php echo e($company->user->name); ?></b></span> 
		    							<p style="line-height: .5;"> <small><strong>2 min ago</strong></small></p>
		    						</li>
	    						</ul>
	    						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    						<?php else: ?>
    							<div class="text-center">
    								<p style="color:#e74c3c"><small><strong>NO COMPAINES YET</strong></small></p>
    							</div>
    						<?php endif; ?>
    					
    				</div>
    			</div>
    		</div>
    		<div class="col-md-9 col-sm-12 col-xs-12">
    			<div class="_con_card">
    				<h1 class="h1_optimzed"><i class="fas fa-database"></i> <strong>RECENET PROJECTS</strong></h1>
    				<?php if(count($projects) >= 1): ?>
    					<ul>
	    					<?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	    						
	    							<li>
	    								<div class="Projects">
		    								
		    							</div>
	    							</li>
	    						
	    					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    					</ul>
    				<?php else: ?>
    					<div class="text-center">
    						<p style="color:#e74c3c;"><small><strong>NO PROJECTS YET</strong></small></p>
    					</div>
    				<?php endif; ?>
    			</div>
    		</div>
    	</div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\HOME\Desktop\GPM\resources\views/pages/index.blade.php */ ?>