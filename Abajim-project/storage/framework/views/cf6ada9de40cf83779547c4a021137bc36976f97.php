   <style>
    
         .swiper-slide input[type=checkbox]:checked + label {
            border: 2px solid #1d3b65;
            box-shadow: 0 0 3px 3px #3b70c6;
            background: linear-gradient(90deg, #ff7e5f, #feb47b); /* Gradient effect */

        }

        .swiper-slide input[type=checkbox] + label {
            border: 1px #090 #444;
            width: 100%;
            display: block;
            transition: 500ms all;
            border-radius: .625rem !important;
        }

        .subscribe-plan {
            text-align: center;
            cursor: pointer;
        }

        .subscribe-plan label {
            display: block;
            border-radius: .625rem !important;
            padding: 10px;
        }
    </style>
<?php $__env->startSection('content'); ?>
    <section class="section">
        <div class="section-header">
            <h1><?php echo e(trans('admin/main.subscribe_packages')); ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin/"><?php echo e(trans('admin/main.dashboard')); ?></a>
                </div>
                <div class="breadcrumb-item"><?php echo e(trans('admin/main.subscribe_packages')); ?></div>
            </div>
        </div>
     <?php if($authUser->isSchool()): ?>
          <div class="position-relative subscribes-container pe-none user-select-none">
           

                <section class="container">
                 

                    <div class="position-relative mt-30">
                        <div class="swiper-container subscribes-swiper px-12">
                            <div class="row">

                            <?php $__currentLoopData = $subscribes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscribe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-4">
                                    <div class="swiper-slide">
                                    <div class="subscribe-plan position-relative bg-white d-flex flex-column align-items-center rounded-sm shadow pt-50 pb-20 px-20">
                                        

                                        <div class="plan-icon">
                                        <img src="<?php echo e($subscribe->icon); ?>" class="img-cover" alt="">
                                        </div>

                                        <h3 class="mt-20 font-30 text-secondary"><?php echo e($subscribe->title); ?></h3>
                                        <p class="font-weight-500 text-gray mt-10"><?php echo e($subscribe->description); ?></p>

                                        <div class="d-flex align-items-start text-primary mt-30">
                                        <span class="font-30 line-height-1"><?php echo e(addCurrencyToPrice($subscribe->price)); ?></span>
                                        </div>

                                        <ul class="mt-20 plan-feature">
                                        <li class="mt-10"><?php echo e($subscribe->days); ?> <?php echo e(trans('financial.days_of_subscription')); ?></li>
                                        <li class="mt-10">
                                            <?php if($subscribe->infinite_use): ?>
                                            <?php echo e(trans('update.unlimited')); ?>

                                            <?php else: ?>
                                            <?php echo e($subscribe->usable_count); ?>

                                            <?php endif; ?>
                                            <span class="ml-5">subscribes</span>
                                        </li>
                                        </ul>

                                        
                                    </div>
                                    </div>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="swiper-pagination subscribes-swiper-pagination"></div>
                        </div>

                    </div>
                </section>

               

              
            </div>
     <?php else: ?>
        <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped font-14">
                                        <tr>
                                            <th>#</th>
                                            <th class="text-left"><?php echo e(trans('admin/main.title')); ?></th>
                                            <th class="text-center"><?php echo e(trans('admin/main.price')); ?></th>
                                            <th class="text-center"><?php echo e(trans('admin/main.usable_count')); ?></th>
                                            <th class="text-center"><?php echo e(trans('public.days')); ?></th>
                                            <th class="text-center"><?php echo e(trans('admin/main.sale_count')); ?></th>
                                            <th class="text-center"><?php echo e(trans('admin/main.is_popular')); ?></th>
                                            <th class="text-center"><?php echo e(trans('admin/main.created_at')); ?></th>
                                            <th><?php echo e(trans('admin/main.actions')); ?></th>
                                        </tr>

                                        <?php $__currentLoopData = $subscribes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscribe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo e($subscribe->icon); ?>" width="50" height="50" alt="">
                                                </td>
                                                <td class="text-left"><?php echo e($subscribe->title); ?></td>
                                                <td class="text-center"><?php echo e($currency); ?><?php echo e($subscribe->price); ?></td>
                                                <td class="text-center"><?php echo e($subscribe->usable_count); ?></td>
                                                <td class="text-center"><?php echo e($subscribe->days); ?></td>
                                                <td class="text-center"><?php echo e($subscribe->sales->count()); ?></td>
                                                <td class="text-center">
                                                    <?php if($subscribe->is_popular): ?>
                                                        <span class="text-success"><?php echo e(trans('admin/main.yes')); ?></span>
                                                    <?php else: ?>
                                                        <span class=""><?php echo e(trans('admin/main.no')); ?></span>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="text-center"><?php echo e(dateTimeFormat($subscribe->created_at, 'Y M j | H:i')); ?></td>
                                                <td>
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_subscribe_edit')): ?>
                                                        <a href="/admin/financial/subscribes/<?php echo e($subscribe->id); ?>/edit" class="btn-sm" data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('admin/main.edit')); ?>">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                    <?php endif; ?>

                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_subscribe_delete')): ?>
                                                        <?php echo $__env->make('admin.includes.delete_button',['url' => '/admin/financial/subscribes/'. $subscribe->id.'/delete','btnClass' => 'btn-sm'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </table>
                                </div>
                            </div>

                            <div class="card-footer text-center">
                                <?php echo e($subscribes->links()); ?>

                            </div>

                        </div>
                    </div>
                </div>
        </div>
     <?php endif; ?>

    </section>

    <section class="card">
        <div class="card-body">
            <div class="section-title ml-0 mt-0 mb-3"><h5><?php echo e(trans('admin/main.hints')); ?></h5></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="media-body">
                        <div class="text-primary mt-0 mb-1 font-weight-bold"><?php echo e(trans('admin/main.subscribes_list_hint_title_1')); ?></div>
                        <div class=" text-small font-600-bold"><?php echo e(trans('admin/main.subscribes_list_hint_description_1')); ?></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="media-body">
                        <div class="text-primary mt-0 mb-1 font-weight-bold"><?php echo e(trans('admin/main.subscribes_list_hint_title_2')); ?></div>
                        <div class=" text-small font-600-bold"><?php echo e(trans('admin/main.subscribes_list_hint_description_2')); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts_bottom'); ?>

 
     <script>
        $(document).ready(function() {
            var levelId1 = $(this).val();
                    var maxQuantity = (levelId1 == 6) ? 3 : 3;
                $('.quantity-input').attr('max', maxQuantity);
            $('#levelSelect').change(function() {
               
                var levelId = $(this).val();
                // alert(levelId);
                 
                updateMaxQuantity(levelId );
                
                 //alert(userId);
         
                $.ajax({
                    url: '/admin/get-price',
                    method: 'POST',
                    data: {
                        _token: '<?php echo e(csrf_token()); ?>',
                        level_id: levelId,
                       
                    },
                    success: function(response) {
                        //alert(response);
                        $('.swiper-slide input[type=checkbox]').each(function() {
                            var checkbox = $(this);
                            var subscribeId = checkbox.val();
                            if (response[subscribeId]) {
                                var price = response[subscribeId];
                                $('#amount_' + subscribeId).val(price);
                                checkbox.siblings('label').find('.font-10').text(price + ' TND');
                                checkbox.siblings('input[name="amount"]').val(price);
                            }
                        });
                    }
                });
            });
        });
        function updateMaxQuantity(levelId) {
            var maxQuantity;
            if (levelId == 6) {
                maxQuantity = 3;
            } else if (levelId == 7) {
                maxQuantity = 4;
            } else if (levelId == 8) {
                maxQuantity = 5;
            } else if (levelId == 9) {
                maxQuantity = 5;
            } else if (levelId == 10) {
                maxQuantity = 6;
            }
             else {
                maxQuantity = 7; // Default max quantity
            }
            $('.quantity-input').attr('max', maxQuantity);
        }
         function updatePrice(subscribeId, basePrice) {
            var quantity = $('#quantity_' + subscribeId).val();
            var newPrice = basePrice * quantity;
            $('#amount_' + subscribeId).val(newPrice);
            $('#subscribe_' + subscribeId).siblings('label').find('.line-height-x').text(newPrice + ' TND');
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\moham\OneDrive\Desktop\Abajim\Abajimnew21052024\Abajimnew\Abajim\resources\views/admin/financial/subscribes/lists.blade.php ENDPATH**/ ?>