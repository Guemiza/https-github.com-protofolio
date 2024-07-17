<?php $__env->startPush('styles_top'); ?>
    <link rel="stylesheet" href="/assets/default/vendors/chartjs/chart.min.css" />
    <link rel="stylesheet" href="/assets/default/vendors/apexcharts/apexcharts.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="/assets/default/css/app.css">

    <link rel="stylesheet" href="/assets/default/css/style.css">
    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" type="text/css" href="/assets/default/css/demo.css" />
    <link rel="stylesheet" href="/assets/default/vendors/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/owl-carousel2/owl.carousel.min.css">
    <meta name="theme-color" content="#6777ef" />

    <style>
        .justify-content-end {
            height: 1000px;
            justify-content: flex-end !important;
            */
        }




        .webinar-notify {
            width: 40px;
            height: 40px;
            box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.16);
            background-color: #ffffff;
            position: absolute;
            bottom: -20px;
            right: 18px;
            border-radius: 50%;
            z-index: 3;
            transition: all 0.3s ease;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section>
        <div class="row align-items-start">
            <div class="col-12">
                <?php if($authUser->isOrganization()): ?>
                    <h1>Interface Parent</h1>
                <?php endif; ?>
                <?php if($authUser->isEnfant()): ?>

                    <!-- manul scolaire -->
                    <section style="height: 71px; margin-bottom: 158px!important;">
                        <div class="bg-white dashboard-banner-container position-relative px-15 px-ld-35 py-10 panel-shadow rounded-sm"
                            style="    margin-top: 0px!important;">
                            <span class="font-16 text-secondary font-weight-bold">كتبي المدرسية
                            </span>
                        </div>
                        <br><br><br> <br><br> <br><br>
                        <div class="wgh-slider">
                            <input class="wgh-slider-target" type="radio" id="slide-1" name="slider"
                                checked="checked" />
                            <input class="wgh-slider-target" type="radio" id="slide-2" name="slider" />
                            <input class="wgh-slider-target" type="radio" id="slide-3" name="slider" />
                            <input class="wgh-slider-target" type="radio" id="slide-4" name="slider" />
                            <input class="wgh-slider-target" type="radio" id="slide-5" name="slider" />
                            <input class="wgh-slider-target" type="radio" id="slide-6" name="slider" />
                            <input class="wgh-slider-target" type="radio" id="slide-7" name="slider" />
                            <input class="wgh-slider-target" type="radio" id="slide-8" name="slider" />
                            <input class="wgh-slider-target" type="radio" id="slide-9" name="slider" />
                            <input class="wgh-slider-target" type="radio" id="slide-10" name="slider" />
                            <input class="wgh-slider-target" type="radio" id="slide-11" name="slider" />
                            <input class="wgh-slider-target" type="radio" id="slide-12" name="slider" />
                            <input class="wgh-slider-target" type="radio" id="slide-13" name="slider" />




                            <div class="wgh-slider__viewport">
                                <div class="wgh-slider__viewbox">
                                    <div class="wgh-slider__container">
                                        <?php if(!empty($matiere)): ?>
                                            <?php $lastIndex = 0; ?>
                                            <?php $__currentLoopData = $matiere; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matiere): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php $varff = DB::table('manuels')
                                                    ->where('material_id', '=', $matiere->id)
                                                    ->pluck('id');
                                                $lastIndex = $loop->index + 1;
                                                //   echo( $varff);
                                                ?>
                                                <div class="wgh-slider-item">
                                                    <div class="wgh-slider-item__inner">
                                                        <figure class="wgh-slider-item-figure"><img
                                                                style="width: 400px;height: 400px;!important"
                                                                class="wgh-slider-item-figure__image" src=""
                                                                alt="The 5th Exotic" />
                                                            <img style="width: 400px;height: 400px;!important"
                                                                class="wgh-slider-item-figure__image"
                                                                src="/<?php echo e($matiere->path); ?>" alt="Manuel Scolaire" />
                                                            <figcaption class="wgh-slider-item-figure__caption">
                                                                <div class="row">
                                                                    <div class="col-sm-8">
                                                                        <?php if(!empty($varff[0])): ?>
                                                                            <a href="/panel/scolaire/<?php echo e($varff[0]); ?>"><?php echo e($matiere->name); ?>

                                                                            </a>
                                                                            <p>مستوى:
                                                                            </p>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <a>
                                                                            <button type="button" data-toggle="modal"
                                                                                data-target="#exampleModalLong"
                                                                                target="_blank"
                                                                                class="webinar-notify d-flex align-items-center justify-content-center snipcss-If7SW style-Q84TJ"
                                                                                id="style-Q84TJ">
                                                                                <img width="25" height="25"
                                                                                    src="/open-book.png">
                                                                            </button> </a>
                                                                    </div>
                                                                </div>
                                                                <span>+40 Video</span>
                                                            </figcaption>
                                                        </figure>
                                                        <label class="wgh-slider-item__trigger"
                                                            for="slide-<?php echo e(++$loop->index); ?>"
                                                            title="<?php echo e($matiere->name); ?>"></label>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </section>


                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="dashboard" style="margin-top:59px">
        <div class="row align-items-start">
            <div class="row align-items-start newgoo" style="margin-left: 10px;">
                <div class="col-12">
                    <section class=" container" style="padding-left:0px;padding-left:0px;padding-bottom:0px!important;">


                        <div class="position-relative ltr">
                            <div class="owl-carousel customers-testimonials instructors-swiper-container meetingc">

                                <?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $instructor->meeting->meetingTimes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meetingTimes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php

                                $matiereid = DB::table('user_matiere')->where('teacher_id', '=', $instructor->id)->pluck('matiere_id');
                                $matierename = DB::table('materials')->where('id', '=', $matiereid)->pluck('name');

                                $lastIndex = $loop->index + 1;
                                //   echo( $varff);  
                                ?>
                                <div class="item">
                                    <div class="shadow-effect">
                                        <div class="webinar-card" style="width: 200px;">
                                            <figure>
                                                <div class="image-box" style="    height: 177px!important;">

                                                    <span class="badge badge-primary">new</span>

                                                    <?php if($matierename[0]=='رياضيات'): ?>
                                                    <a href="">
                                                        <img src="/dd.jpg" class="img-cover" alt="<?php echo e($instructor->full_name); ?>">
                                                    </a>
                                                    <?php elseif($matierename[0]=='الإيقاظ العلمي'): ?>
                                                    <a href="">

                                                        <img src="/dd1.jpg" class="img-cover" alt="<?php echo e($instructor->full_name); ?>">
                                                    </a>
                                                    <?php elseif($matierename[0]=='أنجليزي '): ?>
                                                    <a href="">

                                                        <img src="/677.jpg" class="img-cover" alt="<?php echo e($instructor->full_name); ?>">
                                                    </a>
                                                    <?php elseif($matierename[0]=='الجغرافيا'): ?>
                                                    <a href="">

                                                        <img src="/678.jpg" class="img-cover" alt="<?php echo e($instructor->full_name); ?>">
                                                    </a>
                                                    <?php elseif($matierename[0]==' التربية التكنولجية'): ?>
                                                    <a href="">

                                                        <img src="/6789.jpg" class="img-cover" alt="<?php echo e($instructor->full_name); ?>">
                                                    </a>
                                                    <?php endif; ?>



                                                    <div class="progress">
                                                        <span class="progress-bar" style="width: 40%"></span>
                                                    </div>

                                                    <a href="" target="_blank" class="webinar-notify d-flex align-items-center justify-content-center">
                                                        <img src="/bell.png" style="width:15px;height:15px" class="webinar-icon" />

                                                    </a>

                                                </div>

                                                <figcaption class="webinar-card-body">
                                                    <div class="user-inline-avatar d-flex align-items-center">
                                                        <div class="avatar bg-gray200">
                                                            <img src="<?php echo e($instructor->getAvatar(108)); ?>" class="img-cover" alt="<?php echo e($instructor->full_name); ?>">
                                                        </div>
                                                        <a href="" target="_blank" class="user-name ml-5 font-12"><?php echo e($instructor->full_name); ?></a>
                                                    </div>
                                                    <!-- 
                                                            <a href="">

                                                                <h3 class="mt-15 webinar-title font-weight-bold font-12 text-dark-blue">
                                                                رياضيات </h3>
                                                                <a href="<?php echo e($instructor->getProfileUrl()); ?>?tab=appointments" class="btn btn-primary btn-sm rounded-pill mt-15"><?php echo e(trans('home.reserve_a_live_class')); ?></a>

                                                            </a> -->

                                                    <?php if(!empty($webinar->category)): ?>
                                                    <span class="d-block font-12 mt-10"><?php echo e(trans('public.in')); ?>

                                                        <a href="" target="_blank" class="text-decoration-underline">Matématique</a></span>
                                                    <?php endif; ?>
                                                    <div class="webinar-price-box">
                                                        <h3>
                                                            المادة : <?php echo e($matierename[0]); ?> </h3>
                                                        <span class="real">
                                                            <?php if($instructor->meeting->amount): ?>
                                                            <?php echo e($instructor->meeting->amount); ?> DT
                                                            <?php else: ?>
                                                            Free
                                                            <?php endif; ?>
                                                        </span>


                                                    </div>
                                                    <a href="<?php echo e($instructor->getProfileUrl()); ?>?tab=appointments" class="btn btn-primary btn-sm rounded-pill mt-5"><?php echo e(trans('home.reserve_a_live_class')); ?></a>

                                                    </a>
                                                    <div class="d-flex justify-content-between mt-20">
                                                        <div class="d-flex align-items-center">
                                                            <img src="/clock.png" style="width:15px;height:15px" class="webinar-icon" />

                                                            <span class="duration font-12 ml-5"> <?php echo e($meetingTimes->time); ?>

                                                            </span>
                                                        </div>

                                                        <div class="vertical-line mx-15"></div>

                                                        <div class="d-flex align-items-center">
                                                            <img src="/calendar.png" style="width:15px;height:15px" class="webinar-icon" />
                                                            <span class="date-published font-12 ml-5"> <?php echo e(date('dFY')); ?></span>
                                                        </div>
                                                    </div>


                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>

                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </section>


                </div>
                
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts_bottom'); ?>
    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/default/vendors/owl-carousel2/owl.carousel.min.js"></script>
    <script src="/assets/default/vendors/parallax/parallax.min.js"></script>
    <script src="/assets/default/js/parts/home.min.js"></script>
    <script src="<?php echo e(asset('/sw.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(getTemplate() . '.panel.layouts.panel_layoutEnfant', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/resources/views/web/default/panel/dashboardenfant.blade.php ENDPATH**/ ?>