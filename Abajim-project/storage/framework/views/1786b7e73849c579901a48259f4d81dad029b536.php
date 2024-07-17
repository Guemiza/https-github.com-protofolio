

<?php $__env->startPush('styles_top'); ?>
    <link rel="stylesheet" href="/assets/default/vendors/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/select2/select2.min.css">
<?php $__env->stopPush(); ?>
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
            <h1><?php echo e(trans('admin/main.user_kids')); ?></h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin/"><?php echo e(trans('admin/main.dashboard')); ?></a>
                </div>
                <div class="breadcrumb-item active"><a href="/admin/users"><?php echo e(trans('admin/main.users')); ?></a>
                </div>
                <div class="breadcrumb-item"><?php echo e(trans('/admin/main.edit')); ?></div>
            </div>
        </div>

        <?php if(!empty(session()->has('msg'))): ?>
            <div class="alert alert-success my-25">
                <?php echo e(session()->get('msg')); ?>

            </div>
        <?php endif; ?>


        <div class="section-body">
            <div class="row">
                    <div class="card ">
                        <div class="card-body">

                            

                            <div class="tab-content" id="myTabContent2">                   
                                    <form action="/admin/school/kids/<?php echo e($user->id . '/add'); ?>" method="Post">
                                        <?php echo e(csrf_field()); ?>

                                        <div class="row">    
                                            <div class="col-12 col-md-8">
                                                <input type="text" name="parentid" value="<?php echo e($user->id); ?>" hidden/>
                                                <div class="form-group mt-20">
                                                    <label><?php echo e(trans('/admin/main.full_name_kids_nom')); ?></label>
                                                    <input type="text" name="nom"
                                                        class="form-control  <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        placeholder="<?php echo e(trans('/admin/main.full_name_kids_nom')); ?>" />
                                                    <?php $__errorArgs = ['nom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="invalid-feedback">
                                                            <?php echo e($message); ?>

                                                        </div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                                <div class="form-group mt-20">
                                                    <label><?php echo e(trans('/admin/main.full_name_kids_prenom')); ?></label>
                                                    <input type="text" name="prenom"
                                                        class="form-control  <?php $__errorArgs = ['prenon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                                        
                                                        placeholder="<?php echo e(trans('/admin/main.full_name_kids_prenom')); ?>" />
                                                    <?php $__errorArgs = ['prenon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="invalid-feedback">
                                                            <?php echo e($message); ?>

                                                        </div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                               
                                                <input value="10" id="roleId" name="role_id" hidden />
                                                
                                                <div class="form-group mt-10" >
                                                    <label class="input-label"
                                                        style="margin-left: 1900px;"><?php echo e(trans('admin/main.sexe')); ?></label>
                                                    <div class="input-group">
                                                        <select name="sexe" id="cars"
                                                            class="form-control <?php echo e(!empty($post) ? 'js-edit-content-locale' : ''); ?>">
                                                            <option value="Garçon">Garçon</option>
                                                            <option value="Fille">Fille</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="input-label"><?php echo e(trans('admin/main.level')); ?></label>
                                                    <?php
                                                    $leveeeel = DB::table('school_levels')->where('id', '>', 5)->get();
                                                    ?>
                                                    <select name="level_id" id="levelSelect" class="form-control <?php echo e(!empty($post) ? 'js-edit-content-locale' : ''); ?>">
                                                        <?php $__currentLoopData = $leveeeel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($lang->id); ?>"><?php echo e($lang->name); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <?php $__errorArgs = ['locale'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <div class="invalid-feedback">
                                                            <?php echo e($message); ?>

                                                        </div>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                             </div>
                                            <div class="col-12 col-md-4">
                                                <div class="emotion-container">
                                                 <h5 class="section-title after-line ">حدد اشتراك </h5>
                                                    <div class="row mt-20">                                                  
                                                        <?php $__currentLoopData = $subscribes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscribe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="col-6">
                                                                <div class="swiper-slide">
                                                                    <input type="checkbox" name="subscribe" id="subscribe_<?php echo e($subscribe->id); ?>" class="input-hidden" value="<?php echo e($subscribe->id); ?>" hidden/>
                                                                    <label for="subscribe_<?php echo e($subscribe->id); ?>">
                                                                        <div class="subscribe-plan position-relative bg-white d-flex flex-column align-items-center rounded-sm shadow pt-50 pb-20 px-20" style="height: 470px;">
                                                                            <div class="plan-icon">
                                                                                <img src="<?php echo e($subscribe->icon); ?>" class="img-cover" alt="">
                                                                            </div>
                                                                            <h3 class="mt-20 font-30 text-secondary" style="color: #1d3b65 !important;"><?php echo e($subscribe->title); ?></h3>
                                                                            <?php if( $subscribe->id=="9"): ?>
                                                                            <div class="d-flex align-items-start text-primary mt-30">
                                                                                  <div class="form-group mt-20">
                                                                                    <div class="row">
                                                                                            <div class="col-md-7">
                                                                                            <label for="quantity_<?php echo e($subscribe->id); ?>">عدد الكتب</label>
                                                                                            </div>
                                                                                            <div class="col-md-5">
                                                                                              <?php
                                                                                                $uniter_packages = DB::table('subscribes')->where('id', 4)->pluck('price');
                                                                                               
                                                                                               ?>
                                                                                                <input type="number" id="quantity_<?php echo e($subscribe->id); ?>" name="quantity_<?php echo e($subscribe->id); ?>" class="form-control quantity-input" min="1"  value="1" onchange="updatePrice(<?php echo e($subscribe->id); ?>, <?php echo e($uniter_packages[0]); ?>)">
                                                                                                <input name="amountX" id="amount_<?php echo e($subscribe->id); ?>" value="<?php echo e($uniter_packages[0]); ?>" type="hidden">
                                                                                                <input name="id" value="<?php echo e($subscribe->id); ?>" type="hidden">
                                                                                            </div>
                                                                                            </div>
                                                                                    </div>
                                                                                  </div>
                                                                                <span  class="line-height-x" style="color: #1d3b65 !important;">X TND</span>
                                                                            </div>
                                                                            <?php else: ?>
                                                                            <div class="d-flex align-items-start text-primary mt-30">
                                                                               
                                                                                <span  class="font-10 line-height-1" style="color: #1d3b65 !important;"><?php echo e(addCurrencyToPrice($subscribe->price)); ?></span>
                                                                                <input name="amount" id="amount_<?php echo e($subscribe->id); ?>" value="<?php echo e($subscribe->price); ?>" type="hidden">
                                                                                <input name="id" value="<?php echo e($subscribe->id); ?>" type="hidden">
                                                                            </div>
                                                                            <?php endif; ?>
                                                                        </div>
                                                                    </label>
                                                                             
                                                                </div>
                                                            </div>
                                                                
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                             <div class="mt-4 ml-40">
                                                    <button class="btn btn-primary"><?php echo e(trans('admin/main.submit')); ?></button>
                                            </div>   
                                    </form>
                               
                                <div class="col-12">
                                    <div class="mt-5">
                                        <h5 class="section-title after-line"><?php echo e(trans('admin/main.list_kids')); ?></h5>

                                        <div class="table-responsive mt-3">
                                            <table class="table table-striped table-md">
                                                <tr>
                                                    <th><?php echo e(trans('admin/main.full_name_kids_nom')); ?></th>
                                                    <th><?php echo e(trans('admin/main.level')); ?></th>
                                                

                                                    <th><?php echo e(trans('admin/main.type_subscribe')); ?></th>
                                                    <th><?php echo e(trans('admin/main.wallet_charge')); ?></th>
                                                    <th><?php echo e(trans('admin/main.bayer')); ?></th>

                                                    <th><?php echo e(trans('admin/main.classes')); ?></th>
                                                    <th><?php echo e(trans('admin/main.appointments')); ?></th>
                                                    <th><?php echo e(trans('admin/main.register_date')); ?></th>
                                                    <th><?php echo e(trans('admin/main.status')); ?></th>

                                                    <th class="text-right"><?php echo e(trans('admin/main.actions')); ?></th>
                                                </tr>

                                                <?php $__currentLoopData = $mykids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                                                
                                                        <?php  $varff = DB::table('school_levels')->where('id', $user->level_id)->pluck('name');                                                   
                                                        ?>
                                                <tr>
                                                    
                                                    <td class="text-left">
                                                        <div class="d-flex align-items-center">
                                                            <figure class="avatar mr-2">
                                                                <img src="<?php echo e($user->getAvatar()); ?>" alt="<?php echo e($user->full_name); ?>">
                                                            </figure>
                                                            <div class="media-body ml-1">
                                                                <div class="mt-0 mb-1 font-weight-bold"><?php echo e($user->full_name); ?></div>

                                                                <?php if($user->mobile): ?>
                                                                    <div class="text-primary text-small font-600-bold"><?php echo e($user->mobile); ?></div>
                                                                <?php endif; ?>

                                                                <?php if($user->email): ?>
                                                                    <div class="text-primary text-small font-600-bold"><?php echo e($user->email); ?></div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </td>
                                                
                                                    <td><?php echo e($varff[0]); ?></td>
                                                    <?php
                                                    $order_user = DB::table('order_items')->where('user_id', $user->id)->pluck('total_amount');
                                                    $sub_user = DB::table('order_items')->where('user_id', $user->id)->pluck('subscribe_id');
                                                    ?>  
                                                    <td>
                                                    <?php if( $sub_user !='[]'): ?>
                                                        <?php if($sub_user[0] == 3): ?>
                                                            الكرطابلة
                                                        <?php elseif($sub_user[0] == 9): ?>
                                                            على كيفك
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    </td>

                                                    <td> <?php echo e($user->getAccountingBalance()); ?> TND </td>

                                                                       

                                                    <td>
                                                        <div class="media-body">
                                                                <div class="text-primary mt-0 mb-1 font-weight-bold"> <?php if( $order_user !='[]'): ?><?php echo e($order_user[0]); ?>TND  <?php endif; ?></div>
                                                        </div>
                                                    </td>

                                                    
                                                    <td>
                                                        <div class="media-body">
                                                            <div class="text-primary mt-0 mb-1 font-weight-bold"><?php echo e($user->classesPurchasedsCount); ?></div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="media-body">
                                                            <div class="text-primary mt-0 mb-1 font-weight-bold"><?php echo e($user->meetingsPurchasedsCount); ?></div>
                                                        </div>
                                                    </td>
                                                    <td><?php echo e(dateTimeFormat($user->created_at, 'j M Y | H:i')); ?></td>
                                                    <td>
                                                        <?php if($user->ban and !empty($user->ban_end_at) and $user->ban_end_at > time()): ?>
                                                            <div class="mt-0 mb-1 font-weight-bold text-danger"><?php echo e(trans('admin/main.ban')); ?></div>
                                                            <div class="text-small font-600-bold">Until <?php echo e(dateTimeFormat($user->ban_end_at, 'Y/m/j')); ?></div>
                                                        <?php else: ?>
                                                            <div class="mt-0 mb-1 font-weight-bold <?php echo e(($user->status == 'active') ? 'text-success' : 'text-warning'); ?>"><?php echo e(trans('admin/main.'.$user->status)); ?></div>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td class="text-center mb-2" width="120">
                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_users_impersonate')): ?>
                                                            <a href="/admin/users/<?php echo e($user->id); ?>/impersonate" target="_blank" class="btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('admin/main.login')); ?>">
                                                                <i class="fa fa-user-shield"></i>
                                                            </a>
                                                        <?php endif; ?>

                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_users_edit')): ?>
                                                            <a href="/admin/users/<?php echo e($user->id); ?>/edit" class="btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('admin/main.edit')); ?>">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                        <?php endif; ?>

                                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_users_delete')): ?>
                                                            <?php echo $__env->make('admin.includes.delete_button',['url' => '/admin/users/'.$user->id.'/delete' , 'btnClass' => ''], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                        <?php endif; ?>
                                                    </td>

                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </table>
                                            <p class="font-12 text-gray mt-1 mb-0"><?php echo e(trans('admin/main.not_result')); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php echo $__env->make('admin.users.editTabs.purchased_bundles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                <?php if(!empty($user) and ($user->isOrganization() or $user->isTeacher())): ?>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin_update_user_registration_package')): ?>
                                        <?php echo $__env->make('admin.users.editTabs.registration_package', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <?php endif; ?>
                                <?php endif; ?>



                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts_bottom'); ?>
    <script src="/assets/default/vendors/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="/assets/default/vendors/select2/select2.min.js"></script>

    <script>
        var saveSuccessLang = '<?php echo e(trans('webinars.success_store')); ?>';
    </script>

    <script src="/assets/default/js/admin/webinar_students.min.js"></script>
    <script src="/assets/default/js/admin/user_edit.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const checkboxes = document.querySelectorAll('.swiper-slide input[type="checkbox"]');

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function () {
                    if (this.checked) {
                        checkboxes.forEach(cb => {
                            if (cb !== this) cb.checked = false;
                        });
                    }
                });
            });
        });
    </script>
     <script>
        $(document).ready(function() {
            var levelId1 = $(this).val();
                    var maxQuantity = (levelId1 == 6) ? 3 : 3;
                $('.quantity-input').attr('max', maxQuantity);
            $('#levelSelect').change(function() {
               
                var levelId = $(this).val();
                // alert(levelId);
                 
                updateMaxQuantity(levelId );
                var userId = '<?php echo e($user->id); ?>';
                 //alert(userId);
         
                $.ajax({
                    url: '/admin/get-price',
                    method: 'POST',
                    data: {
                        _token: '<?php echo e(csrf_token()); ?>',
                        level_id: levelId,
                        user_id: userId
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

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\moham\OneDrive\Desktop\Abajim\Abajimnew21052024\Abajimnew\Abajim\resources\views/admin/school/add_kids.blade.php ENDPATH**/ ?>