<div class="d-flex flex-column flex-column-fluid mb-5 mb-lg-10">
    <!--begin::Brand-->
    <div class="d-flex flex-center pt-10 pt-lg-0 mb-10 mb-lg-0 h-lg-225px">
        <!--begin::Sidebar toggle-->
        <div class="btn btn-icon btn-active-color-primary w-30px h-30px d-lg-none me-4 ms-n15" id="kt_sidebar_toggle">
            <i class="ki-duotone ki-abstract-14 fs-3">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
        <!--end::Sidebar toggle-->
        <!--begin::Logo-->
        <div class="d-flex flex-column mb-7 align-items-center">
            <div class="d-flex flex-column mb-0 align-items-center">
                <div class="logo-container">
                    <a href="{{route('home')}}"><img class="logo" src="{{asset('images/logo.png')}}"
                                                     alt="Al Haram Al Rabie"></a>
                    <div class="triangle"></div>
                </div>
            </div>
        </div>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    @include('themeOne::layouts.body._base')
</div>
