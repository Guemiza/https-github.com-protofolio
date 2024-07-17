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
    .justify-content-end {
        justify-content: center !important;
}

.font-14 {
    font-size: 1.025rem!important;
    font-weight: 600;
    line-height: 1.4;
}
.panel-sidebar {
    position: fixed;
    top: 55px;
    left: 0;
    bottom: 0;
    width: 3%;
    height: 100%;
    box-shadow: 18px 0 35px 0 rgba(0, 0, 0, .02);
    background-color: #fff!important;
}
</style>

<div class="xs-panel-nav d-flex d-lg-none justify-content-between py-5 px-15">
    <div class="user-info d-flex align-items-center justify-content-between " style="
    width: 50px;
">
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



<div class="panel-sidebar" style="z-index:9!important" id="panelSidebar">
    <button class="btn-transparent panel-sidebar-close sidebarNavToggle">
        <i data-feather="x" width="24" height="24"></i>
    </button>

    <div class="user-info d-flex align-items-center flex-row flex-lg-column justify-content-lg-center">
        <a href="/panel" >
            <img src="<?php echo e($authUser->getAvatar(100)); ?>" width="30" height="30" id="pathpath" alt="<?php echo e($authUser->full_name); ?>">
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



    <ul id="panel-sidebar-scroll" class="sidebar-menu pt-10 <?php if(!empty($authUser->userGroup)): ?> has-user-group <?php endif; ?> <?php if(empty($getPanelSidebarSettings) or empty($getPanelSidebarSettings['background'])): ?> without-bottom-image <?php endif; ?>" <?php if((!empty($isRtl) and $isRtl)): ?> data-simplebar-direction="rtl" <?php endif; ?>>

        <li class="sidenav-item <?php echo e((request()->is('panel')) ? 'sidenav-item-active' : ''); ?>">
            <a href="/panel/enfant/1" class="d-flex align-items-center">
                <span class="sidenav-item-icon mr-10">
                    <?php echo $__env->make('web.default.panel.includes.sidebar_icons.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </span>
            </a>
        </li>

       
        <li class="sidenav-item">
            <a href="/logout" class="d-flex align-items-center">
                <span class="sidenav-logout-icon sidenav-item-icon mr-10">
                    <?php echo $__env->make('web.default.panel.includes.sidebar_icons.logout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </span>
            </a>
        </li>
    </ul>
  


        
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
<?php /**PATH C:\Users\moham\OneDrive\Desktop\Abajim\Abajimnew21052024\Abajimnew\Abajim\resources\views/web/default/panel/includes/sidebarshor.blade.php ENDPATH**/ ?>