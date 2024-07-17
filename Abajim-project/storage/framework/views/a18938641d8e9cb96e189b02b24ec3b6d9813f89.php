<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="row login-container">
            <div class="col-12 col-md-6 pl-0">
                <img style="height: 55%!important;" src="<?php echo e(getPageBackgroundSettings('become_instructor')); ?>" class="img-cover" alt="Login">
            </div>

            <div class="col-12 col-md-6">
                <div class="login-card">
                    <h1 class="font-20 font-weight-bold"><?php echo e(trans('site.become_instructor')); ?></h1>

                    <form method="Post" action="/become-instructor" class="mt-35">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label class="js-instructor-label font-weight-500 text-dark-blue <?php echo e(!$isInstructorRole ? 'd-none' : ''); ?>">level</label>
                            <label class="js-organization-label font-weight-500 text-dark-blue <?php echo e(!$isOrganizationRole ? 'd-none' : ''); ?>"><?php echo e(trans('update.organization_occupations')); ?></label>

                            <div class="d-flex flex-wrap mt-5">
                        <?php $__currentLoopData = $level; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                                   <div class="checkbox-button mr-15 mt-10 font-14">
                                       <input type="checkbox" name="occupationsll[]" id="checkbox<?php echo e($level->id); ?>" value="<?php echo e($level->id); ?>" <?php if(!empty($occupationsll) and in_array($level->id,$occupationsll)): ?> checked="checked" <?php endif; ?>>
                                       <label for="checkbox<?php echo e($level->id); ?>"><?php echo e($level->name); ?></label>
                                   </div>
                               
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div>
                        </div>
                        <div class="form-group">
                            <label class="js-instructor-label font-weight-500 text-dark-blue <?php echo e(!$isInstructorRole ? 'd-none' : ''); ?>"><?php echo e(trans('update.instructor_occupations')); ?></label>
                            <label class="js-organization-label font-weight-500 text-dark-blue <?php echo e(!$isOrganizationRole ? 'd-none' : ''); ?>"><?php echo e(trans('update.organization_occupations')); ?></label>

                            <div class="d-flex flex-wrap mt-5">

                   
               
                               <?php $__currentLoopData = $matiere; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $matiere): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   
                                        <div class="checkbox-button mr-15 mt-10 font-14">
                                            <input type="checkbox" name="occupations[]" id="checkbox<?php echo e($matiere->id); ?>" value="<?php echo e($matiere->id); ?>" <?php if(!empty($occupations) and in_array($matiere->id,$occupations)): ?> checked="checked" <?php endif; ?>>
                                            <label for="checkbox<?php echo e($matiere->id); ?>"><?php echo e($matiere->name); ?></label>
                                        </div>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <label class="js-instructor-label font-weight-500 text-dark-blue <?php echo e(!$isInstructorRole ? 'd-none' : ''); ?>"><?php echo e(trans('update.instructor_certificate_and_documents')); ?></label>
                            <label class="js-organization-label font-weight-500 text-dark-blue <?php echo e(!$isOrganizationRole ? 'd-none' : ''); ?>"><?php echo e(trans('update.organization_certificate_and_documents')); ?></label>

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="button" class="input-group-text panel-file-manager" data-input="certificate" data-preview="holder">
                                        <i data-feather="arrow-up" width="18" height="18" class="text-white"></i>
                                    </button>
                                </div>
                                <input type="text" name="certificate" id="certificate" value="<?php echo e(!empty($lastRequest) ? $lastRequest->certificate : old('certificate')); ?>" class="form-control "/>
                            </div>
                        </div>

                        

                       

                       

                        <div class="form-group">
                            <label class="js-instructor-label font-weight-500 text-dark-blue <?php echo e(!$isInstructorRole ? 'd-none' : ''); ?>"><?php echo e(trans('update.instructor_identity_scan')); ?></label>
                            <label class="js-organization-label font-weight-500 text-dark-blue <?php echo e(!$isOrganizationRole ? 'd-none' : ''); ?>"><?php echo e(trans('update.organization_identity_scan')); ?></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button type="button" class="input-group-text panel-file-manager" data-input="identity_scan" data-preview="holder">
                                        <i data-feather="arrow-up" width="18" height="18" class="text-white"></i>
                                    </button>
                                </div>
                                <input type="text" name="identity_scan" id="identity_scan" value="<?php echo e((!empty($user)) ? $user->identity_scan : old('identity_scan')); ?>" class="form-control <?php $__errorArgs = ['identity_scan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"/>
                                <?php $__errorArgs = ['identity_scan'];
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

                        

                        <button type="submit" class="btn btn-primary btn-block mt-20"><?php echo e((!empty(getRegistrationPackagesGeneralSettings('show_packages_during_registration')) and getRegistrationPackagesGeneralSettings('show_packages_during_registration')) ? trans('webinars.next') : trans('site.send_request')); ?></button>
                    </form>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts_bottom'); ?>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

    <script src="/assets/default/js/parts/become_instructor.min.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(getTemplate().'.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\moham\OneDrive\Desktop\Abajim\Abajimnew21052024\Abajimnew\Abajim\resources\views/web/default/user/become_instructor/indexteacher.blade.php ENDPATH**/ ?>