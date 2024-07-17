@extends(getTemplate() .'.panel.layouts.panel_layout')

@push('styles_top')

@endpush

@section('content')
    <section >
       
        <section class="mt-lg-5 pt-lg-20 mt-md-40 pt-md-40">
            <form action="/panel/webinars/allcourses" method="get" id="filtersForm">

                @include('web.default.pages.includes.top_filters')
        <div class="row">
        @if(empty(request()->get('card')) or request()->get('card') == 'grid')
                            <div class="row">
                                @foreach($webinars as $webinar)
                                    <div class="col-12 col-lg-3">
                                        @include('web.default.panel.webinar.includes_courses.grid-card',['webinar' => $webinar])
                                    </div>
                                    
                                @endforeach
                            </div>

                        @elseif(!empty(request()->get('card')) and request()->get('card') == 'list')

                            @foreach($webinars as $webinar)
                                @include('web.default.panel.webinar.includes_courses.list-card',['webinar' => $webinar])
                            @endforeach
                        @endif
        </div>
            </form>
            <div class="mt-50 pt-30">
                                         {{ $webinars->appends(request()->input())->links('vendor.pagination.panel') }}
                                    </div>
        </section> 
    </section>
@endsection

@push('scripts_bottom')
    <script>
        var undefinedActiveSessionLang = '{{ trans('webinars.undefined_active_session') }}';
    </script>

    <script src="/assets/default/js/panel/join_webinar.min.js"></script>
    <script src="/assets/default/vendors/select2/select2.min.js"></script>
    <script src="/assets/default/vendors/swiper/swiper-bundle.min.js"></script>

    <script src="/assets/default/js/parts/categories.min.js"></script>
@endpush
