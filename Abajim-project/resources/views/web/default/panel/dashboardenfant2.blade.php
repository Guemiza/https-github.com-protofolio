@extends(getTemplate() .'.panel.layouts.panel_layoutEnfant')

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
    main {

        flex-direction: column;
        justify-content: center;
        align-items: center;

        max-width: min-content;
        margin: auto;



        background-color: white;


        .starDiv {
            display: flex;


            svg {
                position: relative;
                width: 1rem;
                height: 1rem;
                color: orange;
            }
        }

        .inputDiv {
            input[type="number"] {
                padding: 0.5rem;
                text-align: center;
                width: 1rem;
                margin-right: 0.5rem;
                border-radius: 0.2rem;
                box-shadow: aliceblue 0px 30px 60px -12px inset,
                    rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
                border: none;
            }

            #rateButton {
                padding: 0.5rem;
                border-radius: 0.2rem;
                box-shadow: aliceblue 0px 30px 60px -12px inset,
                    rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
                border: none;
            }
        }
    }


    .gradient-title {
        background: linear-gradient(90deg, #14bfca 0%, #97dd55 100%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        display: inline;

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

    .webinar-notify:hover {
        background-color: var(--secondary);
        color: #ffffff;
        transition: all 0.3s ease;
    }

    .webinar-notify {
        position: relative;
        bottom: 0;
        right: 0;
    }

    *,
    :before,
    :after {
        box-sizing: border-box;
    }

    a:active,
    a:hover {
        outline: none;
    }

    .webinar-icon {
        color: #171347;
    }

    .webinar-icon {
        color: var(--secondary);
    }


    /* These were inline style tags. Uses id+class to override almost everything */
    #style-Q84TJ.style-Q84TJ {
        width: 40px;
        height: 38px !important;
    }



    .text-center {
        text-align: center !important;
    }

    .p-t-5 {
        padding-top: 5px !important;
    }

    :selection {
        background: #39f;
        color: #fff;
        text-shadow: none;
    }

    .m-10 {
        margin: 4.5rem !important;
    }

    .p-10 {
        padding: 4.5rem !important;
    }

    .text-right {
        text-align: right !important;
    }

    .w-auto {
        width: auto !important;
    }

    .uk-alert {
        position: relative;
        margin-bottom: 20px;
        padding: 15px 29px 15px 15px;
        background: #f8f8f8;
        color: #666;
    }

    .m-10 {
        margin: 10px !important;
    }

    .m-b-20 {
        margin-bottom: 20px !important;
    }

    .p-10 {
        padding: 10px !important;
    }

    .p-t-10 {
        padding-top: 10px !important;
    }

    .bgm-white {
        background-color: #ffffff !important;
    }

    .bgb-orange {
        border-color: #43d477 !important;
    }

    .w-auto {
        width: auto !important;
    }

    .show {
        display: block !important;
    }

    .brd-8 {
        overflow: hidden;
        border-radius: 8px !important;
    }

    .alert {
        padding: 15px;
        margin-bottom: 18px;
        border: 1px solid transparent;
        border-radius: 2px;
    }

    .alert-dismissible {
        padding-right: 35px;
    }

    .show {
        display: block !important;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    .brd-8 {
        border-radius: 8px !important;
    }

    audio {
        vertical-align: middle;
    }

    .uk-icon {
        margin: 0;
        border: none;
        border-radius: 0;
        overflow: visible;
        font: inherit;
        color: inherit;
        text-transform: none;
        padding: 0;
        background-color: transparent;
        display: inline-block;
        fill: currentcolor;
        line-height: 0;
    }

    .uk-close {
        color: #999;
        transition: .1s ease-in-out;
        transition-property: color, opacity;
    }

    .uk-alert-close {
        position: absolute;
        top: 20px;
        right: 15px;
        color: inherit;
        opacity: .4;
    }

    .uk-close:hover {
        color: #666;
        outline: none;
    }

    .uk-alert-close:hover {
        color: inherit;
        opacity: .8;
    }

    h3 {
        margin: 0 0 15px;
        font-weight: 600;
        color: #6d6d6d;
        text-transform: capitalize;
    }

    h3 {
        font-size: 17px;
        line-height: 1.4;
    }

    h3 {
        margin: 0 0 15px 0;
        font-weight: 600;
        color: #6d6d6d;
        text-transform: none !important;
    }

    .m-2 {
        margin: 0.5rem !important;
    }

    .m-b-0 {
        margin-bottom: 0px !important;
    }

    .c-orange {
        color: #43d477 !important;
    }

    .fs-20 {
        font-size: 20px !important;
    }

    .uk-alert h3 {
        color: inherit;
    }

    .uk-alert-close:first-child+* {
        margin-top: 0;
    }

    p {
        margin: 0 0 10px;
    }

    .alert>p {
        margin-bottom: 0;
    }

    .alert>p+p {
        margin-top: 5px;
    }

    .m-t-0 {
        margin-top: 0px !important;
    }

    a {
        color: #929292;
        text-decoration: none;
        cursor: pointer;
    }

    .uk-alert> :last-child {
        margin-bottom: 0;
    }

    a:active,
    a:hover {
        outline: none;
    }

    a:hover {
        color: #3e416d;
        text-decoration: none;
    }

    [hidden] {
        display: none !important;
    }

    b {
        font-weight: bolder;
    }

    .uk-label {
        display: inline-block;
        padding: 0 10px;
        background: #1e87f0;
        line-height: 1.5;
        font-size: .875rem;
        color: #fff;
        vertical-align: middle;
        white-space: nowrap;
        border-radius: 2px;
        text-transform: uppercase;
    }

    .c-white {
        color: #ffffff !important;
    }




    /* Popup container */
    .popup {
        position: relative;
        display: inline-block;
        cursor: pointer;
    }

    /* Popup content */
    .popup-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 600px;
        min-height: 600px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px;
        z-index: 1;
    }

    /* Show the popup */
    .popup-content.show {
        display: block;
    }
</style>
@endpush

@section('content')

<div class="row align-items-start">
    <div class="col-9">
        <!--  <div class="d-flex align-items-start align-items-md-center justify-content-between flex-column flex-md-row">
                <h1 class="section-title">ترحيب</h1>
            </div> -->

        <div class="bg-white dashboard-banner-container position-relative px-15 px-ld-35 py-10 panel-shadow rounded-sm" style="    margin-top: 0px!important;">
            <h2 class="font-30 text-primary line-height-1">
                <span id="userName1">{{ trans('panel.hi') }} {{ $authUser->full_name }}</span>

            </h2>
        </div>
        <!-- parent user condition enfant scolaire -->
        @if($authUser->isOrganization())

        <!-- if teacher show  trie manul scolaire  -->
        @if(!empty($matiere1))
        <div class="row">
            <div class="col-lg-10">
                <h1>{{ trans('panel.myscolaiemanuel') }} : {{ $matiere1[0]->name }}</h1>
            </div>
            <div class="col-lg-2">

                <select name="sort" class="form-control">
                    <option disabled selected>{{ trans('public.sort_by') }}</option>
                    <option value="">{{ trans('public.all') }}</option>
                    <option value="6" @if (request()->get('sort', null) == 'top_rate') selected="selected"
                        @endif>
                        الأولى ابتدائي
                    </option>
                    <option value="7" @if (request()->get('sort', null) == 'top_rate') selected="selected"
                        @endif>
                        ا2 ابتدائي
                    </option>
                    <option value="8" @if (request()->get('sort', null) == 'top_rate') selected="selected"
                        @endif>
                        الثالثة ابتدائي
                    </option>
                    <option value="9" @if (request()->get('sort', null) == 'top_rate') selected="selected"
                        @endif>
                        الرابعة ابتدائي
                    </option>
                    <option value="9" @if (request()->get('sort', null) == 'top_rate') selected="selected"
                        @endif>
                        الخامسة ابتدائي
                    </option>
                    <option value="9" @if (request()->get('sort', null) == 'top_rate') selected="selected"
                        @endif>
                        6 ابتدائي
                    </option>
                </select>
            </div>
        </div>
        @endif

        <!-- manul scolaire -->
        <section style="height: 71px; margin-bottom: 158px!important;">
            <div class="bg-white dashboard-banner-container position-relative px-15 px-ld-35 py-10 panel-shadow rounded-sm" style="    margin-top: 0px!important;">


                <span class="font-16 text-secondary font-weight-bold">My TextBooks
                </span>



            </div>
            <br><br><br>
            <div class="wgh-slider" style="top: 417%!important;">
                <input class="wgh-slider-target" type="radio" id="slide-1" name="slider" checked="checked" />
                <input class="wgh-slider-target" type="radio" id="slide-2" name="slider" />
                <input class="wgh-slider-target" type="radio" id="slide-3" name="slider" />
                <input class="wgh-slider-target" type="radio" id="slide-4" name="slider" />
                <input class="wgh-slider-target" type="radio" id="slide-5" name="slider" />
                <input class="wgh-slider-target" type="radio" id="slide-6" name="slider" />
                <input class="wgh-slider-target" type="radio" id="slide-7" name="slider" />
                <input class="wgh-slider-target" type="radio" id="slide-8" name="slider" />
                <!-- <input class="wgh-slider-target" type="radio" id="slide-9" name="slider" />
                         <input class="wgh-slider-target" type="radio" id="slide-10" name="slider" />
                         <input class="wgh-slider-target" type="radio" id="slide-11" name="slider" />
                         <input class="wgh-slider-target" type="radio" id="slide-12" name="slider" />
                         <input class="wgh-slider-target" type="radio" id="slide-13" name="slider" />
                         <input class="wgh-slider-target" type="radio" id="slide-14" name="slider" />
                         <input class="wgh-slider-target" type="radio" id="slide-15" name="slider" />
                         <input class="wgh-slider-target" type="radio" id="slide-16" name="slider" />
                         <input class="wgh-slider-target" type="radio" id="slide-17" name="slider" />
                         <input class="wgh-slider-target" type="radio" id="slide-18" name="slider" />
                         <input class="wgh-slider-target" type="radio" id="slide-19" name="slider" />
                         <input class="wgh-slider-target" type="radio" id="slide-20" name="slider" />
                         <input class="wgh-slider-target" type="radio" id="slide-21" name="slider" />
                         <input class="wgh-slider-target" type="radio" id="slide-22" name="slider" />
                         <input class="wgh-slider-target" type="radio" id="slide-23" name="slider" />
                         <input class="wgh-slider-target" type="radio" id="slide-24" name="slider" /> -->

                <div class="wgh-slider__viewport">
                    <div class="wgh-slider__viewbox">
                        <div class="wgh-slider__container">

                            @if($authUser->isUser())
                            @if(!empty($matiere))
                            <?php
                            $lastIndex = 0;
                            ?>
                            @foreach($matiere as $matiere)
                            <?php
                            $varff = DB::table('manuels')->where('material_id', '=', $matiere->id)->pluck('id');
                            $lastIndex = $loop->index + 1;
                            //   echo( $varff);  
                            ?>

                            <div class="wgh-slider-itemwgh-slider-item">

                                <div class="wgh-slider-item__inner">

                                    <figure class="wgh-slider-item-figure"><img style="width: 400px;height: 400px;!important" class="wgh-slider-item-figure__image" src="/{{ $matiere->path }}" alt="Manuel Scolaire" />
                                        <figcaption class="wgh-slider-item-figure__caption">
                                            @if(!empty($varff))
                                            <a href="/panel/init/scolaire/{{ $varff[0] }}">{{ $matiere->name }}
                                            </a>
                                            @endif
                                            <span>+40 Video</span>
                                        </figcaption>
                                    </figure>

                                    <label class="wgh-slider-item__trigger" for="slide-{{ ++$loop->index }}" title="{{ $matiere->name }}"></label>
                                </div>
                            </div>
                            @endforeach

                            @if(!empty($options))
                            <div class="wgh-slider-item">

                                <div class="wgh-slider-item__inner">

                                    <figure class="wgh-slider-item-figure"><img style="width: 400px;height: 400px;!important" class="wgh-slider-item-figure__image" src="/{{ $options[0]->logo }}" alt="Manuel Scolaire" />
                                        <figcaption class="wgh-slider-item-figure__caption">

                                            <a href="/panel/option/scolaire/{{ $options[0]->id }}">{{ $options[0]->name }}
                                            </a>

                                            <span>+40 Video</span>
                                        </figcaption>
                                    </figure>
                                    <label class="wgh-slider-item__trigger" for="slide-{{ $lastIndex+1 }}" title="{{ $options[0]->name }}"></label>
                                </div>
                            </div>
                            @endif
                            @endif

                            @else
                            @if(!empty($matiere1))
                            @foreach($matiere1 as $matiere)
                            <?php
                            $varff = DB::table('manuels')->where('material_id', '=', $matiere->id)->pluck('id');
                            ?>
                            <div class="wgh-slider-item">
                                <div class="wgh-slider-item__inner">

                                    <figure class="wgh-slider-item-figure"><img style="width: 400px;height: 400px;!important" class="wgh-slider-item-figure__image" src="/{{ $matiere->path }}" alt="The 5th Exotic" />
                                        <figcaption class="wgh-slider-item-figure__caption">
                                            @if($matiere->section)
                                            <a href="/panel/scolaire/teacher/">{{ $matiere->section->level->name }}
                                            </a>
                                            @endif
                                            <span>+40 Video</span>

                                        </figcaption>
                                    </figure>
                                    <label class="wgh-slider-item__trigger" for="slide-{{ ++$loop->index }}" title="{{ $matiere->name }}"></label>
                                </div>
                            </div>
                            @endforeach
                            @elseif(!empty($option1))
                            <?php
                            $optionnew = DB::table('options')->where('name', '=', $option1[0]->name)->get();
                            $leveeeel = DB::table('options')->where('name', '=', $option1[0]->name)->pluck('niveau');
                            ?>

                            @foreach($optionsWithLevels as $option)
                            <?php
                            //$leveeeel = DB::table('options')->where('name', '=', $option->name)->pluck('niveau');
                            $leveeeelefd = DB::table('school_levels')->where('id', '=', $leveeeel)->get();
                            ?>
                            <div class="wgh-slider-item">

                                <div class="wgh-slider-item__inner">

                                    <figure class="wgh-slider-item-figure"><img style="width: 400px;height: 400px;!important" class="wgh-slider-item-figure__image" src="/{{ $option->logo }}" alt="The 5th Exotic" />
                                        <figcaption class="wgh-slider-item-figure__caption">
                                            @if($option->name)
                                            <a href="/panel/option/scolaire/{{ $option->id }}">{{ $option->name }}
                                                {{ $option->level->name }}
                                            </a>
                                            @endif
                                            <span>+40 Video</span>

                                        </figcaption>
                                    </figure>
                                    <label class="wgh-slider-item__trigger" for="slide-{{ ++$loop->index }}" title="{{ $option->name }}"></label>
                                </div>
                            </div>
                            @endforeach
                            @endif

                            @endif

                            @if($authUser->isOrganization())
                            <?php
                            $sectionEnfantid = DB::table('sectionsmat')->where('level_id', '=', 6)->pluck('id');

                            $matiereEnfant1 = DB::table('materials')->where('section_id', '=', $sectionEnfantid[0])->get();
                            ?>
                            @if(!empty($matiereEnfant))
                            @foreach($matiereEnfant as $matiere)
                            <?php
                            $varff = DB::table('manuels')->where('material_id', '=', $matiere->id)->pluck('id');

                            $varff = DB::table('manuels')->where('material_id', '=', $matiere->id)->pluck('id');
                            $ff = DB::table('manuels')->where('material_id', '=', $matiere->id)->pluck('logo');

                            $lastIndex = $loop->index + 1;
                            ?>
                            <div class="wgh-slider__container  ssddd" data-namul-logo="{{ $ff[0] }}">
                                {{-- <div class="wgh-slider-item">
                                    <div class="wgh-slider-item__inner">
                                        <figure class="wgh-slider-item-figure"><img style="width: 400px;height: 400px;!important" class="wgh-slider-item-figure__image" src="/{{ $matiere->path }}" alt="The 5th Exotic" />
                                <figcaption class="wgh-slider-item-figure__caption">
                                    <div class="row">
                                        <div class="col-sm-8">

                                            @if(!empty($varff))
                                            <a href="/panel/scolaire/{{ $varff[0] }}">{{ $matiere->name }}
                                            </a>
                                            <p>مستوى:
                                                {{ $matiere->section->level->name }}
                                            </p>
                                            @endif
                                        </div>
                                        <div class="col-sm-4">



                                            <a>
                                                <button type="button" data-toggle="modal" data-target="#exampleModalLong" target="_blank" class="webinar-notify d-flex align-items-center justify-content-center snipcss-If7SW style-Q84TJ" id="style-Q84TJ">
                                                    <img width="25" height="25" src="/open-book.png">
                                                </button> </a>
                                        </div>
                                    </div>
                                    <span>+40 Video</span>


                                </figcaption>
                                </figure>
                                <label class="wgh-slider-item__trigger" for="slide-{{ ++$loop->index }}" title="{{ $matiere->name }}"></label>
                            </div>
                        </div> --}}
                    </div>
                    @endforeach

                    @endif
                    @endif
                </div>
            </div>

        </section>


        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width: 829px;">
                <div class="modal-content">

                    <div class="modal-body">
                        <div style="width: 820px; padding:10px">
                            <object data="http://localhost:8004/Mathematique.pdf#toolbar=0&page=&zoom=97" type="application/pdf" width="100%" height="880px">
                                <p>Unable to display PDF file. <a href="">Download</a> instead.</p>
                            </object>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="d-none" id="iNotAvailableModal">
            <div class="offline-modal">
                <h3 class="section-title after-line">{{ trans('panel.offline_title') }}</h3>
                <p class="mt-20 font-16 text-gray">{{ trans('panel.offline_hint') }}</p>

                <div class="form-group mt-15">
                    <label>{{ trans('panel.offline_message') }}</label>
                    <textarea name="message" rows="4" class="form-control ">{{ $authUser->offline_message }}</textarea>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="mt-30 d-flex align-items-center justify-content-end">
                    <button type="button" class="js-save-offline-toggle btn btn-primary btn-sm">{{ trans('public.save') }}</button>
                    <button type="button" class="btn btn-danger ml-10 close-swl btn-sm">{{ trans('public.close') }}</button>
                </div>
            </div>
        </div>

        <div class="d-none" id="noticeboardMessageModal">
            <div class="text-center">
                <h3 class="modal-title font-20 font-weight-500 text-dark-blue"></h3>
                <span class="modal-time d-block font-12 text-gray mt-25"></span>
                <p class="modal-message font-weight-500 text-gray mt-4"></p>
            </div>
        </div>
        <div>


        </div>

        <!-- <section>-->
        <div class="wgh-slider__containe_pdf">

        </div>
        <!--</section> -->

    </div>
    <div class="col-3 panel-sidebar" style="top: 20px!important;">

        <div class="bg-white dashboard-banner-container position-relative px-15 px-ld-35 py-10 panel-shadow rounded-sm" style="    margin-top: 0px!important;">
            <h2 class="font-30 text-primary line-height-1">
                <h2> <span class="gradient-title">Actualités </span></h2>
                <span class="font-16 text-secondary font-weight-bold">{{ trans('panel.have_event',['count' => !empty($unReadNotifications) ? count($unReadNotifications) : 0]) }}</span>
            </h2>
        </div>



        <div class="scrollable-div" style="margin-top:10p;height: 370px!important;" id="scrollable-div">
            @foreach($videos as $video)

<div class="webinar-card webinar-list webinar-list-2 d-flex m-10" style="    max-height: 108px;">
<div class=" webinar-card-body w-100 d-flex flex-column" style="padding-top: 10px;
                   padding-left: 5px;
                   padding-bottom: 0px;
                   padding-right: 0px;
                   border-left-width: 5px!important;">

                    <div class="d-flex align-items-center justify-content-between">
                        <a onclick="playInMainPlayer('{{ asset($video->video) }}','{{ $video->titre }}','{{ $video->teachers->full_name }}','{{ $video->user_id }}','{{ $video->teachers->avatar }}')">
                            <span style="font-size: small;" class="mt-5 webinar-title font-weight-bold font-6 text-dark-blue" style="white-space: normal;"> {{ Str::limit($video->titre, 20) }} </span>
                        </a>
                    </div>
                    <!-- <div class="user-inline-avatar d-flex align-items-center">
                                <div class="avatar bg-gray">
                                    <img src="{{ $video->teachers->avatar }}" class="img-cover"  alt="">
                                </div>
                                <a href="" target="_blank" class="user-name ml-5 font-8">
                                    {{ $video->teachers->full_name }}</a>
                            </div> -->
                    {{--  <div class="stars-card d-flex align-items-center  $className ?? ' mt-15'  }}">
                        @php
                        $i = 5;
                        $rate=4;
                        @endphp
                        <main style="width: 74px;">
                            <div class="inputDiv">
                                <input width="20" height="20" value="5" value="4.3" type="number" max="5" hidden>

                            </div>
                            <div class="starsDiv"></div>
                        </main>

                    </div> --}}

                 <div class="mt-10 d-flex justify-content-between ">
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <img  width="20" height="20" src="/oeil.png" class="webinar-icon" />
                                <span style="font-size: small;" class="duration ml-5 font-8">{{ $video->vues }} </span>
                            </div>

                            <div class="vertical-line h-25 mx-15"></div>

                            <div class="d-flex align-items-center">
                                <img  width="15" height="15" src="/heart1.png" class="webinar-icon" />
                                <span style="font-size: small;"
                                    class="date-published ml-5">{{ $video->likes }} </span>
                             </div>
                             </div>

                            <div class="webinar-price-box d-flex flex-column justify-content-center align-items-center">

                             <span class="real"></span>


                           </div>
                    </div> 
            </div>
            <div class="image-box" style="width: 160px;min-width: 139px;margin-top: 12px;min-height:95px;height:100px!important" onclick="playInMainPlayer('{{ asset($video->video) }}','{{ $video->titre }}','{{ $video->teachers->full_name }}','{{ $video->user_id }}','{{ $video->teachers->avatar }}')">

                    <video width="137" height="150" style="margin-top:-38px" onclick="playInMainPlayer('{{ asset($video->video) }}','{{ $video->titre }}','{{ $video->teachers->full_name }}','{{ $video->user_id }}','{{ $video->teachers->avatar }}'); storeTeacherId('{{ $video->teachers->id }}');">
                        <source src="{{ $video->video }}" type="video/mp4">
                        <source src="{{ $video->video }}" type="video/webm">
                    </video>
                    <div class="progress-and-bell d-flex align-items-center" style="    margin-bottom: -7px ;padding: 0px 6px!important">


                        <a href="" target="_blank" class="webinar-notify d-flex align-items-center justify-content-center" style="width: 30px;height: 28px!important">
                            <img src="/bell.png" width="18" height="18" style="margin-right: 2px;" />
                        </a>


                        <div class="progress ml-10">
                            <span class="progress-bar" style="width: 10%"></span>
                        </div>

                    </div>
            </div>
         
</div>
@endforeach
{{-- @foreach ($videos as $video)
                
                <div class="row">
                    <div class="col-sm-5">
                        <a class="X5OiLe vGvPJe" href="#VIDEOOPENID" href="{{ route('show', ['id' => $video->teachers->id]) }}">
<div class="WM9LLd" style="margin-top:10px">

    <div>
        <video width="220" height="155" onclick="playInMainPlayer('{{ asset($video->video) }}','{{ $video->titre }}','{{ $video->teachers->full_name }}','{{ $video->user_id }}','{{ $video->teachers->avatar }}')">
            <source src="{{ $video->video }}" type="video/mp4">
            <source src="{{ $video->video }}" type="video/webm">
        </video>
    </div>



</div>
</a>
</div>
<div class="col-sm-6">
    <a class="X5OiLe" href="">
        <div class="WZIVy">
            <div class="uOId3b">
                <div class="fc9yUc tNxQIb ynAwRc OSrXXb">
                    <span class="cHaqb">
                        {{ $video->titre }}
                    </span>
                </div>
            </div>
            <br>
            <div class="FzCfme">

                <a class="yt-simple-endpoint style-scope ytd-video-owner-renderer" href="">
                    <yt-img-shadow id="avatar" width="40" class="style-scope ytd-video-owner-renderer no-transition style-oRzbr">
                        <img id="img" class="style-scope yt-img-shadow" width="40" src="/{{ $video->teachers->avatar }}">

                    </yt-img-shadow>
                </a>

                <h4 class="yt-simple-endpoint style-scope yt-formatted-string" href="" dir="auto">
                    {{ $video->teachers->full_name }}
                </h4>

                <div>
                    <div class="V8fWH">
                        10 minutes et 24&nbsp;secondes
                    </div>
                </div>
                <br>
                <div class="hMJ0yc">
                    <span>
                        {{ $video->created_at }}
                    </span>
                </div>
            </div>
        </div>
    </a>
</div>

</div>
@endforeach
--}}




</div>
</div>

</div>
<span class="font-16 text-secondary font-weight-bold">Live Session</span>

<div class="row align-items-start">


    <div class="row align-items-start newgoo" style="margin-left: 10px;">
        <div class="col-9">
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
        <div class="col-3">
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
        </div>
    </div>

</div>


@endif


@endsection

@push('scripts_bottom')
<!-- <script src="/assets/default/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/default/vendors/chartjs/chart.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>




<!-- <script src="/assets/default/js/panel/dashboard.min.js"></script> -->
<script>
    // Function to toggle the popup
    function togglePopup() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
    }

    function createStars(container, ID) {
        let starDiv = document.createElement("div");

        for (let i = 0; i < 5; i++) {
            const gradientId = `gradient${ID}${i + 1}`;
            const starClass = `star${ID}`;

            const starSvg = document.createElementNS(
                "http://www.w3.org/2000/svg",
                "svg"
            );
            starSvg.setAttribute("viewBox", "0 0 24 24");
            starSvg.setAttribute("fill", `url(#${gradientId})`);

            const gradient = document.createElementNS(
                "http://www.w3.org/2000/svg",
                "linearGradient"
            );
            gradient.setAttribute("id", gradientId);
            gradient.innerHTML =
                `<stop offset="0%" stop-color="currentColor" /> <stop offset="0%" stop-color="gray"/>`;

            const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
            path.setAttribute(
                "d",
                "M12 2L15.09 8.34L22 9.27L17 14.24L18.18 21L12 17.77L5.82 21L7 14.24L2 9.27L8.91 8.34L12 2Z"
            );

            starSvg.appendChild(gradient);
            starSvg.appendChild(path);
            starSvg.classList.add(starClass);
            starDiv.classList.add("starDiv");
            starDiv.appendChild(starSvg);
        }
        container.appendChild(starDiv);
    }

    function fillStars(rating, container, ID) {
        const stars = container.querySelectorAll(`.star${ID}`);
        stars.forEach((star, index) => {
            if (index + 1 <= rating) {
                star.style.fill = "currentColor";
            } else if (index < rating) {
                const percentage = (rating - Math.floor(rating)) * 100;
                star
                    .querySelector(`linearGradient stop:nth-child(1)`)
                    .setAttribute("offset", `${percentage}%`);
            } else {
                star.style.fill = "gray";
            }
        });
    }

    const starsContainerId =
        "starsTest"; // Id for stars container should get from individual elements eg. key in react
    const starsContainer = document.querySelector(".starsDiv"); // main star container
    const rateBtn = document.querySelector("#rateButton");
    const ratingInp = document.querySelector("#ratingInput");

    createStars(starsContainer, starsContainerId);
    fillStars(ratingInp.value, starsContainer, starsContainerId);

    rateBtn.addEventListener("click", () => {
        if (ratingInp.value > 5 || ratingInp.value < 0.1) {
            alert("Please enter a number between 0.1 and 5");
            return;
        }

        starsContainer.innerHTML = "";
        createStars(starsContainer, starsContainerId);
        fillStars(ratingInp.value, starsContainer, starsContainerId);
    });
</script>

<!-- <script>
        $('.responsive').slick({
            dots: true,
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                
            ]
        });

    </script> -->


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all elements with the child-name class
        var childNames = document.querySelectorAll('.child-name');
        var slidercontainers = document.querySelectorAll('.item');
        var slideritem = document.querySelectorAll('.wgh-slider-item');
        var ssddd = document.querySelectorAll('.wgh-slider__container');

        // Add click event to each child name
        childNames.forEach(function(childName) {
            childName.addEventListener('click', function() {
                //////////////////////live saissan//////////////////////////
                var containermeet = document.querySelector('.meetingc');
                // console.log('d:',containermeet ); // Log or use the data as needed
                // containermeet.innerHTML = ''; // Clear the container
                // var div1 = document.createElement('div');
                // $.ajax({
                //     type: 'GET', // Method type GET/POST
                //     url: '/panel/getmeetingforenfant', // The URL to make the request to
                //     data: {
                //         'level_id': level_id
                //     }, // Data to send in the request, the level_id
                //     headers: {
                //         'X-CSRF-TOKEN': csrfToken
                //     },
                //     success: function(data, textStatus, jqXHR) {
                //         // Check if the response is what you expect (e.g., JSON)
                //         if (jqXHR.getResponseHeader('Content-Type').indexOf(
                //                 'application/json') > -1) {
                //             var uniqueIdCounter = 0;

                //             data.forEach(function(material, key) {



                //                 div.className = 'wgh-slider-item';
                //                 div.innerHTML = `
                //                  `;




                //             });
                //         } else {
                //             // Handle unexpected content type
                //             console.error('Unexpected content type:', jqXHR
                //                 .getResponseHeader('Content-Type'));
                //         }

                //         // });
                //     },

                //     error: function(xhr, status, error) {
                //         // Handle errors
                //         if (xhr.status == 404) {
                //             console.error('Materials not found: 404');
                //         } else if (xhr.status == 500) {
                //             console.error('Server error: 500');
                //         } else {
                //             console.error('AJAX error:', status, error);
                //         }
                //     },

                //     beforeSend: function(xhr) {
                //         // Include any headers or set up before sending the request
                //         // For example, if you need to send a token or set the content type
                //         xhr.setRequestHeader('X-Requested-With',
                //             'XMLHttpRequest');
                //         // If you have a CSRF token, set it here
                //         // xhr.setRequestHeader('X-CSRF-Token', 'your_csrf_token_here');
                //     }
                // });

                // containermeet.appendChild(div1);



                //////////////////////manul scolaire //////////////////////////
                var container = document.querySelector('.wgh-slider__container');
                container.innerHTML = '';

                // Get the full name from the data attribute
                var fullName = childName.getAttribute('data-full-name');
                var level_id = childName.getAttribute('data-level-id');
                var path = childName.getAttribute('data-level-path');
                var ff = document.getElementById('mamama');
                var csrfToken = document.head.querySelector('meta[name="csrf-token"]')
                    .content;
                $.ajax({
                    type: 'GET', // Method type GET/POST
                    url: '/panel/getmaterialsforlevel', // The URL to make the request to
                    data: {
                        'level_id': level_id
                    }, // Data to send in the request, the level_id
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(data, textStatus, jqXHR) {

                        // Check if the response is what you expect (e.g., JSON)
                        if (jqXHR.getResponseHeader('Content-Type').indexOf('application/json') > -1) {
                            var uniqueIdCounter = 0;
                            // Process your data here
                            var container = document.querySelector('.wgh-slider__container');
                            // var container2 = document.querySelector('.newgoo'); // live session

                            container.innerHTML = ''; // Clear the container
                            // container2.innerHTML = '';

                            data.materials.forEach(function(material, key) {
                                var div = document.createElement('div');

                                div.className = 'wgh-slider-item';
                                div.innerHTML = `
                                                    <div class="wgh-slider-item__inner">
                                                        <figure class="wgh-slider-item-figure">
                                                            <img style="width: 400px; height: 400px !important" class="wgh-slider-item-figure__image" src="/${material.path}" alt="${material.name}" />
                                                            <figcaption class="wgh-slider-item-figure__caption">
                                                                <div class="row">
                                                                   <div class="col-sm-8">
                                                                      <a href="/panel/scolaire/219"> ${material.name} </a>
                                                                          <p>مستوى: ${material.level ? material.level.name : 'N/A'}</p>
                                                                    </div>
                       
                                                                    <div class="col-sm-4">
                                                                      <a>
                                                                        <button type="button" data-toggle="modal"  data-target="#exampleModalLong" target="_blank" class="webinar-notify d-flex align-items-center justify-content-center snipcss-If7SW style-Q84TJ" id="style-Q84TJ">
                                                                        <img width="25" height="25"src="/open-book.png"> </button>
                                                                      </a>
                                                                    </div>
                                                                </div>
                                                            </figcaption>
                                                        </figure>

                                                         <label class="wgh-slider-item__trigger" for="slide-${key+1}" title=" ${material.name}"></label>                          
                                                    </div>
                                `;
                                container.appendChild(div);
                            });
                            var container3 = document.querySelector('.newgoo'); // live session
                            //  container3.innerHTML = '';
                            data.instructors.forEach(function(instructor) {
                                instructor.meeting.meetingTimes.forEach(function(meetingTime) {
                                    // Assume you have matiereId and matiereName equivalent in your response
                                    var matiereName = "Default Matiere"; // Placeholder, replace with actual logic to determine name
                                    var div3 = document.createElement('div');
                                    // Dynamic HTML construction here
                                    div3.innerHTML = `
                               <div class="item">
                                 <div class="shadow-effect">
                                      <div class="webinar-card" style="width: 200px;">
                                 <figure>
                                 <div class="image-box" style="height: 177px!important;">
                                    <span class="badge badge-primary">new</span>
                                    <a href="">
                                        <img src="/path-to-image-based-on-matiere.jpg" class="img-cover" alt="${instructor.full_name}">
                                    </a>
                                    <div class="progress">
                                        <span class="progress-bar" style="width: 40%"></span>
                                    </div>
                                    <!-- Additional HTML -->
                                 </div>
                                </figure>
                              </div>
                              </div>
                             </div>`;

                                    container3.appendChild(div3);
                                });
                            });


                        } else {
                            // Handle unexpected content type
                            console.error('Unexpected content type:', jqXHR.getResponseHeader('Content-Type'));
                        }
                    },

                    error: function(xhr, status, error) {
                        // Handle errors
                        if (xhr.status == 404) {
                            console.error('Materials not found: 404');
                        } else if (xhr.status == 500) {
                            console.error('Server error: 500');
                        } else {
                            console.error('AJAX error:', status, error);
                        }
                    },

                    beforeSend: function(xhr) {
                        // Include any headers or set up before sending the request
                        // For example, if you need to send a token or set the content type
                        xhr.setRequestHeader('X-Requested-With',
                            'XMLHttpRequest');
                        // If you have a CSRF token, set it here
                        // xhr.setRequestHeader('X-CSRF-Token', 'your_csrf_token_here');
                    }
                });


                // Update the greeting text
                document.getElementById('userName1').textContent =
                    "{{ trans('panel.hi') }} " + fullName;
            });
        });
        // ssddd.forEach(function(childName){
        //     ssddd.addEventListener('click', function() {
        //         var dzs = ssddd.getAttribute('data-namul-logo');
        //         alert(dzs);
        //     })

        // });
    });
</script>
<script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>
<script src="/assets/default/vendors/owl-carousel2/owl.carousel.min.js"></script>
<script src="/assets/default/vendors/parallax/parallax.min.js"></script>
<script src="/assets/default/js/parts/home.min.js"></script>
<script src="{{ asset('/sw.js') }}"></script>

@endpush