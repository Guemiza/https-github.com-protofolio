@extends(getTemplate() . '.panel.layouts.panel_layoutEnfant')

@push('styles_top')
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
            justify-content: flex-end !important;
            */
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
@endpush

@section('content')
    <section>
        <div class="row align-items-start">
            <div class="col-12">
                @if ($authUser->isOrganization())
                    <h1>Interface Parent</h1>
                @endif
                @if ($authUser->isEnfant())

                    <!-- manul scolaire -->
                    <section style="height: 71px; margin-bottom: 158px!important;">
                        <div class="bg-white dashboard-banner-container position-relative px-15 px-ld-35 py-10 panel-shadow rounded-sm"
                            style="    margin-top: 0px!important;">
                            <span class="font-16 text-secondary font-weight-bold">كتبي المدرسية
                            </span>
                        </div>
                        <br><br><br> <br><br> <br><br>
                        <div class="wgh-slider">
                            <input class="wgh-slider-target" type="radio" id="slide-1" name="slider"
                                checked="checked" />
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
                                        @if (!empty($matiere))
                                            <?php $lastIndex = 0; ?>
                                            @foreach ($matiere as $matiere)
                                                <?php $varff = DB::table('manuels')
                                                    ->where('material_id', '=', $matiere->id)
                                                    ->pluck('id');
                                                $lastIndex = $loop->index + 1;
                                                //   echo( $varff);
                                                ?>
                                                <div class="wgh-slider-item">
                                                    <div class="wgh-slider-item__inner">
                                                        <figure class="wgh-slider-item-figure"><img
                                                                style="width: 400px;height: 400px;!important"
                                                                class="wgh-slider-item-figure__image" src=""
                                                                alt="The 5th Exotic" />
                                                            <img style="width: 400px;height: 400px;!important"
                                                                class="wgh-slider-item-figure__image"
                                                                src="/{{ $matiere->path }}" alt="Manuel Scolaire" />
                                                            <figcaption class="wgh-slider-item-figure__caption">
                                                                <div class="row">
                                                                    <div class="col-sm-8">
                                                                        @if (!empty($varff[0]))
                                                                            <a href="/panel/scolaire/{{ $varff[0] }}">{{ $matiere->name }}
                                                                            </a>
                                                                            <p>مستوى:
                                                                            </p>
                                                                        @endif
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <a>
                                                                            <button type="button" data-toggle="modal"
                                                                                data-target="#exampleModalLong"
                                                                                target="_blank"
                                                                                class="webinar-notify d-flex align-items-center justify-content-center snipcss-If7SW style-Q84TJ"
                                                                                id="style-Q84TJ">
                                                                                <img width="25" height="25"
                                                                                    src="/open-book.png">
                                                                            </button> </a>
                                                                    </div>
                                                                </div>
                                                                <span>+40 Video</span>
                                                            </figcaption>
                                                        </figure>
                                                        <label class="wgh-slider-item__trigger"
                                                            for="slide-{{ ++$loop->index }}"
                                                            title="{{ $matiere->name }}"></label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{--
                                    @if ($authUser->isEnfant())
                                                            
                                    @if (!empty($matiere))
                                    <?php
                                    $lastIndex = 0;
                                    ?>
                                    @foreach ($matiere as $matiere)
                                    <?php
                                    $varff = DB::table('manuels')
                                        ->where('material_id', '=', $matiere->id)
                                        ->pluck('id');
                                    $lastIndex = $loop->index + 1;
                                    //   echo( $varff);
                                    ?>

                                    <div class="wgh-slider-itemwgh-slider-item">

                                        <div class="wgh-slider-item__inner">

                                            <figure class="wgh-slider-item-figure">
                                    <figcaption class="wgh-slider-item-figure__caption">

                                        <a href="/panel/init/scolaire/">{{ $matiere->name }}
                                        </a>

                                        <span>+40 Video</span>
                                    </figcaption>
                                    </figure>

                                    <label class="wgh-slider-item__trigger" for="slide-{{ ++$loop->index }}"
                                        title="{{ $matiere->name }}"></label>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                    @endif
                                    --}}

                        </div>
                    </section>


                @endif
            </div>
        </div>
    </section>
    <section class="dashboard" style="margin-top:59px">
        <div class="row align-items-start">
            <div class="row align-items-start newgoo" style="margin-left: 10px;">
                <div class="col-12">
                    <section class=" container" style="padding-left:0px;padding-left:0px;padding-bottom:0px!important;">


                        <div class="position-relative ltr">
                            <div class="owl-carousel customers-testimonials instructors-swiper-container meetingc">

                                @foreach($instructors as $instructor)
                                @foreach($instructor->meeting->meetingTimes as $meetingTimes)
                                <?php

                                $matiereid = DB::table('user_matiere')->where('teacher_id', '=', $instructor->id)->pluck('matiere_id');
                                $matierename = DB::table('materials')->where('id', '=', $matiereid)->pluck('name');

                                $lastIndex = $loop->index + 1;
                                //   echo( $varff);  
                                ?>
                                <div class="item">
                                    <div class="shadow-effect">
                                        <div class="webinar-card" style="width: 200px;">
                                            <figure>
                                                <div class="image-box" style="    height: 177px!important;">

                                                    <span class="badge badge-primary">new</span>

                                                    @if($matierename[0]=='رياضيات')
                                                    <a href="">
                                                        <img src="/dd.jpg" class="img-cover" alt="{{ $instructor->full_name }}">
                                                    </a>
                                                    @elseif($matierename[0]=='الإيقاظ العلمي')
                                                    <a href="">

                                                        <img src="/dd1.jpg" class="img-cover" alt="{{ $instructor->full_name }}">
                                                    </a>
                                                    @elseif($matierename[0]=='أنجليزي ')
                                                    <a href="">

                                                        <img src="/677.jpg" class="img-cover" alt="{{ $instructor->full_name }}">
                                                    </a>
                                                    @elseif($matierename[0]=='الجغرافيا')
                                                    <a href="">

                                                        <img src="/678.jpg" class="img-cover" alt="{{ $instructor->full_name }}">
                                                    </a>
                                                    @elseif($matierename[0]==' التربية التكنولجية')
                                                    <a href="">

                                                        <img src="/6789.jpg" class="img-cover" alt="{{ $instructor->full_name }}">
                                                    </a>
                                                    @endif



                                                    <div class="progress">
                                                        <span class="progress-bar" style="width: 40%"></span>
                                                    </div>

                                                    <a href="" target="_blank" class="webinar-notify d-flex align-items-center justify-content-center">
                                                        <img src="/bell.png" style="width:15px;height:15px" class="webinar-icon" />

                                                    </a>

                                                </div>

                                                <figcaption class="webinar-card-body">
                                                    <div class="user-inline-avatar d-flex align-items-center">
                                                        <div class="avatar bg-gray200">
                                                            <img src="{{ $instructor->getAvatar(108) }}" class="img-cover" alt="{{ $instructor->full_name }}">
                                                        </div>
                                                        <a href="" target="_blank" class="user-name ml-5 font-12">{{ $instructor->full_name }}</a>
                                                    </div>
                                                    <!-- 
                                                            <a href="">

                                                                <h3 class="mt-15 webinar-title font-weight-bold font-12 text-dark-blue">
                                                                رياضيات </h3>
                                                                <a href="{{ $instructor->getProfileUrl() }}?tab=appointments" class="btn btn-primary btn-sm rounded-pill mt-15">{{ trans('home.reserve_a_live_class') }}</a>

                                                            </a> -->

                                                    @if(!empty($webinar->category))
                                                    <span class="d-block font-12 mt-10">{{ trans('public.in') }}
                                                        <a href="" target="_blank" class="text-decoration-underline">Matématique</a></span>
                                                    @endif
                                                    <div class="webinar-price-box">
                                                        <h3>
                                                            المادة : {{$matierename[0]}} </h3>
                                                        <span class="real">
                                                            @if($instructor->meeting->amount)
                                                            {{ $instructor->meeting->amount }} DT
                                                            @else
                                                            Free
                                                            @endif
                                                        </span>


                                                    </div>
                                                    <a href="{{ $instructor->getProfileUrl() }}?tab=appointments" class="btn btn-primary btn-sm rounded-pill mt-5">{{ trans('home.reserve_a_live_class') }}</a>

                                                    </a>
                                                    <div class="d-flex justify-content-between mt-20">
                                                        <div class="d-flex align-items-center">
                                                            <img src="/clock.png" style="width:15px;height:15px" class="webinar-icon" />

                                                            <span class="duration font-12 ml-5"> {{ $meetingTimes->time}}
                                                            </span>
                                                        </div>

                                                        <div class="vertical-line mx-15"></div>

                                                        <div class="d-flex align-items-center">
                                                            <img src="/calendar.png" style="width:15px;height:15px" class="webinar-icon" />
                                                            <span class="date-published font-12 ml-5"> {{ date('dFY') }}</span>
                                                        </div>
                                                    </div>


                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>

                                </div>
                                @endforeach
                                @endforeach
                            </div>
                        </div>
                    </section>


                </div>
                {{-- <div class="col-3">
                    <section>
                        <div class="d-flex align-items-start align-items-md-center justify-content-between flex-column flex-md-row">
                            <h1 class="section-title">My reservations</h1>
                        </div>

                        @foreach($reserveMeetings as $ReserveMeeting)
                        <div class="p-15 mt-20 p-lg-20 not-verified-alert font-weight-500 text-dark-blue rounded-sm panel-shadow" style=" height: 100%;width: 90%;">


                            <tr>
                                <td class="text-left">
                                    <div class="user-inline-avatar d-flex align-items-center">
                                        <div class="avatar bg-gray200">
                                            <img src="{{ $ReserveMeeting->meeting->creator->getAvatar() }}" class="img-cover" alt="">
                                        </div>
                                        <div class=" ml-5">
                                            <span class="d-block font-weight-500">{{ $ReserveMeeting->meeting->creator->full_name }}</span>
                                            <span class="mt-5 font-12 text-gray d-block">{{ $ReserveMeeting->meeting->creator->email }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <span class="font-weight-500">{{ trans('update.'.$ReserveMeeting->meeting_type) }} :</span>
                                </td>

                                <td class="align-middle">
                                    <span>{{ dateTimeFormat($ReserveMeeting->start_at, 'j M Y') }}</span>
                                </td>
                                <td class="align-middle">
                                    <div class="d-inline-flex align-items-center rounded bg-gray200 py-5 px-15 font-10 font-weight-200">
                                        <span class="">{{ dateTimeFormat($ReserveMeeting->start_at, 'H:i') }}</span>
                                        <span class="mx-1">-</span>
                                        <span class="">{{ dateTimeFormat($ReserveMeeting->end_at, 'H:i') }}</span>
                                    </div>
                                    @switch($ReserveMeeting->status)
                                    @case(\App\Models\ReserveMeeting::$pending)
                                    <span class="text-warning font-weight-500">{{ trans('public.pending') }}</span>
                                    @break
                                    @case(\App\Models\ReserveMeeting::$open)
                                    <span class="text-gray font-weight-500">{{ trans('public.open') }}</span>
                                    @break
                                    @case(\App\Models\ReserveMeeting::$finished)
                                    <span class="font-weight-500 text-primary">{{ trans('public.finished') }}</span>
                                    @break
                                    @case(\App\Models\ReserveMeeting::$canceled)
                                    <span class="text-danger font-weight-500">{{ trans('public.canceled') }}</span>
                                    @break
                                    @endswitch
                                </td>

                                <td class="align-middle">

                                </td>


                                <td class="align-middle text-right">
                                    @if($ReserveMeeting->status != \App\Models\ReserveMeeting::$finished)

                                    <input type="hidden" class="js-meeting-password-{{ $ReserveMeeting->id }}" value="{{ $ReserveMeeting->password }}">
                                    <input type="hidden" class="js-meeting-link-{{ $ReserveMeeting->id }}" value="{{ $ReserveMeeting->link }}">


                                    <div class="btn-group dropdown table-actions">
                                        <button type="button" class="btn-transparent dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i data-feather="more-vertical" height="20"></i>
                                        </button>
                                        <div class="dropdown-menu menu-lg">
                                            @if($ReserveMeeting->link and $ReserveMeeting->status == \App\Models\ReserveMeeting::$open)
                                            <button type="button" data-reserve-id="{{ $ReserveMeeting->id }}" class="js-join-reserve btn-transparent webinar-actions d-block mt-10">{{ trans('footer.join') }}</button>
                                            @endif

                                            <a href="{{ $ReserveMeeting->addToCalendarLink() }}" target="_blank" class="webinar-actions d-block mt-10 font-weight-normal">{{ trans('public.add_to_calendar') }}</a>

                                            <button type="button" data-user-id="{{ $ReserveMeeting->meeting->creator_id }}" data-item-id="{{ $ReserveMeeting->id }}" data-user-type="instructor" class="contact-info btn-transparent webinar-actions d-block mt-10">{{ trans('panel.contact_instructor') }}</button>

                                            <button type="button" data-id="{{ $ReserveMeeting->id }}" class="webinar-actions js-finish-meeting-reserve d-block btn-transparent mt-10 font-weight-normal">{{ trans('panel.finish_meeting') }}</button>
                                        </div>
                                    </div>
                                    @endif
                                </td>
                            </tr>


                        </div>
                        @endforeach


                    </section>
                </div> --}}
            </div>
        </div>
    </section>
@endsection

@push('scripts_bottom')
    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="/assets/default/vendors/owl-carousel2/owl.carousel.min.js"></script>
    <script src="/assets/default/vendors/parallax/parallax.min.js"></script>
    <script src="/assets/default/js/parts/home.min.js"></script>
    <script src="{{ asset('/sw.js') }}"></script>
@endpush
