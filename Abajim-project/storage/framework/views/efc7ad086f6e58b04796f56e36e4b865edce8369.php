<div class="tab-pane mt-3 fade " id="referral" role="tabpanel" aria-labelledby="referral-tab">
    <div class="row">
        <div class="col-12 col-md-6">
            <form action="/admin/settings/main" method="post">
                <?php echo e(csrf_field()); ?>

                <input type="hidden" name="page" value="financial">
                <input type="hidden" name="name" value="referral">


              
                <div class="empty-state mx-auto d-block"  data-width="900" >
                    <img class="img-fluid col-md-6" src="/assets/default/img/plugin.svg" alt="image">
                      
                  </div>


            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\moham\OneDrive\Desktop\Abajim\Abajimnew21052024\Abajimnew\Abajim\resources\views/admin/settings/financial/referral.blade.php ENDPATH**/ ?>