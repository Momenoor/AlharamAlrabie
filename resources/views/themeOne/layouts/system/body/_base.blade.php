<div class="content d-flex flex-row flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    {{--@include('themeOne.layouts.system.body._toolbar')--}}
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl vw-100">
            <!--begin::Row-->
                @yield('content')
            <!--end::Modals-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
