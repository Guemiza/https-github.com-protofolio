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

       
    </div>
</nav>

<?php $__env->startPush('scripts_bottom'); ?>
    <script src="/assets/default/js/parts/navbar.min.js"></script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\Users\moham\OneDrive\Desktop\Abajim\Abajimnew21052024\Abajimnew\Abajim\resources\views/web/default/includes/navbar.blade.php ENDPATH**/ ?>