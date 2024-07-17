<div class="tab-pane mt-3 fade @if(empty($becomeInstructor)) active show @endif" id="general" role="tabpanel" aria-labelledby="general-tab">
    <form action="/admin/school/kids/{{ $user->id .'/update' }}" method="Post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label>{{ trans('/admin/main.full_name') }}</label>
                        <input type="text" name="full_name"
                            class="form-control  @error('full_name') is-invalid @enderror"
                            value="{{ !empty($user) ? $user->full_name : old('full_name') }}"
                            placeholder="{{ trans('admin/main.create_field_full_name_placeholder') }}"/>
                        @error('full_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    
                    <div class="form-group">
                        <label for="username">{{ trans('admin/main.email') }}:</label>
                        <input name="email" type="text" id="username" value="{{ $user->email }}" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                       <input name="organ_id" type="text" value="{{ $user->organ_id  }}" class="form-control" hidden>

                    <div class="form-group">
                        <label for="username">{{ trans('admin/main.mobile') }}:</label>
                        <input name="mobile" type="text" value="{{ $user->mobile }}" class="form-control @error('mobile') is-invalid @enderror">
                        @error('mobile')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                @if($user->role_id=="9") 
                    <div class="form-group">
                    <label class="input-label">{{ trans('auth.language') }}</label>
                    <select name="language" class="form-control">
                        <option value="">{{ trans('auth.language') }}</option>
                        @foreach($userLanguages as $lang => $language)
                            <option value="{{ $lang }}" @if(!empty($user) and mb_strtolower($user->language) == mb_strtolower($lang)) selected @endif>{{ $language }}</option>
                        @endforeach
                    </select>
                    @error('language')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group custom-switches-stacked mt-2">
                    <label class="custom-switch pl-0">
                        <input type="hidden" name="ban" value="0">
                        <input type="checkbox" name="ban" id="banSwitch" value="1" {{ (!empty($user) and $user->ban) ? 'checked="checked"' : '' }} class="custom-switch-input"/>
                        <span class="custom-switch-indicator"></span>
                        <label class="custom-switch-description mb-0 cursor-pointer" for="banSwitch">{{ trans('admin/main.ban') }}</label>
                    </label>
                </div>
                @else
                    <div class="form-group">
                        <label>{{ trans('/admin/main.level') }}</label>
                        <select class="form-control @error('level') is-invalid @enderror" id="level" name="level">
                            <option disabled {{ empty($user) ? 'selected' : '' }}>{{ trans('admin/main.level') }}</option>

                            @foreach ($levels as $levels)
                                <option value="{{ $levels->id }}" {{ !empty($user) && $user->level_id === $levels->id ? 'selected' :''}}>{{  $levels->name }}</option>
                            @endforeach
                        </select>
                        @error('level')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                @endif
                    <div class="form-group">
                        <label>{{ trans('/admin/main.status') }}</label>
                        <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                            <option disabled {{ empty($user) ? 'selected' : '' }}>{{ trans('admin/main.select_status') }}</option>

                            @foreach (\App\User::$statuses as $status)
                                <option value="{{ $status }}" {{ !empty($user) && $user->status === $status ? 'selected' :''}}>{{  $status }}</option>
                            @endforeach
                        </select>
                        @error('status')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                
                    <div class="form-group custom-switches-stacked mt-2">
                        <label class="custom-switch pl-0">
                            <input type="hidden" name="ban" value="0">
                            <input type="checkbox" name="ban" id="banSwitch" value="1" {{ (!empty($user) and $user->ban) ? 'checked="checked"' : '' }} class="custom-switch-input"/>
                            <span class="custom-switch-indicator"></span>
                            <label class="custom-switch-description mb-0 cursor-pointer" for="banSwitch">{{ trans('admin/main.ban') }}</label>
                        </label>
                    </div>

                    <div class="row {{ (($user->ban) or (old('ban') == 'on')) ? '' : 'd-none' }}" id="banSection">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="input-label">{{ trans('public.from') }}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="dateInputGroupPrepend">
                                                                            <i class="fa fa-calendar-alt"></i>
                                                                        </span>
                                    </div>
                                    <input type="text" name="ban_start_at" class="form-control datepicker @error('ban_start_at') is-invalid @enderror" value="{{ !empty($user->ban_start_at) ? dateTimeFormat($user->ban_start_at,'Y/m/d') :'' }}"/>
                                    @error('ban_start_at')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="input-label">{{ trans('public.to') }}</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="dateInputGroupPrepend">
                                                                            <i class="fa fa-calendar-alt"></i>
                                                                        </span>
                                    </div>
                                    <input type="text" name="ban_end_at" class="form-control datepicker @error('ban_end_at') is-invalid @enderror" value="{{ !empty($user->ban_end_at) ? dateTimeFormat($user->ban_end_at,'Y/m/d') :'' }}"/>
                                    @error('ban_end_at')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group custom-switches-stacked">
                        <label class="custom-switch pl-0">
                            <input type="hidden" name="verified" value="0">
                            <input type="checkbox" name="verified" id="verified" value="1" {{ (!empty($user) and $user->verified) ? 'checked="checked"' : '' }} class="custom-switch-input"/>
                            <span class="custom-switch-indicator"></span>
                            <label class="custom-switch-description mb-0 cursor-pointer" for="verified">{{ trans('admin/main.enable_blue_badge') }}</label>
                        </label>
                    </div>

                

                
                    <div class=" mt-4">
                        <button class="btn btn-primary">{{ trans('admin/main.submit') }}</button>
                    </div>
                
            </div>
            <div class="col-12 col-md-6">
            <div class="emotion-container">
             @if($user->role_id=="3")   
                    <h5 class="section-title after-line ">  حدد اشتراك </h5>
                        <div class="row mt-20">
                                                           
                                                                @foreach($subscribes as $subscribe)
                                                                    <div class="col-6">
                                                                        <div class="swiper-slide">
                                                                            <input type="checkbox" name="subscribe" id="subscribe_{{ $subscribe->id }}" class="input-hidden" value="{{ $subscribe->id }}" @if(!empty($orders_item_sub)){{{ ($subscribe->id ==  $orders_item_sub->subscribe_id) ? 'checked' : '' }}}@endif hidden/>
                                                                            <label for="subscribe_{{ $subscribe->id }}">
                                                                                <div class="subscribe-plan position-relative bg-white d-flex flex-column align-items-center rounded-sm shadow pt-50 pb-20 px-20" style="height: 614px;">
                                                                                    <div class="plan-icon">
                                                                                        <img src="{{ $subscribe->icon }}" class="img-cover" alt="">
                                                                                    </div>
                                                                                    <h3 class="mt-20 font-30 text-secondary" style="color: #1d3b65 !important;">{{ $subscribe->title }}</h3>
                                                                                     @if( $subscribe->id=="9")
                                                                                        <div class="d-flex align-items-start text-primary mt-30">
                                                                                            <div class="form-group mt-20">
                                                                                                <div class="row">
                                                                                                        <div class="col-md-7">
                                                                                                        <label for="quantity_{{ $subscribe->id }}">عدد الكتب</label>
                                                                                                        </div>
                                                                                                        <div class="col-md-5">
                                                                                                        <?php
                                                                                                            $uniter_packages = DB::table('subscribes')->where('id', 4)->pluck('price');
                                                                                                        
                                                                                                        ?>
                                                                                                            <input type="number" id="quantity_{{ $subscribe->id }}" name="quantity_{{ $subscribe->id }}" class="form-control quantity-input" min="1"  value="1" onchange="updatePrice({{ $subscribe->id }}, {{ $uniter_packages[0] }})">
                                                                                                            <input name="amountX" id="amount_{{ $subscribe->id }}" value="{{  $uniter_packages[0] }}" type="hidden">
                                                                                                            <input name="id" value="{{ $subscribe->id }}" type="hidden">
                                                                                                        </div>
                                                                                                        </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <span  class="line-height-x" style="color: #1d3b65 !important;">X TND</span>
                                                                                        </div>
                                                                                    @else
                                                                                    <div class="d-flex align-items-start text-primary mt-30">
                                                                               
                                                                                        <span  class="font-10 line-height-1" style="color: #1d3b65 !important;">{{ addCurrencyToPrice($subscribe->price) }}</span>
                                                                                        <input name="amount" id="amount_{{ $subscribe->id }}" value="{{ $subscribe->price }}" type="hidden">
                                                                                        <input name="id" value="{{ $subscribe->id }}" type="hidden">
                                                                                    </div>
                                                                                    @endif
                                                                                </div>
                                                                            </label>
                                                                                    
                                                                        </div>
                                                                    </div>
                                                                        {{-- @if(auth()->check())
                                                                        <form action="/panel/financial/pay-subscribes" method="post" class="w-100">
                                                                        {{ csrf_field() }}
                                                            
                                                                        <button type="submit" class="btn btn-primary btn-block mt-50">{{ trans('financial.purchase') }}</button>

                                                                        </form>
                                                                        @else 
                                                                        <button class="btn mt-50">
                                                                        <a style="color:white" href="/login" >{{ trans('financial.purchase') }}</a>
                                                                        </button>
                                                                        @endif --}}
                                                                @endforeach
                                                            
                                                        {{-- <div class="col-md-6">   
                                                                <input type="checkbox" name="emotion" id="happy" class="input-hidden" hidden/>
                                                                <label for="happy">
                                                                    <img src="/f14.png" />
                                                                </label>
                                                            </div> --}}
                       
                        </div>
                         @endif
                </div>
@push('scripts_bottom')
    <script src="/assets/default/vendors/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="/assets/default/vendors/select2/select2.min.js"></script>

    <script>
        var saveSuccessLang = '{{ trans('webinars.success_store') }}';
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
                var userId = '{{ $user->id }}';
                 //alert(userId);
         
                $.ajax({
                    url: '/admin/get-price',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
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
@endpush

            </div>    
        </div>
    </form>
</div>
