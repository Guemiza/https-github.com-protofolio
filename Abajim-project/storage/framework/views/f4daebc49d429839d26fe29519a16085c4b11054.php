

<?php $__env->startPush('styles_top'); ?>
    <link rel="stylesheet" href="/assets/vendors/leaflet/leaflet.css">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<style>

input[type="file"] {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}
input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
}
input[type="submit"]:hover {
    background-color: #45a049;
}

</style>
<style>
    .upload-container {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .file-upload-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100px;
        height: 100px;
        border: 2px dashed #ccc;
        border-radius: 10px;
    }

    .file-upload-wrapper1 {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 700px;
        height: 120px;
        border: 2px dashed #ccc;
        border-radius: 10px;
    }
    .file-upload-wrapper2 {
        margin-top: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 700px;
        height: 420px;
        border: 2px dashed #555;
        border-radius: 10px;
    }
    .file-upload-wrapper:hover {
        background-color: #f0f0f0;
        cursor: pointer;
    }

    .file-upload-button {
        display: none;
    }

    .upload-icon {
        font-size: 24px;
        /* Adjust size as needed */
        color: #555;
    }

    /* Add additional styles for your uploaded images */
    .uploaded-images img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 10px;
    }
</style>
    <section class="section">
        <div class="section-header">
            <h1>Add For any countries all Level and All Manul Scolaire</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo e(getAdminPanelUrl()); ?>"><?php echo e(trans('admin/main.dashboard')); ?></a>
                </div>
                <div class="breadcrumb-item">Add For any countries all Level and All Manul Scolaire</div>
            </div>
        </div>

        <div class="section-body">
            <section class="card">
                <div class="card-body">
                    <form action="<?php echo e(!empty($region) ? getAdminPanelUrl("/regions/{$region->id}/update") : getAdminPanelUrl("/regions/store")); ?>" method="post">
                        <?php echo e(csrf_field()); ?>


                        <input type="hidden" name="type" value="<?php echo e(!empty($region) ? $region->type : request()->get('type', \App\Models\Region::$country)); ?>">

                        <div class="row">
                            <div class="col-12 col-lg-6">

                                <div id="countrySelectBox" class="form-group <?php echo e(!empty($countries) ? '' : 'd-none'); ?>">
                                    <label class="input-label"><?php echo e(trans('update.countries')); ?></label>
                                    <select name="country_id" class="form-control search-region-select2 <?php $__errorArgs = ['country_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" data-type="<?php echo e(\App\Models\Region::$country); ?>" data-placeholder="<?php echo e(trans('admin/main.search')); ?> <?php echo e(trans('update.countries')); ?>">

                                        <?php if(!empty($countries)): ?>
                                            <option value=""><?php echo e(trans('admin/main.select')); ?> <?php echo e(trans('update.country')); ?></option>

                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($country->id); ?>" data-center="<?php echo e(implode(',', $country->geo_center)); ?>" <?php echo e(((!empty($region) and $region->country_id == $country->id) or old('country_id') == $country->id) ? 'selected' : ''); ?>><?php echo e($country->title); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>
                                    <?php $__errorArgs = ['country_id'];
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

                                <div id="provinceSelectBox" class="form-group <?php echo e(((!empty($region) and ($region->type == \App\Models\Region::$city or $region->type == \App\Models\Region::$district)) or (!empty(request()->get('type')) and (request()->get('type') == \App\Models\Region::$city or request()->get('type') == \App\Models\Region::$district))) ? '' : 'd-none'); ?>">
                                    <label class="input-label"><?php echo e(trans('update.provinces')); ?></label>

                                    <select name="province_id" <?php echo e(empty($provinces) ? 'disabled' : ''); ?> class="form-control <?php $__errorArgs = ['province_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <option value=""><?php echo e(trans('admin/main.select')); ?> <?php echo e(trans('update.province')); ?></option>

                                        <?php if(!empty($provinces)): ?>
                                            <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($province->id); ?>" data-center="<?php echo e(implode(',', $province->geo_center)); ?>" <?php echo e(((!empty($region) and $region->province_id == $province->id) or old('province_id') == $province->id) ? 'selected' : ''); ?>><?php echo e($province->title); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>

                                    <?php $__errorArgs = ['province_id'];
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

                                <div id="citySelectBox" class="form-group <?php echo e(((!empty($region) and $region->type == \App\Models\Region::$district) or (!empty(request()->get('type')) and request()->get('type') == \App\Models\Region::$district)) ? '' : 'd-none'); ?>">
                                    <label class="input-label"><?php echo e(trans('update.city')); ?></label>

                                    <select name="city_id" <?php echo e(empty($cities) ? 'disabled' : ''); ?> class="form-control <?php $__errorArgs = ['city_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                        <option value=""><?php echo e(trans('admin/main.select')); ?> <?php echo e(trans('update.city')); ?></option>

                                        <?php if(!empty($cities)): ?>
                                            <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($city->id); ?>" data-center="<?php echo e(implode(',', $city->geo_center)); ?>" <?php echo e(((!empty($region) and $region->city_id == $city->id) or old('city_id') == $city->id) ? 'selected' : ''); ?>><?php echo e($city->title); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </select>

                                    <?php $__errorArgs = ['city_id'];
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
                                    <label for="" class="input-label"><?php echo e(trans('admin/main.title')); ?></label>
                                    <input type="text" name="title" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(!empty($region) ? $region->title : ''); ?>" placeholder="<?php echo e(trans('admin/main.title')); ?>">
                                    <?php $__errorArgs = ['title'];
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
                            <label class="input-label" for="level">Niveau School :</label>
                                  <select class="form-control select2"  name="name_level" id="levelschool"   class="form-control select2">              
                                        <option value="name" >Select level school</option>
                                      <?php $__currentLoopData = $level; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           <option value="<?php echo e($lev->id); ?>" ><?php echo e($lev->name); ?></option>
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

                        <div class="form-group">
                            <label class="input-label" for="section">Section school:</label> 
                                  <select  class="form-control select2"   name="name_section" id="sectionschool"   class="form-control select2">              
                                       <option value="" disabled="true" selected="true">Select section</option>
                                   </select>
                   
               
                            <?php $__errorArgs = ['section'];
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
                        <div class="upload-container">
                                <!-- Placeholder for uploaded images -->
                                <div class="uploaded-images">
                                    <!-- Dynamically populate with uploaded images -->
                                    <img src="https://assets.lls.fr/books/978-2-37760-147-9-MA2_P_2019.png" width="140">
                                    <img src="https://www.editions-hatier.fr/sites/default/files/couvertures/couverture_7512835.jpg" width="140">
                                    <img src="https://revision.ci/assets/uploads/anals/882bb-mon-livre-de-mathematiques-2ndc.png" width="140">

                                    <img src="https://images.epagine.fr/778/9782013954778_1_75.jpg" width="140">

                                    <!-- Add more <img> tags for each uploaded image -->
                                </div>

                                <!-- Upload button with "+" icon -->
                                <label class="file-upload-wrapper" for="file-upload">
                                    <i class="upload-icon">+ </i>
                                </label>
                                <input id="file-upload" class="file-upload-button" type="file" name="files[]" multiple hidden>
                            </div>


                         <div class="form-group">
                            <label class="input-label" for="section">Option school:</label> 
                                  <select class="form-control select2" name="name_option" id="optionschool"   class="form-control select2">              
                                       <option value="0" disabled="true" selected="true">Select option school</option>
                                   </select>
                   
               
                            <?php $__errorArgs = ['section'];
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
                        <div class="upload-container">
                                <!-- Placeholder for uploaded images -->
                                <div class="uploaded-images">
                                    <!-- Dynamically populate with uploaded images -->
                                    <img src="https://fr.shopping.rakuten.com/photo/2268346175_ML_NOPAD.jpg" width="140">
                                    <img src="https://fr.shopping.rakuten.com/photo/2334557014_ML_NOPAD.jpg" width="140">
                                    <img src="https://assets.lls.fr/books/978-2-37760-160-8-ESP2_P_2019.png" width="140">

                                    <img src="https://www.editions-delagrave.fr/sites/default/files/produits/images/couvertures/9782206401782-g.jpg" width="140">

                                    <!-- Add more <img> tags for each uploaded image -->
                                </div>

                                <!-- Upload button with "+" icon -->
                                <label class="file-upload-wrapper" for="file-upload">
                                    <i class="upload-icon">+ </i>
                                </label>
                                <input id="file-upload" class="file-upload-button" type="file" name="files[]" multiple hidden>
                            </div> <label class="file-upload-wrapper2" for="file-upload">
                            <label class="input-label">  Drag and Drop Textbook To this Block</label>
                          

                               </label>



                            </div>

                            <div class="col-12 col-lg-6">
                         
                                    <form method="post" action="/admin/regions/newcreatepost"> 
                                    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>"> 
                                <div class="form-group">
                                    <input type="hidden" id="LocationLatitude" name="latitude" value="<?php echo e($latitude); ?>">
                                    <input type="hidden" id="LocationLongitude" name="longitude" value="<?php echo e($longitude); ?>">
                                  
                                    <label class="input-label"><?php echo e(trans('update.select_location')); ?></label>
                                  

                                    <div style="height: 300px;" class="region-map mt-2" id="mapBox"
                                         data-latitude="<?php echo e($latitude); ?>"
                                         data-longitude="<?php echo e($longitude); ?>"
                                         data-zoom="<?php echo e((!empty($region) and $region->type !== \App\Models\Region::$country and $region->type !== \App\Models\Region::$province and !empty($region->geo_center)) ? 12 : 5); ?>"
                                    >
                                        <img src="/assets/default/img/location.png" class="marker">
                                    </div>
                                </div>
                                <label class="file-upload-wrapper1" for="file-upload">

                                    <img src="/pdf/play-button.png"width="60" style="margin-left: 10px;" class="draggable" id="icon1" draggable="true">
                                    <img src="/pdf/icon2.png" class="marker" style="margin-left: 10px;"  width="60">
                                    <img src="/pdf/eye.png" class="marker" style="margin-left: 10px;"  width="60">
                                </label>

                                <div style="padding:10px">
                                <object data="<?php echo e(asset($pdfPath)); ?>#toolbar=0&page=6&zoom=86" type="application/pdf" width="100%" height="880px" id="pdf-display-area">
                <p>Unable to display PDF file. <a href="<?php echo e($pdfPath); ?>">Download</a> instead.</p>
            </object>
            <!-- <object data="/assets/ManuelScolaire/bac_sci/4sc_t1.pdf#toolbar=0&page=6&zoom=86" type="application/pdf" width="100%" height="880px">
                <p>Unable to display PDF file. <a href="">Download</a> instead.</p>
            </object> -->
        </div> 
                                    </form>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success mt-4"><?php echo e(trans('admin/main.save')); ?></button>
                    </form>
                </div>
            </section>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts_bottom'); ?>
    <script src="/assets/vendors/leaflet/leaflet.min.js"></script>

    <script>
        var selectProvinceLang = '<?php echo e(trans('update.select_province')); ?>';
        var selectCityLang = '<?php echo e(trans('update.select_city')); ?>';
        var leafletApiPath = '<?php echo e(getLeafletApiPath()); ?>';
    </script>
    <script src="/assets/default/js/admin/regions_create.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){


 ///level-section////


$(document).on('change','#levelschool',function(){

var level_id=$(this).val();
console.log(level_id);
var div=$(this).parents();
var op=" ";

$.ajax({
  type:'get',
  url:'<?php echo URL::to('findSchoolSection'); ?>',
  data:{'level_id':level_id},
  success:function(data){
   //console.log('success');
    console.log(data);
    //console.log(data.length);
   op+='<option value="0" selected disabled>Select Section</option>';
   
   for(var i=0;i<data.length;i++){
     console.log(data[i].name);
   op+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
  
   }
   div.find('#sectionschool').html(" ");
   div.find('#sectionschool').append(op);
   
   
  },
  error:function(){

  },
});

});
///level-option
$(document).on('change','#levelschool',function(){

var level_id=$(this).val();
console.log(level_id);
var div=$(this).parents();
var op=" ";

$.ajax({
  type:'get',
  url:'<?php echo URL::to('findSchoolOption'); ?>',
  data:{'level_id':level_id},
  success:function(data){
   //console.log('success');
    console.log("option :"+data);
    //console.log(data.length);
   op+='<option value="0" selected disabled>Select Option</option>';
   
   for(var i=0;i<data.length;i++){
     console.log(data[i].name);
   op+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
  
   }
   div.find('#optionschool').html(" ");
   div.find('#optionschool').append(op);
   
   
  },
  error:function(){

  },
});

});





});


document.addEventListener('DOMContentLoaded', function() {
   

    $('#icon1').on('dragend', function(event) {
        var xPosition = event.clientX - $('#pdf-display-area').offset().left;
        var yPosition = event.clientY - $('#pdf-display-area').offset().top;
        var postUrl = "<?php echo e(route('regions.create')); ?>";

        // Send the coordinates to the server using AJAX
        $.ajax({
            url: postUrl,
            type: 'post',
            headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             },
            data: {
            
                x: xPosition,
                y: yPosition
            },
            success: function(response) {
                console.log(response);
                // Handle success
            },
            error: function(error) {
                console.error(error);
                // Handle error
            }
        });
    });
});

function pixelsToMm(pixels) {
    // Conversion logic here, depends on the DPI of your PDF display
}

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf_viewer.min.js"></script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\moham\OneDrive\Desktop\Abajim\Abajimnew21052024\Abajimnew\Abajim\resources\views/admin/regions_manual_scolaire/index.blade.php ENDPATH**/ ?>