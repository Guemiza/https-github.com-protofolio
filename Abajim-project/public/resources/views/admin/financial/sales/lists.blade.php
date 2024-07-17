@extends('admin.layouts.app')
 <style>
        .custom-control {
            position: relative;
            display: block;
            min-height: 1.5rem;
            padding-left: 1.5rem;
        }

        .custom-control-input {
            position: absolute;
            left: 0;
            z-index: -1;
            width: 1rem;
            height: 1.25rem;
            opacity: 0;
        }

        .custom-control-label::before {
            position: absolute;
            top: 0.25rem;
            left: -2rem;
            display: block;
            width: 2rem;
            height: 1rem;
            pointer-events: none;
            content: "";
            background-color: #adb5bd;
            border-radius: 0.5rem;
            transition: background-color 0.15s ease-in-out;
        }

        .custom-control-label::after {
            position: absolute;
            top: 0.25rem;
            left: -2rem;
            display: block;
            width: 1rem;
            height: 1rem;
            pointer-events: none;
            content: "";
            background-color: #fff;
            border-radius: 0.5rem;
            transition: transform 0.15s ease-in-out;
        }

        .custom-control-input:checked ~ .custom-control-label::before {
            background-color: #28a745;
        }

        .custom-control-input:checked ~ .custom-control-label::after {
            transform: translateX(1rem);
        }

        .status-active {
            color: #28a745;
            font-weight: bold;
        }

        .status-inactive {
            color: #adb5bd;
            font-weight: bold;
        }
    </style>
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ trans('admin/main.sales') }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="/admin/">{{trans('admin/main.dashboard')}}</a>
                </div>
                <div class="breadcrumb-item">{{ trans('admin/main.sales') }}</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-primary">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>{{trans('admin/main.total_sales')}}</h4>
                            </div>
                            <div class="card-body">
                                {{ $totalSales['count'] }}
                            </div>
                            <div class="text-primary font-weight-bold">
                                {{ addCurrencyToPrice($totalSales['amount']) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-play-circle"></i></div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>{{trans('admin/main.classes_sales')}}</h4>
                            </div>
                            <div class="card-body">
                                {{ $classesSales['count'] }}
                            </div>
                            <div class="text-success font-weight-bold">
                                {{ addCurrencyToPrice($classesSales['amount']) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-calendar-alt"></i></div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>{{trans('admin/main.appointments_sales')}}</h4>
                            </div>
                            <div class="card-body">
                                {{ $appointmentSales['count'] }}
                            </div>
                            <div class="text-danger font-weight-bold">
                                {{ addCurrencyToPrice($appointmentSales['amount']) }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-times"></i></div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>{{trans('admin/main.faild_sales')}}</h4>
                            </div>
                            <div class="card-body">
                                {{ $failedSales }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <section class="card">
                <div class="card-body">
                    <form method="get" class="mb-0">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">{{ trans('admin/main.search') }}</label>
                                    <input type="text" class="form-control" name="item_title" value="{{ request()->get('item_title') }}">
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">{{ trans('admin/main.start_date') }}</label>
                                    <div class="input-group">
                                        <input type="date" id="fsdate" class="text-center form-control" name="from" value="{{ request()->get('from') }}" placeholder="Start Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">{{ trans('admin/main.end_date') }}</label>
                                    <div class="input-group">
                                        <input type="date" id="lsdate" class="text-center form-control" name="to" value="{{ request()->get('to') }}" placeholder="End Date">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">{{ trans('admin/main.status') }}</label>
                                    <select name="status" data-plugin-selectTwo class="form-control populate">
                                        <option value="">{{ trans('admin/main.all_status') }}</option>
                                        <option value="success" @if(request()->get('status') == 'success') selected @endif>{{ trans('admin/main.successs') }}</option>
                                        <option value="refund" @if(request()->get('status') == 'refund') selected @endif>{{ trans('admin/main.refund') }}</option>
                                        <option value="blocked" @if(request()->get('status') == 'blocked') selected @endif>{{ trans('admin/main.access_blocked') }}</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">{{ trans('admin/main.class') }}</label>
                                    <select name="webinar_ids[]" multiple="multiple" class="form-control search-webinar-select2"
                                            data-placeholder="Search classes">

                                        @if(!empty($webinars) and $webinars->count() > 0)
                                            @foreach($webinars as $webinar)
                                                <option value="{{ $webinar->id }}" selected>{{ $webinar->title }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">{{ trans('admin/main.instructor') }}</label>
                                    <select name="teacher_ids[]" multiple="multiple" data-search-option="just_teacher_role" class="form-control search-user-select2"
                                            data-placeholder="Search teachers">

                                        @if(!empty($teachers) and $teachers->count() > 0)
                                            @foreach($teachers as $teacher)
                                                <option value="{{ $teacher->id }}" selected>{{ $teacher->full_name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="input-label">{{ trans('admin/main.student') }}</label>
                                    <select name="student_ids[]" multiple="multiple" data-search-option="just_student_role" class="form-control search-user-select2"
                                            data-placeholder="Search students">

                                        @if(!empty($students) and $students->count() > 0)
                                            @foreach($students as $student)
                                                <option value="{{ $student->id }}" selected>{{ $student->full_name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <div class="form-group mt-1">
                                    <label class="input-label mb-4"> </label>
                                    <input type="submit" class="text-center btn btn-primary w-100" value="{{ trans('admin/main.show_results') }}">
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </section>

            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            @can('admin_sales_export')
                                <a href="/admin/financial/sales/export" class="btn btn-primary">{{ trans('admin/main.export_xls') }}</a>
                            @endcan
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped font-14">
                                    <tr>
                                        <th>#</th>
                                         <th class="text-left">{{ trans('admin/main.parent') }}</th>
                                         @if($authUser->isSchool())
                                          <th class="text-left">{{ trans('admin/main.kids') }}</th>
                                         @else
                                         <th class="text-left">{{ trans('admin/main.instructor') }}</th>
                                         @endif
                                        
                                        <th>{{ trans('admin/main.paid_amount') }}</th>
                                        <th>{{ trans('admin/main.discount') }}</th>
                                        <th>{{ trans('admin/main.tax') }}</th>
                                        <th class="text-left">{{ trans('admin/main.item') }}</th>
                                        <th>{{ trans('admin/main.sale_type') }}</th>
                                        <th>{{ trans('admin/main.date') }}</th>
                                        <th>{{ trans('admin/main.status') }}</th>
                                        <th width="120">{{ trans('admin/main.actions') }}</th>
                                    </tr>
                                    
                                    @foreach($sales as $sale)
                                        <tr>
                                            <td>{{ $sale->id }}</td>

                                            
                                            <td class="text-left">
                                                <div class="d-flex align-items-center">
                                                    <figure class="avatar mr-2">
                                                        <img src="{{ !empty($sale->buyer) ? $sale->buyer->getAvatar() : '' }}" alt="{{ !empty($sale->buyer) ? $sale->buyer->full_name : '' }}">
                                                    </figure>
                                                    <div class="media-body ml-1">
                                                        <div class="mt-0 mb-1 font-weight-bold">{{ !empty($sale->buyer) ? $sale->buyer->full_name : '' }}</div>

                                                        @if($sale->buyer->mobile)
                                                            <div class="text-primary text-small font-600-bold">{{$sale->buyer->mobile }}</div>
                                                        @endif

                                                        @if($sale->buyer->email)
                                                            <div class="text-primary text-small font-600-bold">{{ $sale->buyer->email }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </td>   

                                            @if($authUser->isSchool())
                                            <td class="text-left">
                                                <div class="d-flex align-items-center">
                                                        <figure class="avatar mr-2">
                                                            <img src="{{ !empty($sale->order) ? $sale->order->user->getAvatar() : '' }}" alt="{{ !empty($sale->order) ? $sale->order->user->full_name: '' }}">
                                                        </figure>
                                                        <div class="media-body ml-1">
                                                            <div class="mt-0 mb-1 font-weight-bold"> {{ !empty($sale->order) ? $sale->order->user->full_name: '' }}</div>
                                                            @if(!empty($sale->order->user->mobile))
                                                                @if($sale->order->user->mobile)
                                                                    <div class="text-primary text-small font-600-bold">{{$sale->order->user->mobile }}</div>
                                                                @endif
                                                            @endif
                                                            @if(!empty($sale->order->user->email))
                                                                @if($sale->order->user->email)
                                                                    <div class="text-primary text-small font-600-bold">{{ $sale->order->user->email }}</div>
                                                                @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                            </td>
                                            @else
                                            <td class="text-left">
                                                    {{ $sale->item_seller }}
                                                    <div class="text-primary text-small font-600-bold">ID : {{  $sale->seller_id }}</div>
                                            </td>
                                            @endif
                                                

                                            <td>
                                                @if($sale->payment_method == \App\Models\Sale::$subscribe)
                                                    <span class="">{{ handlePriceFormat($sale->total_amount) }}</span>
                                                @else
                                                    @if(!empty($sale->total_amount))
                                                        <span class="">{{ addCurrencyToPrice(handlePriceFormat($sale->total_amount)) }}</span>
                                                    @else
                                                        <span class="">{{ trans('public.free') }}</span>
                                                    @endif
                                                @endif
                                            </td>
                                            <td>
                                                <span class="">{{ addCurrencyToPrice(handlePriceFormat($sale->discount)) }}</span>
                                            </td>
                                            <td>
                                                <span class="">{{ addCurrencyToPrice(handlePriceFormat($sale->tax)) }}</span>
                                            </td>
                                            <td class="text-left">
                                                <div class="media-body">
                                                    <div>{{ $sale->item_title }}</div>
                                                    <div class="text-primary text-small font-600-bold">ID : {{ $sale->item_id }}</div>
                                                </div>
                                            </td>

                                            <td>
                                                <span class="font-weight-bold">
                                                    @if($sale->type == \App\Models\Sale::$registrationPackage)
                                                        {{ trans('update.registration_package') }}
                                                    @elseif($sale->type == \App\Models\Sale::$product)
                                                        {{ trans('update.product') }}
                                                    @elseif($sale->type == \App\Models\Sale::$bundle)
                                                        {{ trans('update.bundle') }}
                                                    @else
                                                        {{ trans('admin/main.'.$sale->type) }}
                                                    @endif
                                                </span>
                                            </td>

                                            <td>{{ dateTimeFormat($sale->created_at, 'Y/F/j ') }}</td>

                                            <td>
                                                @if(!empty($sale->refund_at))
                                                    <span class="text-warning">{{ trans('admin/main.refund') }}</span>
                                                @elseif(!$sale->access_to_purchased_item)
                                                    <span class="text-danger">{{ trans('admin/main.access_blocked') }}</span>
                                                @else
                                                    <span class="text-success">{{ trans('admin/main.successs') }}</span>
                                                @endif
                                            </td>
                                               
                                            {{--<td> 
                                                <div class="form-group mt-20">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <label class="cursor-pointer input-label" for="textLessonStatusSwitch{{ $sale->id }}_record"></label>
                                                        <div class="custom-control custom-switch">
                                                            <input type="checkbox" name="ajax[new][status]" class="custom-control-input" id="textLessonStatusSwitch{{ $sale->id }}_record" onclick="toggleStatus(this, {{ $sale->id }})">
                                                            <label class="custom-control-label" for="textLessonStatusSwitch{{ $sale->id }}_record"></label>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <span id="statusText{{ $sale->id }}" class="status-inactive"></span>
                                            </td> --}}
                                               
                                            <td>
                                  
                                                @can('admin_sales_invoice')
                                                    
                                                        <a href="/admin/financial/sales/{{ $sale->id }}/invoice" target="_blank" title="{{ trans('admin/main.invoice') }}"><i class="fa fa-print" aria-hidden="true"></i></a>
                                                  
                                                @endcan

                                                @can('admin_sales_refund')
                                                    @if(empty($sale->refund_at) and $sale->payment_method != \App\Models\Sale::$subscribe)
                                                        @include('admin.includes.delete_button',[
                                                                'url' => '/admin/financial/sales/'. $sale->id .'/refund',
                                                                'tooltip' => trans('admin/main.refund'),
                                                                'btnIcon' => 'fa-times-circle'
                                                            ])
                                                    @endif
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>
                        </div>

                        <div class="card-footer text-center">
                            {{ $sales->appends(request()->input())->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts_bottom')
<script>
        function toggleStatus(element, id) {
            var statusText = document.getElementById('statusText' + id);
            if (element.checked) {
                statusText.textContent = 'نشط';
                statusText.className = 'status-active';
            } else {
                statusText.textContent = 'غير النشط';
                statusText.className = 'status-inactive';
            }
        }
    </script>

 @endpush
 

