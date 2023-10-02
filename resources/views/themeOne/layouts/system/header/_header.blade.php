<div class="header-brand me-5">
    <!--begin::Aside toggle-->
    <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
        <div class="btn btn-icon btn-color-white btn-active-color-primary w-30px h-30px" id="kt_aside_toggle">
            <i class="ki-duotone ki-abstract-14 fs-1">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
    </div>
    <!--end::Aside toggle-->
    <!--begin::Logo-->
    <a href="{{route('home')}}">
        <img alt="Logo" src="{{asset('image/logo.png')}}" class="h-25px h-lg-30px d-none d-md-block" />
        <img alt="Logo" src="{{asset('image/logo.png')}}" class="h-25px d-block d-md-none" />
    </a>
    <!--end::Logo-->
</div>
