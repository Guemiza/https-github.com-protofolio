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
     justify-content: flex-end !important; */
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
                        <input class="wgh-slider-target" type="radio" id="slide-1" name="slider" checked="checked" />
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
                                                    <?php  $varff = DB::table('manuels')->where('material_id', '=', $matiere->id)->pluck('id');
                                                       $lastIndex = $loop->index + 1;
                                                        //   echo( $varff);  
                                                     ?>
                                                    <div class="wgh-slider-item">
                                                        <div class="wgh-slider-item__inner">
                                                            <figure class="wgh-slider-item-figure"><img
                                                                    style="width: 400px;height: 400px;!important"
                                                                    class="wgh-slider-item-figure__image" src="" alt="The 5th Exotic" />
                                                                <img style="width: 400px;height: 400px;!important" class="wgh-slider-item-figure__image" src="/<?php echo e($matiere->path); ?>" alt="Manuel Scolaire" />
                                                                <figcaption class="wgh-slider-item-figure__caption" >
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
                                                                                    data-target="#exampleModalLong" target="_blank"
                                                                                    class="webinar-notify d-flex align-items-center justify-content-center snipcss-If7SW style-Q84TJ"
                                                                                    id="style-Q84TJ">
                                                                                    <img width="25" height="25" src="/open-book.png">
                                                                                </button> </a>
                                                                        </div>
                                                                    </div>
                                                                    <span>+40 Video</span>
                                                                </figcaption>
                                                            </figure>
                                                            <label class="wgh-slider-item__trigger" for="slide-<?php echo e(++$loop->index); ?>" title="<?php echo e($matiere->name); ?>"></label>
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
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts_bottom'); ?>




    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/default/vendors/owl-carousel2/owl.carousel.min.js"></script>
    <script src="/assets/default/vendors/parallax/parallax.min.js"></script>
    <script src="/assets/default/js/parts/home.min.js"></script>
    <script src="<?php echo e(asset('/sw.js')); ?>"></script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make(getTemplate() .'.panel.layouts.panel_layoutEnfant', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Dali\Music\Abajim 3\Abajimnew\Abajim\resources\views/web/default/panel/dashboardenfant.blade.php ENDPATH**/ ?>