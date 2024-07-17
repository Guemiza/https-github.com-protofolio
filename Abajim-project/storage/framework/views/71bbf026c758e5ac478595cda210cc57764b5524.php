<div class="tab-pane mt-3 fade <?php if(empty($becomeInstructor)): ?> active show <?php endif; ?>" id="general" role="tabpanel" aria-labelledby="general-tab">
    <form action="/admin/school/kids/<?php echo e($user->id .'/update'); ?>" method="Post">
        <?php echo e(csrf_field()); ?>

        <div class="row">
            <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label><?php echo e(trans('/admin/main.full_name')); ?></label>
                        <input type="text" name="full_name"
                            class="form-control  <?php $__errorArgs = ['full_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            value="<?php echo e(!empty($user) ? $user->full_name : old('full_name')); ?>"
                            placeholder="<?php echo e(trans('admin/main.create_field_full_name_placeholder')); ?>"/>
                        <?php $__errorArgs = ['full_name'];
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

                    
                    <div class="form-group">
                        <label for="username"><?php echo e(trans('admin/main.email')); ?>:</label>
                        <input name="email" type="text" id="username" value="<?php echo e($user->email); ?>" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <?php $__errorArgs = ['email'];
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
                       <input name="organ_id" type="text" value="<?php echo e($user->organ_id); ?>" class="form-control" hidden>

                    <div class="form-group">
                        <label for="username"><?php echo e(trans('admin/main.mobile')); ?>:</label>
                        <input name="mobile" type="text" value="<?php echo e($user->mobile); ?>" class="form-control <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                        <?php $__errorArgs = ['mobile'];
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
                <?php if($user->role_id=="9"): ?> 
                    <div class="form-group">
                    <label class="input-label"><?php echo e(trans('auth.language')); ?></label>
                    <select name="language" class="form-control">
                        <option value=""><?php echo e(trans('auth.language')); ?></option>
                        <?php $__currentLoopData = $userLanguages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($lang); ?>" <?php if(!empty($user) and mb_strtolower($user->language) == mb_strtolower($lang)): ?> selected <?php endif; ?>><?php echo e($language); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php $__errorArgs = ['language'];
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

                <div class="form-group custom-switches-stacked mt-2">
                    <label class="custom-switch pl-0">
                        <input type="hidden" name="ban" value="0">
                        <input type="checkbox" name="ban" id="banSwitch" value="1" <?php echo e((!empty($user) and $user->ban) ? 'checked="checked"' : ''); ?> class="custom-switch-input"/>
                        <span class="custom-switch-indicator"></span>
                        <label class="custom-switch-description mb-0 cursor-pointer" for="banSwitch"><?php echo e(trans('admin/main.ban')); ?></label>
                    </label>
                </div>
                <?php else: ?>
                    <div class="form-group">
                        <label><?php echo e(trans('/admin/main.level')); ?></label>
                        <select class="form-control <?php $__errorArgs = ['level'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="level" name="level">
                            <option disabled <?php echo e(empty($user) ? 'selected' : ''); ?>><?php echo e(trans('admin/main.level')); ?></option>

                            <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $levels): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($levels->id); ?>" <?php echo e(!empty($user) && $user->level_id === $levels->id ? 'selected' :''); ?>><?php echo e($levels->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['level'];
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
                <?php endif; ?>
                    <div class="form-group">
                        <label><?php echo e(trans('/admin/main.status')); ?></label>
                        <select class="form-control <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="status" name="status">
                            <option disabled <?php echo e(empty($user) ? 'selected' : ''); ?>><?php echo e(trans('admin/main.select_status')); ?></option>

                            <?php $__currentLoopData = \App\User::$statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($status); ?>" <?php echo e(!empty($user) && $user->status === $status ? 'selected' :''); ?>><?php echo e($status); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['status'];
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

                
                    <div class="form-group custom-switches-stacked mt-2">
                        <label class="custom-switch pl-0">
                            <input type="hidden" name="ban" value="0">
                            <input type="checkbox" name="ban" id="banSwitch" value="1" <?php echo e((!empty($user) and $user->ban) ? 'checked="checked"' : ''); ?> class="custom-switch-input"/>
                            <span class="custom-switch-indicator"></span>
                            <label class="custom-switch-description mb-0 cursor-pointer" for="banSwitch"><?php echo e(trans('admin/main.ban')); ?></label>
                        </label>
                    </div>

                    <div class="row <?php echo e((($user->ban) or (old('ban') == 'on')) ? '' : 'd-none'); ?>" id="banSection">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="input-label"><?php echo e(trans('public.from')); ?></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="dateInputGroupPrepend">
                                                                            <i class="fa fa-calendar-alt"></i>
                                                                        </span>
                                    </div>
                                    <input type="text" name="ban_start_at" class="form-control datepicker <?php $__errorArgs = ['ban_start_at'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(!empty($user->ban_start_at) ? dateTimeFormat($user->ban_start_at,'Y/m/d') :''); ?>"/>
                                    <?php $__errorArgs = ['ban_start_at'];
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
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="input-label"><?php echo e(trans('public.to')); ?></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="dateInputGroupPrepend">
                                                                            <i class="fa fa-calendar-alt"></i>
                                                                        </span>
                                    </div>
                                    <input type="text" name="ban_end_at" class="form-control datepicker <?php $__errorArgs = ['ban_end_at'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(!empty($user->ban_end_at) ? dateTimeFormat($user->ban_end_at,'Y/m/d') :''); ?>"/>
                                    <?php $__errorArgs = ['ban_end_at'];
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
                        </div>
                    </div>

                    <div class="form-group custom-switches-stacked">
                        <label class="custom-switch pl-0">
                            <input type="hidden" name="verified" value="0">
                            <input type="checkbox" name="verified" id="verified" value="1" <?php echo e((!empty($user) and $user->verified) ? 'checked="checked"' : ''); ?> class="custom-switch-input"/>
                            <span class="custom-switch-indicator"></span>
                            <label class="custom-switch-description mb-0 cursor-pointer" for="verified"><?php echo e(trans('admin/main.enable_blue_badge')); ?></label>
                        </label>
                    </div>

                

                
                    <div class=" mt-4">
                        <button class="btn btn-primary"><?php echo e(trans('admin/main.submit')); ?></button>
                    </div>
                
            </div>
            <div class="col-12 col-md-6">
            <div class="emotion-container">
             <?php if($user->role_id=="3"): ?>   
                    <h5 class="section-title after-line ">  حدد اشتراك </h5>
                        <div class="row mt-20">
                                                           
                                                                <?php $__currentLoopData = $subscribes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscribe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <div class="col-6">
                                                                        <div class="swiper-slide">
                                                                            <input type="checkbox" name="subscribe" id="subscribe_<?php echo e($subscribe->id); ?>" class="input-hidden" value="<?php echo e($subscribe->id); ?>" <?php if(!empty($orders_item_sub)): ?><?php echo e(($subscribe->id ==  $orders_item_sub->subscribe_id) ? 'checked' : ''); ?><?php endif; ?> hidden/>
                                                                            <label for="subscribe_<?php echo e($subscribe->id); ?>">
                                                                                <div class="subscribe-plan position-relative bg-white d-flex flex-column align-items-center rounded-sm shadow pt-50 pb-20 px-20" style="height: 614px;">
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
                         <?php endif; ?>
                </div>
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
                    var maxQuantity = (levelId1 == 6) ? 3 : 7;
                $('.quantity-input').attr('max', maxQuantity);
            $('#level').change(function() {
               
                var levelId = $(this).val();
                // alert(levelId);
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
         function updatePrice(subscribeId, basePrice) {
            var quantity = $('#quantity_' + subscribeId).val();
            var newPrice = basePrice * quantity;
            $('#amount_' + subscribeId).val(newPrice);
            $('#subscribe_' + subscribeId).siblings('label').find('.line-height-x').text(newPrice + ' TND');
        }
    </script>
<?php $__env->stopPush(); ?>

            </div>    
        </div>
    </form>
</div>
<?php /**PATH C:\Users\moham\OneDrive\Desktop\Abajim\Abajimnew21052024\Abajimnew\Abajim\resources\views/admin/school/edit_general.blade.php ENDPATH**/ ?>