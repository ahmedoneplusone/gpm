
<nav class="navbar">

<nav class="navbar" id="MainNav">
    <div class="container">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
           <!--  <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <?php echo e(config('app.name', 'Laravel')); ?>

            </a> -->
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <ul class="nav navbar-nav">
              <li><a href="/"> <i class="fas fa-home"></i> <b>HOME</b></a></li>
              <li><a href="/about"> <i class="fab fa-weixin"></i> <b>ABOUT</b></a></li>
              <li><a href="/projects"> <i class="fas fa-database"></i><b> PROJECTS IDEAS</b></a></li>


             <?php if(Auth::check()): ?>
                <?php if(session()->get('type') == 'a'): ?>

                     <li><a href="admin/all_users"> <i class="far fa-user"></i> Users</a></li>

                <?php endif; ?>
              <?php endif; ?>

            <?php if(Auth::check()): ?>
                <?php if(session()->get('type') == 's'): ?>

                    <?php 
                        $projects[] = new App\Project ;
                        $projects = App\Project::all()->where('user_id',auth()->user()->id) ;
                    ?>
        
                    <?php if($projects->count() > 0): ?>
                        <?php  $gp_exist = 0 ?>
                      <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <?php if($p->is_gp == 1): ?>
                            <?php $gp_exist = 1 ?>
                        <?php endif; ?>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php if($gp_exist == 0): ?>
                        <li><a href="<?php echo e(action('StudentController@register_gp_SLeader')); ?>">Register GP</a></li>
                      <?php endif; ?>
                    <?php else: ?>
                        <li><a href="<?php echo e(action('StudentController@register_gp_SLeader')); ?>">Register GP</a></li>
                    <?php endif; ?>  



                <?php endif; ?>
            <?php endif; ?>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <?php if(Auth::guest()): ?>
                    <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                    <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                <?php else: ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/dashboard">Dashboard</a></li>
                            <li>
                                <a href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<?php /* C:\Users\HOME\Desktop\GPM\resources\views/inc/navbar.blade.php */ ?>