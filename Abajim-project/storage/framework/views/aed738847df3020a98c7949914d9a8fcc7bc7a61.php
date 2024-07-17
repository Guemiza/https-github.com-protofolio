<?php
    if (empty($authUser) and auth()->check()) {
    $authUser = auth()->user();
    }

    $navBtnUrl = null;
    $navBtnText = null;

    if(request()->is('forums*')) {
    $navBtnUrl = '/forums/create-topic';
    $navBtnText = trans('update.create_new_topic');
    } else {
    $navbarButton = getNavbarButton(!empty($authUser) ? $authUser->role_id : null);

    if (!empty($navbarButton)) {
    $navBtnUrl = $navbarButton->url;
    $navBtnText = $navbarButton->title;
    }
    }
?>

<div id="navbarVacuum"></div>
<nav id="navbar" class="navbar navbar-expand-lg navbar-light">
    <div
        class="<?php echo e((!empty($isPanel) and $isPanel) ? 'container-fluid' : 'container'); ?>">
        <div class="d-flex align-items-center justify-content-between w-100">

            <a class="navbar-brand navbar-order d-flex align-items-center justify-content-center mr-0 <?php echo e((empty($navBtnUrl) and empty($navBtnText)) ? 'ml-auto' : ''); ?>"
                href="/">
                <?php if(!empty($generalSettings['logo'])): ?>
                    <img src="<?php echo e($generalSettings['logo']); ?>"
                        style="width: 82%;height: 123%!important;" class="img-cover" alt="site logo">
                <?php endif; ?>
            </a>

            <button class="navbar-toggler navbar-order" type="button" id="navbarToggle">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="mx-lg-30 d-none d-lg-flex flex-grow-1 navbar-toggle-content " id="navbarContent">
                <div class="navbar-toggle-header text-right d-lg-none">
                    <button class="btn-transparent" id="navbarClose">
                        <i data-feather="x" width="32" height="32"></i>
                    </button>
                </div>

                <ul class="navbar-nav mr-auto d-flex align-items-center">
                    

            <?php if(!empty($navbarPages) and count($navbarPages)): ?>
                <?php $__currentLoopData = $navbarPages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $navbarPage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item">
                        <a class="nav-link" style="    font-size: 20px!important;"
                            href="<?php echo e($navbarPage['link']); ?>"><?php echo e($navbarPage['title']); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <!-- <img style="margin-left: 673px;margin-top:-20px" src="./assets/default/looooa.png" /> -->
            </ul>
        </div>

        <div class="nav-icons-or-start-live navbar-order">
            <div class="xs-w-100 d-flex align-items-center justify-content-between ">


                <?php if(!empty($authUser)): ?>

                    <div class="d-flex">

                        <?php echo $__env->make(getTemplate().'.includes.shopping-cart-dropdwon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        <div class="border-left mx-5 mx-lg-15"></div>
                        <?php if(!empty($authUser)): ?>
                            <?php echo $__env->make(getTemplate().'.includes.notification-dropdown', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                    </div>
                    <div class="dropdown">
                        <a href="#!" class="navbar-user d-flex align-items-center ml-50 dropdown-toggle" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?php echo e($authUser->getAvatar()); ?>" class="rounded-circle"
                                alt="<?php echo e($authUser->full_name); ?>">
                            <span
                                class="font-16 user-name ml-10 text-dark-blue font-14"><?php echo e($authUser->full_name); ?></span>
                        </a>

                        <div class="dropdown-menu user-profile-dropdown" aria-labelledby="dropdownMenuButton">
                            <div class="d-md-none border-bottom mb-20 pb-10 text-right">
                                <i class="close-dropdown" data-feather="x" width="32" height="32" class="mr-10"></i>
                            </div>

                            <a class="dropdown-item"
                                href="<?php echo e($authUser->isAdmin() ? '/admin' : '/panel'); ?>">
                                <img src="/assets/default/img/icons/sidebar/dashboard.svg" width="25" alt="nav-icon">
                                <span
                                    class="font-14 text-dark-blue"><?php echo e(trans('public.my_panel')); ?></span>
                            </a>
                            <?php if($authUser->isTeacher() or $authUser->isOrganization()): ?>
                                <a class="dropdown-item" href="<?php echo e($authUser->getProfileUrl()); ?>">
                                    <img src="/assets/default/img/icons/profile.svg" width="25" alt="nav-icon">
                                    <span
                                        class="font-14 text-dark-blue"><?php echo e(trans('public.my_profile')); ?></span>
                                </a>
                            <?php endif; ?>
                            <a class="dropdown-item" href="/logout">
                                <img src="/assets/default/img/icons/sidebar/logout.svg" width="25" alt="nav-icon">
                                <span
                                    class="font-14 text-dark-blue"><?php echo e(trans('panel.log_out')); ?></span>
                            </a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="d-flex align-items-center ml-md-50">



                        <a href="/login"
                            class="py-5 px-10 mr-10 text-dark-blue font-14"><?php echo e(trans('auth.login')); ?></a>
                        
                        <a href="<?php echo e(empty($authUser) ? '/Instructor/register' : ($authUser->isAdmin() ? '/admin/webinars/create' : (($authUser->isVisiteur()) ? '/become_instructor' : '/panel/webinars/new'))); ?>"
                            class="py-5 px-10 d-lg-flex btn btn-sm btn-primary nav-start-a-live-btn">
                            Become Instructor
                        </a>
                    </div>
                <?php endif; ?>
            </div>


            <!-- <?php if(!empty($navBtnUrl)): ?>
                    <a href="<?php echo e($navBtnUrl); ?>" class="d-none d-lg-flex btn btn-sm btn-primary nav-start-a-live-btn">
                        <?php echo e($navBtnText); ?>

                    </a>

                    <a href="<?php echo e($navBtnUrl); ?>" class="d-flex d-lg-none text-primary nav-start-a-live-btn font-14">
                        <?php echo e($navBtnText); ?>

                    </a>
<?php endif; ?>-->
           
                <div class="d-none nav-notify-cart-dropdown top-navbar ">
<?php echo $__env->make(getTemplate().'.includes.shopping-cart-dropdwon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="border-left mx-15"></div>

<?php echo $__env->make(getTemplate().'.includes.notification-dropdown', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
               
            </div>
        </div>
    </div>
</nav>

<?php $__env->startPush('scripts_bottom'); ?>
    <script src="/assets/default/js/parts/navbar.min.js"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\Users\Dali\Music\Abajim 3\Abajimnew\Abajim\resources\views/web/default/includes/navbar.blade.php ENDPATH**/ ?>