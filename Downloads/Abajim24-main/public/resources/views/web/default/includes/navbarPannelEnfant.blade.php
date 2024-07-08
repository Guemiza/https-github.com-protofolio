@php
if (empty($authUser) and auth()->check()) {
$authUser = auth()->user();
}

$navBtnUrl = null;
$navBtnText = null;

if(request()->is('forums*')) {
$navBtnUrl = '/forums/create-topic';
$navBtnText = trans('update.create_new_topic');
} else {
$navbarButton = getNavbarButton(!empty($authUser) ? $authUser->role_id : null);

if (!empty($navbarButton)) {
$navBtnUrl = $navbarButton->url;
$navBtnText = $navbarButton->title;
}
}
@endphp
<style type="text/css">

.inline-space>:not([hidden]) {
    margin-bottom: .625rem;
    margin-right: .625rem;
} .p-0\.5 {
    padding: .125rem;
}

.to-orange-600 {
    --tw-gradient-to: #ea580c var(--tw-gradient-to-position);
}
.from-purple-500 {
    --tw-gradient-from: #a855f7 var(--tw-gradient-from-position);
    --tw-gradient-to: rgba(168,85,247,0) var(--tw-gradient-to-position);
    --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to);
}
.bg-gradient-to-r {
    background-image: linear-gradient(to right, var(--tw-gradient-stops));
}
.rounded-full {
    width: 62px;
    border-radius: 9999px;
}
.size-16 {
    height: 4rem;
    width: 4rem;
}
.flex {
    display: flex;
}
    ul.avatars {
        display: flex;
        /* Causes LI items to display in row. */
        list-style-type: none;
        margin: auto;
        /* Centers vertically / horizontally in flex container. */
        padding: 0px 7px 0px 0px;
        z-index: 1;
        /* Sets up new stack-container. */
    }

    li.avatars__item {
        height: 49px;
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
        position: relative;
        width: 42px;
        /* Forces flex items to be smaller than their contents. */
    }

    /*
    These zIndex values will only be relative to the contents of the UL element,
    which sets up its own stack container. As such, these will only be relevant
    to each other, not to the page at large.
    --
    NOTE: We could theoretically get around having to set explicit zIndex values
    by using "flex-direction: row-reverse" and using the natural stacking order
    of the DOM; however, to do that, we'd have to reverse the order of the HTML
    elements, which feels janky and unnatural.
*/
    li.avatars__item:nth-child(1) {
        z-index: 9;
    }

    li.avatars__item:nth-child(2) {
        z-index: 8;
    }

    li.avatars__item:nth-child(3) {
        z-index: 7;
    }

    li.avatars__item:nth-child(4) {
        z-index: 6;
    }

    li.avatars__item:nth-child(5) {
        z-index: 5;
    }

    li.avatars__item:nth-child(6) {
        z-index: 4;
    }

    li.avatars__item:nth-child(7) {
        z-index: 3;
    }

    li.avatars__item:nth-child(8) {
        z-index: 2;
    }

    li.avatars__item:nth-child(9) {
        z-index: 1;
    }

    /*
    These items are all 49px wide while the flex-item (in which they live) is
    only 42px wide. As such, there will be several pixels of overflow content,
    which will be displayed in a reverse-stacking order based on above zIndex.
*/
    img.avatars__img,
    span.avatars__initials,
    span.avatars__others {
        background-color: #596376;
         /* border: 2px solid #1F2532; */
        /* border-radius: 100px 100px 100px 100px ; */
        color: #FFFFFF;
        display: block;
        font-family: sans-serif;
        font-size: 31px;
        font-weight: 100;
        height: 45px;
        line-height: 45px;
        text-align: center;
        width: 45px;
    }

    span.avatars__others {
        background-color: #1E8FE1;  
    }
</style>
<div id="navbarVacuum"></div>
<nav id="navbar" class="navbar navbar-expand-lg navbar-light">
    <div class="{{ (!empty($isPanel) and $isPanel) ? 'container-fluid' : 'container'}}">
        <div class="d-flex align-items-center justify-content-between w-100">

            <a class="navbar-brand navbar-order d-flex align-items-center justify-content-center mr-0 {{ (empty($navBtnUrl) and empty($navBtnText)) ? 'ml-auto' : '' }}" href="/panel">
                @if(!empty($generalSettings['logo']))
                <img src="{{ $generalSettings['logo'] }}" style="width: 82%;height: 123%!important;" class="img-cover" alt="site logo">
                @endif
            </a>

            <button class="navbar-toggler navbar-order" type="button" id="navbarToggle">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="mx-lg-30 d-none d-lg-flex flex-grow-1 navbar-toggle-content " id="navbarContent">
                <div class="navbar-toggle-header text-right d-lg-none">
                    <button class="btn-transparent" id="navbarClose">
                        <i data-feather="x" width="32" height="32"></i>
                    </button>
                </div>

                @if(!empty($authUser->role_name== 'user'))
                <ul class="navbar-nav mr-auto d-flex align-items-center">
                    @if(!empty($categories) and count($categories))
                    <li class="mr-lg-25 " style="margin-left:20px">
                        <div class="menu-category">
                            <ul>
                                <li class="cursor-pointer user-select-none d-flex xs-categories-toggle">
                                    <i data-feather="grid" width="20" height="20" class="mr-10 d-none d-lg-block"></i>
                                    <!-- {{ trans('categories.categories') }} -->
                                    Matières
                                    <ul class="cat-dropdown-menu">
                                        @foreach($categories as $category)
                                        <li>
                                            <a href="{{ (!empty($category->subCategories) and count($category->subCategories)) ? '#!' : $category->getUrl() }}">
                                                <div class="d-flex align-items-center">
                                                    <img src="/{{ $category->icon }}" class="cat-dropdown-menu-icon mr-10" alt="{{ $category->title }} icon">
                                                    {{ $category->title }}
                                                </div>

                                                @if(!empty($category->subCategories) and count($category->subCategories))
                                                <i data-feather="chevron-right" width="20" height="20" class="d-none d-lg-inline-block ml-10"></i>
                                                <i data-feather="chevron-down" width="20" height="20" class="d-inline-block d-lg-none"></i>
                                                @endif
                                            </a>

                                            @if(!empty($category->subCategories) and count($category->subCategories))
                                            <ul class="sub-menu">
                                                @foreach($category->subCategories as $subCategory)
                                                <li>
                                                    <a href="{{ $subCategory->getUrl() }}">
                                                        @if(!empty($subCategory->icon))
                                                        <img src="{{ $subCategory->icon }}" class="cat-dropdown-menu-icon mr-10" alt="{{ $subCategory->title }} icon">
                                                        @endif

                                                        {{ $subCategory->title }}
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    @endif
                    {{-- <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/classes?sort=newest">Courses</a>
                            </li>

                             <li class="nav-item">
                                <a class="nav-link" href="/instructors">Instructors</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="/forums">Forums</a>
                            </li> --}}
                    <li class="mr-lg-55" style=" width: 660px!important;">
                        <form action="/search" method="get" class="form-inline my-2  my-lg-0 navbar-search position-relative" style="margin-left:50px;width: 600px!important;">
                            <input style="margin-left:50px;width: 500px!important;" class="form-control mr-5 rounded" type="text" name="search" placeholder=" Courses , Instructors {{ trans('navbar.search_anything') }} " aria-label="Search">
                            <button type="submit" class="btn-transparent d-flex align-items-center justify-content-center search-icon">
                                <i data-feather="search" width="20" height="20" class="mr-10"></i>
                            </button>
                        </form>
                    </li>
            </div>

            <!-- <img style="margin-left: 673px;margin-top:-20px" src="./assets/default/looooa.png" /> -->
            </ul>
            @endif
        </div>

        <!-- <div class="inline-space mt-5 flex flex-wrap">
                <div class="flex size-16 rounded-full bg-gradient-to-r from-sky-400 to-blue-600 p-0.5">
                  <div class="avatar h-full w-full rounded-full bg-white p-[3px] dark:bg-navy-700">
                    <img class="rounded-full" src="/f13.png" alt="avatar">
                  </div>
                </div>

                <div class="flex size-16 rounded-full bg-gradient-to-r from-amber-400 to-orange-600 p-0.5">
                  <div class="avatar h-full w-full rounded-full bg-white p-[3px] dark:bg-navy-700">
                    <img class="rounded-full" src="/f13.png" alt="avatar">
                  </div>
                </div>

                <div class="flex size-16 rounded-full bg-gradient-to-r from-pink-500 to-rose-500 p-0.5">
                  <div class="avatar h-full w-full rounded-full bg-white p-[3px] dark:bg-navy-700">
                    <img class="rounded-full" src="/f13.png" alt="avatar">
                  </div>
                </div>

                <div class="flex size-16 rounded-full bg-gradient-to-r from-purple-500 to-orange-600 p-0.5">
                  <div class="avatar h-full w-full rounded-full bg-white p-[3px] dark:bg-navy-700">
                    <img class="rounded-full" src="/f13.png" alt="avatar">
                    <div class="absolute right-0 size-3.5 rounded-full border-2 border-white bg-error dark:border-navy-700"></div>
                  </div>
                </div>

                <div class="flex size-16 rounded-full bg-gradient-to-r from-green-400 to-fuchsia-400 p-0.5">
                  <div class="avatar h-full w-full rounded-full bg-white p-[3px] dark:bg-navy-700">
                    <img class="rounded-full" src="/f13.png" alt="avatar">
                  </div>
                </div>
              </div> -->


        @if($authUser->isEnfant())
        <?php
                        $idOrgan1 = DB::table('users')->where('id',  $authUser->id)->pluck('organ_id');
                        $enfantOrgan = DB::table('users')->where('organ_id', $idOrgan1[0])->get();
                        ?>
                       
        <ul class="avatars">
            

            @if(!empty($enfantOrgan))
                @foreach($enfantOrgan as $enf)

                <a>
                    <li style="margin-right:10px;" class="avatars__item child-name" data-level-path="{{ $enf->avatar }}" data-level-id="" data-full-name="{{ $enf->full_name }} " data-level-name="">


                        <a href="/panel/impersonate/user/{{ $enf->id }}" >
                        <img src="{{ $enf->avatar }}" class="avatars__img" style="margin-left:10px; {{ session('impersonated') == $enf->id ? 'border: 2px solid red;' : '' }}" />
                        </a>
                    
                    </li>
                </a>
                @endforeach
                
            @endif
        </ul>
                

        @endif
        @if($authUser->isOrganization())

        <?php
        $userenfant = DB::table('users')->where('organ_id', $authUser->id)->get();
        ?>
       
        <ul class="avatars">
            

            @if(!empty($userenfant))
            @foreach($userenfant as $enf)

            <a>
                <li style="margin-right:10px;" class="avatars__item child-name" data-level-path="{{ $enf->avatar }}" data-level-id="" data-full-name="{{ $enf->full_name }} " data-level-name="">


                    <a href="/panel/impersonate/user/{{ $enf->id }}">
                        <img src="{{ $enf->avatar }}" class="avatars__img"  />
                       </a>
                  
                </li>
            </a>
            @endforeach
            @endif
        </ul>

        <ul class="avatars">


            @if(!empty($enfants))
            {{-- @foreach($enfants as $enf)
            <a >
		<li class="avatars__item child-name" data-level-path="{{ $enf->path }}" data-level-id="{{ $enf->level->id }}" data-full-name="{{ $enf->Nom }} {{ $enf->prenom }}" data-level-name="{{ $enf->level->name }}"0>
            <a>
                <img src="/{{ $enf->path }}" class="avatars__img" />
            </a>
            </li>
            </a>
            @endforeach --}}
            @endif
            <li class="avatars__item">
                <span class="avatars__others" data-toggle="modal" data-target="#exampleModal">
                    +

                </span>

            </li>
        </ul>
        @endif

        <div class="nav-icons-or-start-live navbar-order">

            @if(empty($authUser) )
            <a href="{{ empty($authUser) ? '/Instructor/register' : ($authUser->isAdmin() ? '/admin/webinars/create' : (($authUser->isVisiteur()) ? '/become_instructor' : '/panel/webinars/new')) }}" class="d-none d-lg-flex btn btn-sm btn-primary nav-start-a-live-btn">
                Become Instructor
            </a>
            @endif
            <!-- @if(!empty($navBtnUrl))
                    <a href="{{ $navBtnUrl }}" class="d-none d-lg-flex btn btn-sm btn-primary nav-start-a-live-btn">
                        {{ $navBtnText }}
                    </a>

                    <a href="{{ $navBtnUrl }}" class="d-flex d-lg-none text-primary nav-start-a-live-btn font-14">
                        {{ $navBtnText }}
                    </a>
                @endif -->

            <div class="d-none nav-notify-cart-dropdown top-navbar ">
                @if(!empty($authUser->role_name== 'user'))
                <button type="button" class="btn btn-transparent dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <!-- style="margin-top:10px" -->
                    <a href="/panel/all-instructor/">
                        <i data-feather="users" class="text-primary"></i>
                    </a>
                </button>
                {{--
                  <div class="border-left mx-15"></div>
                     @include(getTemplate().'.includes.shopping-cart-dropdwon') --}}
                @endif
                <div class="border-left mx-15"></div>

                @include(getTemplate().'.includes.notification-dropdown')
                <div class="dropdown">

              @if($authUser->isOrganization() or $authUser->isTeacher() or $authUser->isAdmin())

                <a href="#!" class="navbar-user d-flex align-items-center ml-50 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ $authUser->getAvatar() }}" class="rounded-circle" alt="{{ $authUser->full_name }}">
                        <span class="font-16 user-name ml-10 text-dark-blue font-16">{{ $authUser->full_name }}</span>
                    </a>
                @else
                <?php
                    $userparent = DB::table('users')->where('id', $authUser->organ_id)->get();
                ?>
                <a href="#!" class="navbar-user d-flex align-items-center ml-50 dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{ $userparent[0]->avatar }}" class="rounded-circle" alt="{{ $userparent[0]->full_name }}">
                        <span class="font-16 user-name ml-10 text-dark-blue font-16">{{ $userparent[0]->full_name }}</span>
                    </a>
                @endif
                    

                    <div class="dropdown-menu user-profile-dropdown" aria-labelledby="dropdownMenuButton">
                        <div class="d-md-none border-bottom mb-20 pb-10 text-right">
                            <i class="close-dropdown" data-feather="x" width="32" height="32" class="mr-10"></i>
                        </div>
                        @if(!empty($userenfant))
                        @foreach($userenfant as $enf)
                        <a class="dropdown-item" href="{{ $authUser->isAdmin() ? '/admin' : '/panel' }}">
                            <img src="{{$enf->avatar}}" width="25" alt="nav-icon">
                            <span class="font-16 text-dark-blue">{{ $enf->full_name }}</span>
                        </a>
                        @endforeach
                        @endif
                        @if($authUser->isTeacher() or $authUser->isOrganization())
                        <a class="dropdown-item" href="{{ $authUser->isAdmin() ? '/admin' : '/panel' }}">
                            <img src="/assets/default/img/icons/sidebar/dashboard.svg" width="25" alt="nav-icon">
                            <span class="font-16 text-dark-blue">{{ trans('public.my_panel') }}</span>
                        </a>
                        @endif
                        @if($authUser->isEnfant())
                        <?php
                        $idOrgan = DB::table('users')->where('id',  $authUser->id)->pluck('organ_id');
                        ?>
                        <a class="dropdown-item" href="/panel/impersonate/user/{{$idOrgan[0]}}">
                             
                            <img src="/assets/default/img/icons/sidebar/dashboard.svg" width="25" alt="nav-icon">
                            <span class="font-16 text-dark-blue">Account Parent</span>
                        </a>
                        @endif
                        @if($authUser->isTeacher() or $authUser->isOrganization())
                        <a class="dropdown-item" href="{{ $authUser->getProfileUrl() }}">
                            <img src="/assets/default/img/icons/profile.svg" width="25" alt="nav-icon">
                            <span class="font-16 text-dark-blue">{{ trans('public.my_profile') }}</span>
                        </a>
                        @endif
                        <a class="dropdown-item" href="/logout">
                            <img src="/assets/default/img/icons/sidebar/logout.svg" width="25" alt="nav-icon">
                            <span class="font-16 text-dark-blue">{{ trans('panel.log_out') }}</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</nav>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top: 90px;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">إضافة طفل</h5>
                <button style="margin-right: 86%;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <img src="/17c29bb894f41aad54d8ddb08b40e753.jpg" alt="Example Image" width="20%" height="20%" style="margin-right: 38%;">
                <form method="post" action="/panel/enfant/post">
                    {{ csrf_field() }}
                    <label for="email"> اسم الطفل</label><br>
                    <input type="text" name="nom" class="form-control" placeholder="اسم الطفل" />
                    <br>
                    <label for="email">لقب الطفل</label><br>
                    <input type="text" name="prenom" class="form-control" placeholder="لقب الطفل" />
                    <br>



                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-white font-16">الجنس</span>
                        </div>



                        <select name="sexe" id="cars" class="form-control {{ !empty($post) ? 'js-edit-content-locale' : '' }}">
                            <option value="Garçon">ولد</option>
                            <option value="Fille">بنت</option>
                        </select>


                    </div>
                    <br>
                    <div class="form-group">
                        <label class="input-label">مستوى:</label>
                        <?php
                        $leveeeel = DB::table('school_levels')->where('id', '>', 5)->get();
                        ?>

                        <select name="level_id" class="form-control {{ !empty($post) ? 'js-edit-content-locale' : '' }}">
                            @foreach($leveeeel as $lang )
                            <option value="{{ $lang->id }}">{{ $lang->name }}</option>
                            @endforeach


                        </select>
                        @error('locale')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">يغلق</button>
                        <button type="submit" class="btn btn-primary">إضافة طفل</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@push('scripts_bottom')
<script src="/assets/default/js/parts/navbar.min.js"></script>
@endpush