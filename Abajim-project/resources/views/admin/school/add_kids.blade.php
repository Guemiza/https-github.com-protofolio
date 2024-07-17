@extends('admin.layouts.app')

@push('styles_top')
    <link rel="stylesheet" href="/assets/default/vendors/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="/assets/default/vendors/select2/select2.min.css">
@endpush
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
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ trans('admin/main.user_kids') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin/">{{ trans('admin/main.dashboard') }}</a>
                </div>
                <div class="breadcrumb-item active"><a href="/admin/users">{{ trans('admin/main.users') }}</a>
                </div>
                <div class="breadcrumb-item">{{ trans('/admin/main.edit') }}</div>
            </div>
        </div>

        @if (!empty(session()->has('msg')))
            <div class="alert alert-success my-25">
                {{ session()->get('msg') }}
            </div>
        @endif


        <div class="section-body">
            <div class="row">
                    <div class="card ">
                        <div class="card-body">

                            {{-- <ul class="nav nav-pills" id="myTab3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link @if (empty($becomeInstructor)) active @endif" id="general-tab"
                                        data-toggle="tab" href="#general" role="tab" aria-controls="general"
                                        aria-selected="true">{{ trans('admin/main.main_general') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="images-tab" data-toggle="tab" href="#images" role="tab"
                                        aria-controls="images" aria-selected="true">{{ trans('auth.images') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="purchased_bundles-tab" data-toggle="tab" href="#purchased_bundles" role="tab" aria-controls="purchased_bundles" aria-selected="true">{{ trans('update.list_enfant') }}</a>
                                </li>
                            </ul> --}}

                            <div class="tab-content" id="myTabContent2">                   
                                    <form action="/admin/school/kids/{{ $user->id . '/add' }}" method="Post">
                                        {{ csrf_field() }}
                                        <div class="row">    
                                            <div class="col-12 col-md-8">
                                                <input type="text" name="parentid" value="{{ $user->id}}" hidden/>
                                                <div class="form-group mt-20">
                                                    <label>{{ trans('/admin/main.full_name_kids_nom') }}</label>
                                                    <input type="text" name="nom"
                                                        class="form-control  @error('nom') is-invalid @enderror"
                                                        placeholder="{{ trans('/admin/main.full_name_kids_nom') }}" />
                                                    @error('nom')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group mt-20">
                                                    <label>{{ trans('/admin/main.full_name_kids_prenom') }}</label>
                                                    <input type="text" name="prenom"
                                                        class="form-control  @error('prenon') is-invalid @enderror"
                                                        
                                                        placeholder="{{ trans('/admin/main.full_name_kids_prenom') }}" />
                                                    @error('prenon')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                               
                                                <input value="10" id="roleId" name="role_id" hidden />
                                                
                                                <div class="form-group mt-10" >
                                                    <label class="input-label"
                                                        style="margin-left: 1900px;">{{ trans('admin/main.sexe') }}</label>
                                                    <div class="input-group">
                                                        <select name="sexe" id="cars"
                                                            class="form-control {{ !empty($post) ? 'js-edit-content-locale' : '' }}">
                                                            <option value="Garçon">Garçon</option>
                                                            <option value="Fille">Fille</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="input-label">{{ trans('admin/main.level') }}</label>
                                                    <?php
                                                    $leveeeel = DB::table('school_levels')->where('id', '>', 5)->get();
                                                    ?>
                                                    <select name="level_id" id="levelSelect" class="form-control {{ !empty($post) ? 'js-edit-content-locale' : '' }}">
                                                        @foreach ($leveeeel as $lang)
                                                            <option value="{{ $lang->id }}">{{ $lang->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('locale')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                             </div>
                                            <div class="col-12 col-md-4">
                                                <div class="emotion-container">
                                                 <h5 class="section-title after-line ">حدد اشتراك </h5>
                                                    <div class="row mt-20">                                                  
                                                        @foreach($subscribes as $subscribe)
                                                            <div class="col-6">
                                                                <div class="swiper-slide">
                                                                    <input type="checkbox" name="subscribe" id="subscribe_{{ $subscribe->id }}" class="input-hidden" value="{{ $subscribe->id }}" hidden/>
                                                                    <label for="subscribe_{{ $subscribe->id }}">
                                                                        <div class="subscribe-plan position-relative bg-white d-flex flex-column align-items-center rounded-sm shadow pt-50 pb-20 px-20" style="height: 470px;">
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
                                                </div>
                                            </div>
                                            
                                        </div>
                                             <div class="mt-4 ml-40">
                                                    <button class="btn btn-primary">{{ trans('admin/main.submit') }}</button>
                                            </div>   
                                    </form>
                               
                                <div class="col-12">
                                    <div class="mt-5">
                                        <h5 class="section-title after-line">{{ trans('admin/main.list_kids') }}</h5>

                                        <div class="table-responsive mt-3">
                                            <table class="table table-striped table-md">
                                                <tr>
                                                    <th>{{ trans('admin/main.full_name_kids_nom') }}</th>
                                                    <th>{{ trans('admin/main.level') }}</th>
                                                

                                                    <th>{{ trans('admin/main.type_subscribe') }}</th>
                                                    <th>{{ trans('admin/main.wallet_charge') }}</th>
                                                    <th>{{ trans('admin/main.bayer') }}</th>

                                                    <th>{{ trans('admin/main.classes') }}</th>
                                                    <th>{{ trans('admin/main.appointments') }}</th>
                                                    <th>{{ trans('admin/main.register_date') }}</th>
                                                    <th>{{ trans('admin/main.status') }}</th>

                                                    <th class="text-right">{{ trans('admin/main.actions') }}</th>
                                                </tr>

                                                @foreach($mykids as $user)    
                                                
                                                        <?php  $varff = DB::table('school_levels')->where('id', $user->level_id)->pluck('name');                                                   
                                                        ?>
                                                <tr>
                                                    
                                                    <td class="text-left">
                                                        <div class="d-flex align-items-center">
                                                            <figure class="avatar mr-2">
                                                                <img src="{{ $user->getAvatar() }}" alt="{{ $user->full_name }}">
                                                            </figure>
                                                            <div class="media-body ml-1">
                                                                <div class="mt-0 mb-1 font-weight-bold">{{ $user->full_name }}</div>

                                                                @if($user->mobile)
                                                                    <div class="text-primary text-small font-600-bold">{{ $user->mobile }}</div>
                                                                @endif

                                                                @if($user->email)
                                                                    <div class="text-primary text-small font-600-bold">{{ $user->email }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </td>
                                                
                                                    <td>{{ $varff[0] }}</td>
                                                    <?php
                                                    $order_user = DB::table('order_items')->where('user_id', $user->id)->pluck('total_amount');
                                                    $sub_user = DB::table('order_items')->where('user_id', $user->id)->pluck('subscribe_id');
                                                    ?>  
                                                    <td>
                                                    @if( $sub_user !='[]')
                                                        @if($sub_user[0] == 3)
                                                            الكرطابلة
                                                        @elseif($sub_user[0] == 9)
                                                            على كيفك
                                                        @endif
                                                    @endif
                                                    </td>

                                                    <td> {{ $user->getAccountingBalance() }} TND </td>

                                                                       

                                                    <td>
                                                        <div class="media-body">
                                                                <div class="text-primary mt-0 mb-1 font-weight-bold"> @if( $order_user !='[]'){{ $order_user[0] }}TND  @endif</div>
                                                        </div>
                                                    </td>

                                                    
                                                    <td>
                                                        <div class="media-body">
                                                            <div class="text-primary mt-0 mb-1 font-weight-bold">{{ $user->classesPurchasedsCount }}</div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="media-body">
                                                            <div class="text-primary mt-0 mb-1 font-weight-bold">{{ $user->meetingsPurchasedsCount }}</div>
                                                        </div>
                                                    </td>
                                                    <td>{{ dateTimeFormat($user->created_at, 'j M Y | H:i') }}</td>
                                                    <td>
                                                        @if($user->ban and !empty($user->ban_end_at) and $user->ban_end_at > time())
                                                            <div class="mt-0 mb-1 font-weight-bold text-danger">{{ trans('admin/main.ban') }}</div>
                                                            <div class="text-small font-600-bold">Until {{ dateTimeFormat($user->ban_end_at, 'Y/m/j') }}</div>
                                                        @else
                                                            <div class="mt-0 mb-1 font-weight-bold {{ ($user->status == 'active') ? 'text-success' : 'text-warning' }}">{{ trans('admin/main.'.$user->status) }}</div>
                                                        @endif
                                                    </td>
                                                    <td class="text-center mb-2" width="120">
                                                        @can('admin_users_impersonate')
                                                            <a href="/admin/users/{{ $user->id }}/impersonate" target="_blank" class="btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="{{ trans('admin/main.login') }}">
                                                                <i class="fa fa-user-shield"></i>
                                                            </a>
                                                        @endcan

                                                        @can('admin_users_edit')
                                                            <a href="/admin/users/{{ $user->id }}/edit" class="btn-transparent  text-primary" data-toggle="tooltip" data-placement="top" title="{{ trans('admin/main.edit') }}">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                        @endcan

                                                        @can('admin_users_delete')
                                                            @include('admin.includes.delete_button',['url' => '/admin/users/'.$user->id.'/delete' , 'btnClass' => ''])
                                                        @endcan
                                                    </td>

                                                </tr>
                                            @endforeach
                                            </table>
                                            <p class="font-12 text-gray mt-1 mb-0">{{ trans('admin/main.not_result') }}</p>
                                        </div>
                                    </div>
                                </div>
                                @include('admin.users.editTabs.purchased_bundles')

                                @if (!empty($user) and ($user->isOrganization() or $user->isTeacher()))
                                    @can('admin_update_user_registration_package')
                                        @include('admin.users.editTabs.registration_package')
                                    @endcan
                                @endif



                            </div>
                        </div>
                    </div>
                
            </div>
        </div>
    </section>
@endsection

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
                    var maxQuantity = (levelId1 == 6) ? 3 : 3;
                $('.quantity-input').attr('max', maxQuantity);
            $('#levelSelect').change(function() {
               
                var levelId = $(this).val();
                // alert(levelId);
                 
                updateMaxQuantity(levelId );
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
@endpush
