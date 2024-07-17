<?php
    $getPanelSidebarSettings = getPanelSidebarSettings();

    $socials = getSocials();
    if (!empty($socials) and count($socials)) {
        $socials = collect($socials)->sortBy('order')->toArray();
    }

    $footerColumns = getFooterColumns();
  




    $userLanguages = !empty($generalSettings['site_language']) ? [$generalSettings['site_language'] => getLanguages($generalSettings['site_language'])] : [];

    if (!empty($generalSettings['user_languages']) and is_array($generalSettings['user_languages'])) {
        $userLanguages = getLanguages($generalSettings['user_languages']);
    }

    $localLanguage = [];

    foreach($userLanguages as $key => $userLanguage) {
        $localLanguage[localeToCountryCode($key)] = $userLanguage;
    }

?>
<style>

.font-14 {
    font-size: 1.025rem!important;
    font-weight: 600;
    line-height: 1.4;
}
</style>
<div class="pos-f-t" style="margin-left: 164px;">
  <div class="collapse:not show" id="navbarToggleExternalContent">
    <div class="bg-dark ">
    <div class="panel-sidebar pt-50 pb-25 px-25" style="z-index:9!important" id="panelSidebar">
    <button class="btn-transparent panel-sidebar-close sidebarNavToggle">
        <i data-feather="x" width="24" height="24"></i>
    </button>

    <div class="user-info d-flex align-items-center flex-row flex-lg-column justify-content-lg-center">
        <a href="/panel" id ="ava" class="user-avatar bg-gray200">
            <img src="<?php echo e($authUser->getAvatar(100)); ?>" class="img-cover" id="pathpath" alt="<?php echo e($authUser->full_name); ?>">
        </a>

        <div class="d-flex flex-column align-items-center justify-content-center">
            <a href="/panel" class="user-name mt-15">
                <h3 class="font-16 font-weight-bold text-center" id="useruser"><?php echo e($authUser->full_name); ?></h3>
            </a>
             <?php if($authUser->isUser()): ?>
                 <?php if(!empty($sectionm[0] and $levelm[0])): ?>
                    <p class="font-12"> <?php echo e($levelm[0]); ?> <?php echo e($sectionm[0]); ?></p>
                 <?php endif; ?>
             <?php elseif($authUser->isEnfant()): ?>
                <?php if(!empty($userLevelName[0])): ?>
                     <p class="font-13"><?php echo e($userLevelName[0]); ?> </p>
                <?php endif; ?>
             <?php elseif($authUser->isOrganization()): ?>
                <p class="font-13" id="emaaa"></p>
             <?php elseif($authUser->isTeacher()): ?>
               <?php if(!empty($matieretearcher[0])): ?>
                <p class="font-12"> Prof: <?php echo e($matieretearcher[0]); ?></p>
                <?php elseif(!empty($optiontearcher[0])): ?>
                <p class="font-12"> Prof: <?php echo e($optiontearcher[0]); ?></p>
                <?php endif; ?>     
            <?php endif; ?>
            <?php if(!empty($authUser->getUserGroup())): ?>
                <span class="create-new-user mt-10"><?php echo e($authUser->getUserGroup()->name); ?></span>
            <?php endif; ?>
        </div>
    </div>

    <div class="d-flex sidebar-user-stats pb-10 ml-20 pb-lg-20 mt-15 mt-lg-30">
        <div class="sidebar-user-stat-item d-flex flex-column">
            <strong class="text-center"><?php echo e($authUser->webinars()->count()); ?></strong>
            <span class="font-12"><?php echo e(trans('panel.classes')); ?></span>
        </div>

        <div class="border-left mx-30"></div>

        <?php if($authUser->isUser()): ?>
            <div class="sidebar-user-stat-item d-flex flex-column">
                <strong class="text-center"><?php echo e($authUser->following()->count()); ?></strong>
                <span class="font-12"><?php echo e(trans('panel.following')); ?></span>
            </div>
        <?php else: ?>
            <div class="sidebar-user-stat-item d-flex flex-column">
                <strong class="text-center"><?php echo e($authUser->followers()->count()); ?></strong>
                <span class="font-12"><?php echo e(trans('panel.followers')); ?></span>
            </div>
        <?php endif; ?>
    </div>

    <ul id="panel-sidebar-scroll" class="sidebar-menu pt-10 <?php if(!empty($authUser->userGroup)): ?> has-user-group <?php endif; ?> <?php if(empty($getPanelSidebarSettings) or empty($getPanelSidebarSettings['background'])): ?> without-bottom-image <?php endif; ?>" <?php if((!empty($isRtl) and $isRtl)): ?> data-simplebar-direction="rtl" <?php endif; ?>>

        <li class="sidenav-item <?php echo e((request()->is('panel')) ? 'sidenav-item-active' : ''); ?>">
            <a href="/panel/enfant/1" class="d-flex align-items-center">
                <span class="sidenav-item-icon mr-10">
                    <?php echo $__env->make('web.default.panel.includes.sidebar_icons.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </span>
                <span class="font-14 text-dark-blue font-weight-500"><?php echo e(trans('panel.dashboard')); ?></span>
            </a>
        </li>

        <?php if($authUser->isOrganization()): ?>
            

            <li class="sidenav-item <?php echo e((request()->is('panel/students') or request()->is('panel/manage/students*')) ? 'sidenav-item-active' : ''); ?>">
                <a class="d-flex align-items-center" data-toggle="collapse" href="#studentsCollapse" role="button" aria-expanded="false" aria-controls="studentsCollapse">
                <span class="sidenav-item-icon mr-10">
                    <?php echo $__env->make('web.default.panel.includes.sidebar_icons.students', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </span>
                    <span class="font-14 text-dark-blue font-weight-500"><?php echo e(trans('quiz.students')); ?></span>
                </a>

                <div class="collapse <?php echo e((request()->is('panel/students') or request()->is('panel/manage/students*')) ? 'show' : ''); ?>" id="studentsCollapse">
                    <ul class="sidenav-item-collapse">
                        <li class="mt-5 <?php echo e((request()->is('panel/manage/students/new')) ? 'active' : ''); ?>">
                            <a href="/panel/manage/students/new"><?php echo e(trans('public.new')); ?></a>
                        </li>
                        <li class="mt-5 <?php echo e((request()->is('panel/manage/students')) ? 'active' : ''); ?>">
                            <a href="/panel/manage/students"><?php echo e(trans('public.list')); ?></a>
                        </li>
                    </ul>
                </div>
            </li>
        <?php endif; ?>
        
          <?php if($authUser->isTeacher()): ?>
         <li class="sidenav-item <?php echo e((request()->is('panel/scolaire/teacher/1')) ? 'sidenav-item-active' : ''); ?>">
            <a href="/panel/scolaire/teacher/1" class="d-flex align-items-center" class="d-flex align-items-center" >
                <span class="sidenav-item-icon mr-10">
                    <?php echo $__env->make('web.default.panel.includes.sidebar_icons.blog', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </span>
                <span class="font-14 text-dark-blue font-weight-500">Manuel scolaire</span>
            </a>
        </li>
        <?php endif; ?>
        
        

        <?php if(getFeaturesSettings('webinar_assignment_status')): ?>
            <li class="sidenav-item <?php echo e((request()->is('panel/assignments') or request()->is('panel/assignments/*')) ? 'sidenav-item-active' : ''); ?>">
                <a class="d-flex align-items-center" data-toggle="collapse" href="#assignmentCollapse" role="button" aria-expanded="false" aria-controls="assignmentCollapse">
                <span class="sidenav-item-icon mr-10">
                    <?php echo $__env->make('web.default.panel.includes.sidebar_icons.assignments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </span>
                    <span class="font-14 text-dark-blue font-weight-500"><?php echo e(trans('update.assignments')); ?></span>
                </a>

                <div class="collapse <?php echo e((request()->is('panel/assignments') or request()->is('panel/assignments/*')) ? 'show' : ''); ?>" id="assignmentCollapse">
                    <ul class="sidenav-item-collapse">

                        <li class="mt-5 <?php echo e((request()->is('panel/assignments/my-assignments')) ? 'active' : ''); ?>">
                            <a href="/panel/assignments/my-assignments"><?php echo e(trans('update.my_assignments')); ?></a>
                        </li>

                        <?php if($authUser->isOrganization() || $authUser->isTeacher()): ?>
                            <li class="mt-5 <?php echo e((request()->is('panel/assignments/my-courses-assignments')) ? 'active' : ''); ?>">
                                <a href="/panel/assignments/my-courses-assignments"><?php echo e(trans('update.students_assignments')); ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </li>
        <?php endif; ?>


        <li class="sidenav-item <?php echo e((request()->is('panel/meetings') or request()->is('panel/meetings/*')) ? 'sidenav-item-active' : ''); ?>">
            <a class="d-flex align-items-center" data-toggle="collapse" href="#meetingCollapse" role="button" aria-expanded="false" aria-controls="meetingCollapse">
                <span class="sidenav-item-icon mr-10">
                    <?php echo $__env->make('web.default.panel.includes.sidebar_icons.requests', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </span>
                <span class="font-14 text-dark-blue font-weight-500"><?php echo e(trans('panel.meetings')); ?></span>
            </a>

            <div class="collapse <?php echo e((request()->is('panel/meetings') or request()->is('panel/meetings/*')) ? 'show' : ''); ?>" id="meetingCollapse">
                <ul class="sidenav-item-collapse">
                    <?php if($authUser->isOrganization() || $authUser->isUser() ): ?>
                    <li class="mt-5 <?php echo e((request()->is('panel/meetings/reservation')) ? 'active' : ''); ?>">
                        <a href="/panel/meetings/reservation"><?php echo e(trans('public.my_reservation')); ?></a>
                    </li>
                    <?php endif; ?>
                    <?php if($authUser->isTeacher()): ?>
                        <li class="mt-5 <?php echo e((request()->is('panel/meetings/requests')) ? 'active' : ''); ?>">
                            <a href="/panel/meetings/requests"><?php echo e(trans('panel.requests')); ?></a>
                        </li>

                        <li class="mt-5 <?php echo e((request()->is('panel/meetings/settings')) ? 'active' : ''); ?>">
                            <a href="/panel/meetings/settings"><?php echo e(trans('panel.settings')); ?></a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </li>

        <li class="sidenav-item <?php echo e((request()->is('panel/quizzes') or request()->is('panel/quizzes/*')) ? 'sidenav-item-active' : ''); ?>">
            <a class="d-flex align-items-center" data-toggle="collapse" href="#quizzesCollapse" role="button" aria-expanded="false" aria-controls="quizzesCollapse">
                <span class="sidenav-item-icon mr-10">
                    <?php echo $__env->make('web.default.panel.includes.sidebar_icons.quizzes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </span>
                <span class="font-14 text-dark-blue font-weight-500"><?php echo e(trans('panel.quizzes')); ?></span>
            </a>

            <div class="collapse <?php echo e((request()->is('panel/quizzes') or request()->is('panel/quizzes/*')) ? 'show' : ''); ?>" id="quizzesCollapse">
                <ul class="sidenav-item-collapse">
                    <?php if($authUser->isOrganization() || $authUser->isTeacher()): ?>
                        <li class="mt-5 <?php echo e((request()->is('panel/quizzes/new')) ? 'active' : ''); ?>">
                            <a href="/panel/quizzes/new"><?php echo e(trans('quiz.new_quiz')); ?></a>
                        </li>
                        <li class="mt-5 <?php echo e((request()->is('panel/quizzes')) ? 'active' : ''); ?>">
                            <a href="/panel/quizzes"><?php echo e(trans('public.list')); ?></a>
                        </li>
                        <li class="mt-5 <?php echo e((request()->is('panel/quizzes/results')) ? 'active' : ''); ?>">
                            <a href="/panel/quizzes/results"><?php echo e(trans('public.results')); ?></a>
                        </li>
                    <?php endif; ?>
                    <?php if($authUser->isUser()): ?>
                    <li class="mt-5 <?php echo e((request()->is('panel/quizzes/my-results')) ? 'active' : ''); ?>">
                        <a href="/panel/quizzes/my-results"><?php echo e(trans('public.my_results')); ?></a>
                    </li>
                     <?php endif; ?>
                        <?php if($authUser->isTeacher()): ?>
                    <li class="mt-5 <?php echo e((request()->is('panel/quizzes/opens')) ? 'active' : ''); ?>">
                        <a href="/panel/quizzes/opens"><?php echo e(trans('public.not_participated')); ?></a>
                    </li>
                      <?php endif; ?>
                </ul>
            </div>
        </li>

        

        <?php if($authUser->checkCanAccessToStore()): ?>
            <li class="sidenav-item <?php echo e((request()->is('panel/store') or request()->is('panel/store/*')) ? 'sidenav-item-active' : ''); ?>">
                <a class="d-flex align-items-center" data-toggle="collapse" href="#storeCollapse" role="button" aria-expanded="false" aria-controls="storeCollapse">
                <span class="sidenav-item-icon assign-fill mr-10">
                    <?php echo $__env->make('web.default.panel.includes.sidebar_icons.store', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </span>
                    <span class="font-14 text-dark-blue font-weight-500"><?php echo e(trans('update.store')); ?></span>
                </a>

                <div class="collapse <?php echo e((request()->is('panel/store') or request()->is('panel/store/*')) ? 'show' : ''); ?>" id="storeCollapse">
                    <ul class="sidenav-item-collapse">
                        <?php if($authUser->isOrganization() || $authUser->isTeacher()): ?>
                            <li class="mt-5 <?php echo e((request()->is('panel/store/products/new')) ? 'active' : ''); ?>">
                                <a href="/panel/store/products/new"><?php echo e(trans('update.new_product')); ?></a>
                            </li>

                            <li class="mt-5 <?php echo e((request()->is('panel/store/products')) ? 'active' : ''); ?>">
                                <a href="/panel/store/products"><?php echo e(trans('update.products')); ?></a>
                            </li>

                            <?php
                                $sellerProductOrderWaitingDeliveryCount = $authUser->getWaitingDeliveryProductOrdersCount();
                            ?>

                            <li class="mt-5 <?php echo e((request()->is('panel/store/sales')) ? 'active' : ''); ?>">
                                <a href="/panel/store/sales"><?php echo e(trans('panel.sales')); ?></a>

                                <?php if($sellerProductOrderWaitingDeliveryCount > 0): ?>
                                    <span class="d-inline-flex align-items-center justify-content-center font-weight-500 ml-15 panel-sidebar-store-sales-circle-badge"><?php echo e($sellerProductOrderWaitingDeliveryCount); ?></span>
                                <?php endif; ?>
                            </li>

                        <?php endif; ?>

                        <li class="mt-5 <?php echo e((request()->is('panel/store/purchases')) ? 'active' : ''); ?>">
                            <a href="/panel/store/purchases"><?php echo e(trans('panel.my_purchases')); ?></a>
                        </li>

                        <?php if($authUser->isOrganization() || $authUser->isTeacher()): ?>
                            <li class="mt-5 <?php echo e((request()->is('panel/store/products/comments')) ? 'active' : ''); ?>">
                                <a href="/panel/store/products/comments"><?php echo e(trans('update.product_comments')); ?></a>
                            </li>
                        <?php endif; ?>

                        <li class="mt-5 <?php echo e((request()->is('panel/store/products/my-comments')) ? 'active' : ''); ?>">
                            <a href="/panel/store/products/my-comments"><?php echo e(trans('panel.my_comments')); ?></a>
                        </li>
                    </ul>
                </div>
            </li>
        <?php endif; ?>

        

      

        


        

       

        <?php
            $rewardSetting = getRewardsSettings();
        ?>

        

       

        <li class="sidenav-item <?php echo e((request()->is('panel/setting')) ? 'sidenav-item-active' : ''); ?>">
            <a href="/panel/setting" class="d-flex align-items-center">
                <span class="sidenav-setting-icon sidenav-item-icon mr-10">
                    <?php echo $__env->make('web.default.panel.includes.sidebar_icons.setting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </span>
                <span class="font-14 text-dark-blue font-weight-500"><?php echo e(trans('panel.settings')); ?></span>
            </a>
        </li>

       
        <li class="sidenav-item">
            <a href="/logout" class="d-flex align-items-center">
                <span class="sidenav-logout-icon sidenav-item-icon mr-10">
                    <?php echo $__env->make('web.default.panel.includes.sidebar_icons.logout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </span>
                <span class="font-14 text-dark-blue font-weight-500"><?php echo e(trans('panel.log_out')); ?></span>
            </a>
        </li>
    </ul>
    <div >
    <div style="margin-top:15px" >
               
                    <form action="/locale" method="post" class="mr-15 mx-md-20">
                        <?php echo e(csrf_field()); ?>


                        <input type="hidden" name="locale">
                      
                        <div class="language-select1">
                            <div id="localItems" 
                                 data-selected-country="<?php echo e(localeToCountryCode(mb_strtoupper(app()->getLocale()))); ?>"
                                 data-countries='<?php echo e(json_encode($localLanguage)); ?>'
                            ></div>
                        </div>
                    </form>
              

                   
            </div>
     <div>
            <p style="margin-left: 37px;">  25 893 331</p>
            </div>
    <div class="sidebar-create-class d-none d-md-block" style="padding-top: 11px;">
   

                     <a   href="https://www.facebook.com/">
                                                <img style="    width: 70px;
                                z-index: 9999999999!important;
                                height:40px;" src="https://1000logos.net/wp-content/uploads/2021/04/Facebook-logo.png" class="mr-5">
                                            </a>
                                            <a   href="https://www.facebook.com/">
                                                <img style="    width: 40px;
                                z-index: 9999999999!important;
                                height:30px;" src="https://freelogopng.com/images/all_img/1658587303instagram-png.png"  class="mr-10">
                                            </a>
                                            <a   href="https://twitter.com/">
                                                <img style="    width: 30px;
                                z-index: 9999999999!important;
                                height:30px;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Logo_of_Twitter.svg/512px-Logo_of_Twitter.svg.png?20220821125553/"  >
                     </a>
           
     
     

        </div>
        </div>


        
</div>
    </div>
  </div>
  <nav class="navbar navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
</div>
<div class="xs-panel-nav d-flex d-lg-none justify-content-between py-5 px-15">
    <div class="user-info d-flex align-items-center justify-content-between">
        <div class="user-avatar bg-gray200">
            <img src="<?php echo e($authUser->getAvatar(100)); ?>" class="img-cover" alt="<?php echo e($authUser->full_name); ?>">
        </div>

        <div class="user-name ml-15">
            <h3 class="font-16 font-weight-bold" id="userName"><?php echo e($authUser->full_name); ?></h3>
           
           
        </div>
    </div>

    <button class="sidebar-toggler btn-transparent d-flex flex-column-reverse justify-content-center align-items-center p-5 rounded-sm sidebarNavToggle" type="button">
        <span><?php echo e(trans('navbar.menu')); ?></span>
        <i data-feather="menu" width="16" height="16"></i>
    </button>
    
</div>





<?php $__env->startPush('scripts_bottom'); ?>
    <link href="/assets/default/vendors/flagstrap/css/flags.css" rel="stylesheet">
    <script src="/assets/default/vendors/flagstrap/js/jquery.flagstrap.min.js"></script>
    <script src="/assets/default/js/parts/top_nav_flags.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all elements with the child-name class
        var childNames = document.querySelectorAll('.child-name');

        // Add click event to each child name
        childNames.forEach(function(childName) {
            childName.addEventListener('click', function() {
                var container = document.querySelector('.wgh-slider__container');
                container.innerHTML = '';

                // Get the full name from the data attribute
                var fullName = childName.getAttribute('data-full-name');
                var level_id = childName.getAttribute('data-level-id');
                var namelavel= childName.getAttribute('data-level-name');
                var imgE = childName.getAttribute('data-level-path');
              
                document.getElementById('useruser').textContent = fullName;

                var emaaa= document.getElementById('emaaa');
                var path = document.getElementById('pathpath');
                var ava = document.getElementById('ava');
                emaaa.textContent= "المستوى:" + namelavel ;
                path.src = '/'+imgE;
                path.alt = fullName;
                 ava.style.width = '40%';
        
            })
        });

    });
</script>
<?php $__env->stopPush(); ?>
<?php /**PATH /var/www/html/resources/views/web/default/panel/includes/sidebarEnfant.blade.php ENDPATH**/ ?>