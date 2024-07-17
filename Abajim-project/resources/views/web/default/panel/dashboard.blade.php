@extends(getTemplate() .'.panel.layouts.panel_layout')

@push('styles_top')
    <link rel="stylesheet" href="/assets/default/vendors/chartjs/chart.min.css" />
    <link rel="stylesheet" href="/assets/default/vendors/apexcharts/apexcharts.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="/assets/default/css/style.css">
    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" type="text/css" href="/assets/default/css/demo.css" />
    <style>
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
            border-color: #1d3b65 !important;
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

        <blade media|%20(min-width%3A%20960px)%7B%20>h3 {
            font-size: 19px;
            line-height: 1.4;
        }
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
            color: #1d3b65 !important;
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
        <section class="">
            <div class="d-flex align-items-start align-items-md-center justify-content-between flex-column flex-md-row">
                <h1 class="section-title">ترحيب</h1>
            </div>
            <div class="bg-white dashboard-banner-container position-relative px-15 px-ld-35 py-10 panel-shadow rounded-sm"
                style="    margin-top: 0px!important;">
                <h2 class="font-30 text-primary line-height-1">
                    <span class="d-block" id="userName">{{ trans('panel.hi') }}
                        {{ $authUser->full_name }}</span>
                    <span
                        class="font-16 text-secondary font-weight-bold">{{ trans('panel.have_event',['count' => !empty($unReadNotifications) ? count($unReadNotifications) : 0]) }}</span>
                </h2>
            </div>
            <!-- parent user condition enfant scolaire -->
            @if($authUser->isOrganization())
                <div class="container" style="margin-top:15px">
                    <div class="row">
                        <div class="col-6 col-sm-8">
                            <div class="row">
                                @foreach($enfants as $enf)
                                    <div class="col col-lg mt-20 ml-40">
                                        <div class="footer-icon border-white " style="height: 101px; width: 111px;">
                                            <img class="rounded-circle" src="{{ $enf->path }}" alt="Example Image"
                                                width="80%" height="80%">
                                            {{-- Add a class and a data attribute --}}
                                            <p class="font-weight-bold ml-10 child-name"
                                                data-level-id="{{ $enf->level->id }}"
                                                data-full-name="{{ $enf->Nom }} {{ $enf->prenom }}">
                                                {{ $enf->Nom }} {{ $enf->prenom }}
                                            </p>
                                            <input value="{{ $enf->level->id }}" hidden />

                                            <p class="footer-text ml-15"> {{ $enf->level->name }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-6 col-sm-4">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal" style="    height: 101px; width: 111px;margin-left: 103px;">
                                +
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="margin-top: 90px;">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Enfant</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <img src="17c29bb894f41aad54d8ddb08b40e753.jpg" alt="Example Image"
                                                width="50%" height="50%" style="margin-left: 120px;">
                                            <form method="post" action="/panel/enfant/post">
                                                {{ csrf_field() }}
                                                <label for="email">Nom enfant:</label><br>
                                                <input type="text" name="nom" class="form-control"
                                                    placeholder="Nom enfant" />
                                                <br>
                                                <label for="email">Prenom enfant:</label><br>
                                                <input type="text" name="prenom" class="form-control"
                                                    placeholder="Prenom enfant" />
                                                <br>



                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text text-white font-16">Sexe</span>
                                                    </div>



                                                    <select name="sexe" id="cars"
                                                        class="form-control {{ !empty($post) ? 'js-edit-content-locale' : '' }}">
                                                        <option value="Garçon">Garçon</option>
                                                        <option value="Fille">Fille</option>
                                                    </select>


                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label class="input-label">Level :</label>
                                                    <?php
                                        $leveeeel = DB::table('school_levels')->where('id', '>', 5)->get();
                                        ?>

                                                    <select name="level_id"
                                                        class="form-control {{ !empty($post) ? 'js-edit-content-locale' : '' }}">
                                                        @foreach($leveeeel as $lang )
                                                            <option value="{{ $lang->id }}">{{ $lang->name }}
                                                            </option>
                                                        @endforeach


                                                    </select>
                                                    @error('locale')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Ajouter
                                                        Enfant</button>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                @endif
        </section>
        <!-- if teacher show  trie manul scolaire  -->
        @if(!empty($matiere1))
            <div class="row">
                <div class="col-lg-10">
                   {{-- <h1>{{ trans('panel.myscolaiemanuel') }} : {{ $matiere1[0]->name }}</h1>--}}
                </div>
                <div class="col-lg-2">
            
         
                @if(!empty($userLevelIds))
                    <select name="sort" class="form-control">
                        <option disabled selected>{{ trans('public.sort_by') }}</option>
                        <option value="">{{ trans('public.all') }}</option>
                        @foreach ($userLevelIds as $level)
                        <?php
                     $levelname = DB::table('school_levels')->where('id', '=', $level)->pluck('name');  
                     $levelid = DB::table('school_levels')->where('id', '=', $level)->pluck('id');                  
                
                    ?>
                        <option value="{{$levelid[0]}}" @if (request()->get('sort', null) == 'top_rate') selected="selected" @endif>
                        {{ $levelname[0]}}
                        </option>
                        @endforeach
                    </select>
                    @endif
                </div>
            </div>
        @endif

        <!-- manul scolaire -->
        <section style="height: 71px; margin-bottom: 158px!important;">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="wgh-slider">
                <input class="wgh-slider-target" type="radio" id="slide-1" name="slider" checked="checked" />
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
        <input class="wgh-slider-target" type="radio" id="slide-24" name="slider" />

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

                                        <div class="wgh-slider-item">

                                            <div class="wgh-slider-item__inner">

                                                <figure class="wgh-slider-item-figure"><img
                                                        style="width: 400px;height: 400px;!important"
                                                        class="wgh-slider-item-figure__image"
                                                        src="{{ $matiere->path }}" alt="Manuel Scolaire" />
                                                    <figcaption class="wgh-slider-item-figure__caption">
                                                        @if(!empty($varff))
                                                            <a href="/panel/init/scolaire/{{ $varff[0] }}">{{ $matiere->name }}
                                                            </a>
                                                        @endif
                                                        <span>+40 Video</span>
                                                    </figcaption>
                                                </figure>

                                                <label class="wgh-slider-item__trigger"
                                                    for="slide-{{ ++$loop->index }}"
                                                    title="{{ $matiere->name }}"></label>
                                            </div>
                                        </div>
                                    @endforeach

                                    @if(!empty($options))
                                        <div class="wgh-slider-item">

                                            <div class="wgh-slider-item__inner">

                                                <figure class="wgh-slider-item-figure"><img
                                                        style="width: 400px;height: 400px;!important"
                                                        class="wgh-slider-item-figure__image"
                                                        src="{{ $options[0]->logo }}" alt="Manuel Scolaire" />
                                                    <figcaption class="wgh-slider-item-figure__caption">

                                                        <a href="/panel/option/scolaire/{{ $options[0]->id }}">{{ $options[0]->name }}
                                                        </a>

                                                        <span>+40 Video</span>
                                                    </figcaption>
                                                </figure>
                                                <label class="wgh-slider-item__trigger" for="slide-{{ $lastIndex+1 }}"
                                                    title="{{ $options[0]->name }}"></label>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                           
                            @endif
                               <!-- $authUser->isTeacher() -->
                            @if($authUser->isTeacher())
                                @if(!empty($matiere1))
                                @php $globalIndex = 0; @endphp
                                @foreach ($matiere1 as  $collection)
                                    @foreach($collection as $key => $matiere)
                                    
                                        <?php
                                            $varff = DB::table('manuels')->where('material_id', '=', $matiere->id)->pluck('id');
                                        
                                          ?>
                                        <div class="wgh-slider-item">
                                            <div class="wgh-slider-item__inner">

                                                <figure class="wgh-slider-item-figure"><img
                                                        style="width: 400px;height: 400px;!important"
                                                        class="wgh-slider-item-figure__image"
                                                        src="{{ $matiere->path }}" alt="{{ $matiere->name }}" />
                                                    <figcaption class="wgh-slider-item-figure__caption">
                                                        @if($matiere->section)
                                                            <a href="/panel/scolaire/teacher/{{$varff[0]}}">{{ $matiere->section->level->name }}
                                                            </a>
                                                        @endif
                                                        <span>+40 Video</span>

                                                    </figcaption>
                                                </figure>
                                              
                                                <label class="wgh-slider-item__trigger"
                                                for="slide-{{ ++$globalIndex }}"
                                                    title="{{ $matiere->name }}"></label>
                                            </div>
                                        </div>
                                    @endforeach
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

                                                <figure class="wgh-slider-item-figure"><img
                                                        style="width: 400px;height: 400px;!important"
                                                        class="wgh-slider-item-figure__image"
                                                        src="{{ $option->logo }}" alt="The 5th Exotic" />
                                                    <figcaption class="wgh-slider-item-figure__caption">
                                                        @if($option->name)
                                                            <a href="/panel/option/scolaire/{{ $option->id }}">{{ $option->name }}
                                                                {{ $option->level->name }}
                                                            </a>
                                                        @endif
                                                        <span>+40 Video</span>

                                                    </figcaption>
                                                </figure>
                                                <label class="wgh-slider-item__trigger"
                                                    for="slide-{{ ++$loop->index }}"
                                                    title="{{ $option->name }}"></label>
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

                                           $lastIndex = $loop->index + 1;
                                         ?>
                                        <div class="wgh-slider-item">
                                            <div class="wgh-slider-item__inner">
                                                <figure class="wgh-slider-item-figure"><img
                                                        style="width: 400px;height: 400px;!important"
                                                        class="wgh-slider-item-figure__image"
                                                        src="{{ $matiere->path }}" alt="The 5th Exotic" />
                                                    <figcaption class="wgh-slider-item-figure__caption">
                                                        <div class="row">
                                                            <div class="col-sm-8">
                                                                @if(!empty($varff))
                                                                    <a href="/panel/scolaire/{{ $varff[0] }}">{{ $matiere->name }}
                                                                    </a>
                                                                    <p>مستوى: {{ $matiere->section->level->name }}
                                                                    </p>
                                                                @endif
                                                            </div>
                                                            <div class="col-sm-4">



                                                                <a>
                                                                    <button type="button" data-toggle="modal"
                                                                        data-target="#exampleModalLong" target="_blank"
                                                                        class="webinar-notify d-flex align-items-center justify-content-center snipcss-If7SW style-Q84TJ"
                                                                        id="style-Q84TJ">
                                                                        <img width="25" height="25" src="open-book.png">
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
                            @endif
                        </div>



                    </div>
        </section>





        <!-- list popup  model  -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document" style="max-width: 829px;">
                <div class="modal-content">

                    <div class="modal-body">
                        <div style="width: 820px; padding:10px">
                            <object data="http://localhost:8004/Mathematique.pdf#toolbar=0&page=&zoom=100"
                                type="application/pdf" width="100%" height="880px">
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
                    <textarea name="message" rows="4"
                        class="form-control ">{{ $authUser->offline_message }}</textarea>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="mt-30 d-flex align-items-center justify-content-end">
                    <button type="button"
                        class="js-save-offline-toggle btn btn-primary btn-sm">{{ trans('public.save') }}</button>
                    <button type="button"
                        class="btn btn-danger ml-10 close-swl btn-sm">{{ trans('public.close') }}</button>
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
    </div>
    <!-- video  news-->
    @if($authUser->isOrganization())
     <div class="col-3">
        New Video
        <div class="scrollable-div" style="margin-top:10px" id="scrollable-div">
            @foreach($videos as $video)

                <div class="webinar-card webinar-list webinar-list-2 d-flex m-10" style="    max-height: 150px;">
                    <div class="image-box"
                        style="width: 160px;min-width: 150px;margin-top: 12px;min-height:103px;height:126px!important"
                        onclick="playInMainPlayer('{{ asset($video->video) }}','{{ $video->titre }}','{{ $video->teachers->full_name }}','{{ $video->user_id }}','{{ $video->teachers->avatar }}')">

                        <video width="150" height="150" style="margin-top:-10px"
                            onclick="playInMainPlayer('{{ asset($video->video) }}','{{ $video->titre }}','{{ $video->teachers->full_name }}','{{ $video->user_id }}','{{ $video->teachers->avatar }}'); storeTeacherId('{{ $video->teachers->id }}');">
                            <source src="{{ $video->video }}" type="video/mp4">
                            <source src="{{ $video->video }}" type="video/webm">
                        </video>
                        <div class="progress-and-bell d-flex align-items-center"
                            style="    margin-bottom: -7px ;padding: 0px 6px!important">


                            <a href="" target="_blank"
                                class="webinar-notify d-flex align-items-center justify-content-center"
                                style="width: 30px;height: 28px!important">
                                <i data-feather="bell" width="5" height="5" class="webinar-icon"></i>
                            </a>


                            <div class="progress ml-10">
                                <span class="progress-bar" style="width: 10%"></span>
                            </div>

                        </div>
                    </div>
                    <div class="webinar-card-body w-100 d-flex flex-column">

                        <!-- <div class="d-flex align-items-center justify-content-between">
                                <a
                                    onclick="playInMainPlayer('{{ asset($video->video) }}','{{ $video->titre }}','{{ $video->teachers->full_name }}','{{ $video->user_id }}','{{ $video->teachers->avatar }}')">
                                    <h6 class="mt-5 webinar-title font-weight-bold font-8 text-dark-blue"
                                        style="white-space: normal;"> {{ $video->titre }} </h6>
                                </a>
                            </div>
                            <div class="user-inline-avatar d-flex align-items-center">
                                <div class="avatar bg-gray">
                                    <img src="{{ $video->teachers->avatar }}" class="img-cover"  alt="">
                                </div>
                                <a href="" target="_blank" class="user-name ml-5 font-8">
                                    {{ $video->teachers->full_name }}</a>
                            </div> -->
                        <blade
                            include|(getTemplate().includes.webinar.rate%26%2339%3B%2C%5B%26%2339%3Brate%26%2339%3B%20%3D%3E5%5D)%0D />

                        <div class="mt-10 d-flex justify-content-between ">
                            <!-- <div class="d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i data-feather="clock" width="20" height="20" class="webinar-icon"></i>
                                        <span class="duration ml-5 font-8">0:30 Hours</span>
                                    </div>

                                    <div class="vertical-line h-25 mx-15"></div>

                                    <div class="d-flex align-items-center">
                                        <i data-feather="calendar" width="20" height="20" class="webinar-icon"></i>
                                        <span class="date-published ml-5 font-8"> {{ $video->created_at }}</span>
                                    </div>
                                </div> -->

                            <div class="webinar-price-box d-flex flex-column justify-content-center align-items-center">

                                <span class="real"></span>


                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
     </div>
    @endif
    @if($authUser->isTeacher())
     <div class="col-3">
     <section class="">
    <div class="d-flex align-items-start align-items-md-center justify-content-between flex-column flex-md-row">
        <h1 class="section-title">{{ trans('panel.dashboard') }}</h1>
    </div>

    @if(!$authUser->financial_approval and !$authUser->isUser())
        <div class="p-15 mt-20 p-lg-20 not-verified-alert font-weight-500 text-dark-blue rounded-sm panel-shadow">
            {{ trans('panel.not_verified_alert') }}
            <a href="/panel/setting/step/7"
                class="text-decoration-underline">{{ trans('panel.this_link') }}</a>.
        </div>
    @endif

    <div class="dashboard-banner">
            <img src="{{ getPageBackgroundSettings('dashboard') }}" alt="" class="img-cover">
        </div>
</section>
     </div>
    @endif
</div>

<!-- pdf show -->
@if($authUser->isOrganization())
<div class="row" style="    margin-top: 54px;">
    <div class="col-lg-6">
        <div class="no-result-logo p-5 mt-10" style="margin-left: 150px ;">
            <img src="/assets/default/img/no-results/files.png" />
        </div>
        <h2 class="section-title text-center">{{ trans('public.look_captivating') }}</h2>
        <p class="mt-1 text-center">{{ trans('public.click_into') }}</p>
    </div>
    <div class="col-lg-6">
        <div style="padding:10px">
            <object data="http://localhost:8004/Mathematique.pdf#toolbar=0&page=&zoom=67" type="application/pdf"
                width="100%" height="880px">
                <p>Unable to display PDF file. <a href="">Download</a> instead.</p>
            </object>
        </div>
    </div>
</div>
@endif
@if($authUser->isTeacher())

<section class="dashboard" style="margin-top:59px">
    <div class="row">
        <div class="col-12 col-lg-3 mt-35">
            <div class="bg-white account-balance rounded-sm panel-shadow py-15 py-md-30 px-10 px-md-20">
                <div class="text-center">
                    <img src="/assets/default/img/activity/36.svg" class="account-balance-icon" alt="">

                    <h3 class="font-16 font-weight-500 text-gray mt-25">
                        {{ trans('panel.account_balance') }}</h3>
                    <span
                        class="mt-5 d-block font-30 text-secondary">{{ addCurrencyToPrice($authUser->getAccountingBalance()) }}</span>
                </div>

                @php
                    $getFinancialSettings = getFinancialSettings();
                    $drawable = $authUser->getPayout();
                    $can_drawable = ($drawable > ((!empty($getFinancialSettings) and
                    !empty($getFinancialSettings['minimum_payout'])) ? (int)$getFinancialSettings['minimum_payout'] :
                    0))
                @endphp

                <div
                    class="mt-20 pt-30 border-top border-gray300 d-flex align-items-center @if($can_drawable) justify-content-between @else justify-content-center @endif">
                    @if($can_drawable)
                        <span
                            class="font-16 font-weight-500 text-gray">{{ trans('panel.with_drawable') }}:</span>
                        <span class="font-16 font-weight-bold text-secondary">{{ addCurrencyToPrice($drawable) }}</span>
                    @else
                        <a href="/panel/financial/account"
                            class="font-16 font-weight-bold text-dark-blue">{{ trans('financial.charge_account') }}</a>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-3 mt-35">
            <a href="@if($authUser->isUser()) /panel/webinars/purchases @else /panel/meetings/requests @endif"
                class="dashboard-stats rounded-sm panel-shadow p-10 p-md-20 d-flex align-items-center">
                <div class="stat-icon requests">
                    <img src="/assets/default/img/icons/request.svg" alt="">
                </div>
                <div class="d-flex flex-column ml-15">
                    <span
                        class="font-30 text-secondary">{{ !empty($pendingAppointments) ? $pendingAppointments : (!empty($webinarsCount) ? $webinarsCount : 0) }}</span>
                    <span
                        class="font-16 text-gray font-weight-500">{{ $authUser->isUser() ? trans('panel.purchased_courses') : trans('panel.pending_appointments') }}</span>
                </div>
            </a>

            <a href="@if($authUser->isUser()) /panel/meetings/reservation @else /panel/financial/sales @endif"
                class="dashboard-stats rounded-sm panel-shadow p-10 p-md-20 d-flex align-items-center mt-15 mt-md-30">
                <div class="stat-icon monthly-sales">
                    <img src="@if($authUser->isUser()) /assets/default/img/icons/meeting.svg @else /assets/default/img/icons/monay.svg @endif"
                        alt="">
                </div>
                <div class="d-flex flex-column ml-15">
                    <span
                        class="font-30 text-secondary">{{ !empty($monthlySalesCount) ? addCurrencyToPrice($monthlySalesCount) : (!empty($reserveMeetingsCount) ? addCurrencyToPrice($reserveMeetingsCount) : 0) }}</span>
                    <span
                        class="font-16 text-gray font-weight-500">{{ $authUser->isUser() ? trans('panel.meetings') : trans('panel.monthly_sales') }}</span>
                </div>
            </a>
        </div>

        <div class="col-12 col-lg-3 mt-35">
            <a href="/panel/support"
                class="dashboard-stats rounded-sm panel-shadow p-10 p-md-20 d-flex align-items-center">
                <div class="stat-icon support-messages">
                    <img src="/assets/default/img/icons/support.svg" alt="">
                </div>
                <div class="d-flex flex-column ml-15">
                    <span
                        class="font-30 text-secondary">{{ !empty($supportsCount) ? $supportsCount : 0 }}</span>
                    <span
                        class="font-16 text-gray font-weight-500">{{ trans('panel.support_messages') }}</span>
                </div>
            </a>

            <a href="@if($authUser->isUser()) /panel/webinars/my-comments @else /panel/webinars/comments @endif"
                class="dashboard-stats rounded-sm panel-shadow p-10 p-md-20 d-flex align-items-center mt-15 mt-md-30">
                <div class="stat-icon comments">
                    <img src="/assets/default/img/icons/comment.svg" alt="">
                </div>
                <div class="d-flex flex-column ml-15">
                    <span
                        class="font-30 text-secondary">{{ !empty($commentsCount) ? $commentsCount : 0 }}</span>
                    <span
                        class="font-16 text-gray font-weight-500">{{ trans('panel.comments') }}</span>
                </div>
            </a>
        </div>

        <div class="col-12 col-lg-3 mt-35">
            <div class="bg-white account-balance rounded-sm panel-shadow py-15 py-md-15 px-10 px-md-20">
                <div data-percent="{{ !empty($nextBadge) ? $nextBadge['percent'] : 0 }}"
                    data-label="{{ (!empty($nextBadge) and !empty($nextBadge['earned'])) ? $nextBadge['earned']->title : '' }}"
                    id="nextBadgeChart" class="text-center">
                </div>
                <div class="mt-10 pt-10 border-top border-gray300 d-flex align-items-center justify-content-between">
                    <span
                        class="font-16 font-weight-500 text-gray">{{ trans('panel.next_badge') }}:</span>
                    <span
                        class="font-16 font-weight-bold text-secondary">{{ (!empty($nextBadge) and !empty($nextBadge['badge'])) ? $nextBadge['badge']->title : trans('public.not_defined') }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-6 mt-35">
            <div class="bg-white noticeboard rounded-sm panel-shadow py-10 py-md-20 px-15 px-md-30">
                <h3 class="font-16 text-dark-blue font-weight-bold">{{ trans('panel.noticeboard') }}
                </h3>

                @foreach($authUser->getUnreadNoticeboards() as $getUnreadNoticeboard)
                    <div class="noticeboard-item py-15">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h4 class="js-noticeboard-title font-weight-500 text-secondary">{!!
                                    truncate($getUnreadNoticeboard->title,150) !!}</h4>
                                <div class="font-12 text-gray mt-5">
                                    <span class="mr-5">{{ trans('public.created_by') }}
                                        {{ $getUnreadNoticeboard->sender }}</span>
                                    |
                                    <span
                                        class="js-noticeboard-time ml-5">{{ dateTimeFormat($getUnreadNoticeboard->created_at,'j M Y | H:i') }}</span>
                                </div>
                            </div>

                            <div>
                                <button type="button" data-id="{{ $getUnreadNoticeboard->id }}"
                                    class="js-noticeboard-info btn btn-sm btn-border-white">{{ trans('panel.more_info') }}</button>
                                <input type="hidden" class="js-noticeboard-message"
                                    value="{{ $getUnreadNoticeboard->message }}">
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="col-12 col-lg-6 mt-35">
            <div class="bg-white monthly-sales-card rounded-sm panel-shadow py-10 py-md-20 px-15 px-md-30">
                <div class="d-flex align-items-center justify-content-between">
                    <h3 class="font-16 text-dark-blue font-weight-bold">
                        {{ ($authUser->isUser()) ? trans('panel.learning_statistics') : trans('panel.monthly_sales') }}
                    </h3>

                    <span
                        class="font-16 font-weight-500 text-gray">{{ dateTimeFormat(time(),'M Y') }}</span>
                </div>

                <div class="monthly-sales-chart">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>


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
            <button type="button"
                class="js-save-offline-toggle btn btn-primary btn-sm">{{ trans('public.save') }}</button>
            <button type="button"
                class="btn btn-danger ml-10 close-swl btn-sm">{{ trans('public.close') }}</button>
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
@endif

@endsection

@push('scripts_bottom')
    <script src="/assets/default/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/default/vendors/chartjs/chart.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


    <script>
        var offlineSuccess = '{{ trans('
        panel.offline_success ') }}';
        var $chartDataMonths = @json($monthlyChart['months']);
        var $chartData = @json($monthlyChart['data']);

    </script>

    <script src="/assets/default/js/panel/dashboard.min.js"></script>
    <script>
        // Function to toggle the popup
        function togglePopup() {
            var popup = document.getElementById("myPopup");
            popup.classList.toggle("show");
        }

    </script>
    <script>
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
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get all elements with the child-name class
            var childNames = document.querySelectorAll('.child-name');

            // Add click event to each child name
            childNames.forEach(function (childName) {
                childName.addEventListener('click', function () {
                    var container = document.querySelector('.wgh-slider__container');
                    container.innerHTML = '';

                    // Get the full name from the data attribute
                    var fullName = childName.getAttribute('data-full-name');
                    var level_id = childName.getAttribute('data-level-id');
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
                        success: function (data, textStatus, jqXHR) {
                            // Check if the response is what you expect (e.g., JSON)
                            if (jqXHR.getResponseHeader('Content-Type').indexOf(
                                    'application/json') > -1) {
                                var uniqueIdCounter = 0;
                                // Process your data here
                                var container = document.querySelector(
                                    '.wgh-slider__container');
                                container.innerHTML = ''; // Clear the container

                                // Iterate over the array of materials
                                data.forEach(function (material, key) {
                                    console.log('Materials:',
                                    material); // Log or use the data as needed

                                    var div = document.createElement('div');
                                    div.className = 'wgh-slider-item';
                                    div.innerHTML = `
                <div class="wgh-slider-item__inner">
                    <figure class="wgh-slider-item-figure">
                        <img style="width: 400px; height: 400px !important" class="wgh-slider-item-figure__image" src="${material.path}" alt="${material.name}" />
                        <figcaption class="wgh-slider-item-figure__caption">
                        <a href="/panel/scolaire/213"> ${material.name} </a>
                        <p>مستوى: ${material.level ? material.level.name : 'N/A'}</p>

                       </figcaption>
                   
                    </figure>

                    <label class="wgh-slider-item__trigger" for="slide-${key+1}" title=" ${material.name}"></label>

                </div>
            `;
                                    container.appendChild(div);

                                });
                            } else {
                                // Handle unexpected content type
                                console.error('Unexpected content type:', jqXHR
                                    .getResponseHeader('Content-Type'));
                            }

                            // });
                        },

                        error: function (xhr, status, error) {
                            // Handle errors
                            if (xhr.status == 404) {
                                console.error('Materials not found: 404');
                            } else if (xhr.status == 500) {
                                console.error('Server error: 500');
                            } else {
                                console.error('AJAX error:', status, error);
                            }
                        },

                        beforeSend: function (xhr) {
                            // Include any headers or set up before sending the request
                            // For example, if you need to send a token or set the content type
                            xhr.setRequestHeader('X-Requested-With',
                                'XMLHttpRequest');
                            // If you have a CSRF token, set it here
                            // xhr.setRequestHeader('X-CSRF-Token', 'your_csrf_token_here');
                        }
                    });


                    // Update the greeting text
                    document.getElementById('userName').textContent = fullName;
                });
            });

        });

    </script>


@endpush
