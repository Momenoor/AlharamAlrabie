<!--begin::Sidebar-->
<div id="kt_sidebar" class="sidebar px-5 py-5 py-lg-8 px-lg-11 mw-325px mw-lg-400px" data-kt-drawer="true" data-kt-drawer-name="sidebar"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
     data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_sidebar_toggle">
    <!--begin::Header-->
    @include('themeOne::layouts.home.sidebar._header')
    <!--end::Header-->
    <!--begin::Body-->
    @include('themeOne::layouts.home.sidebar._body')
    <!--end::Body-->
    <!--begin::Footer-->
    @include('themeOne::layouts.home.sidebar._footer')
    <!--end::Footer-->
</div>
<!--end::Sidebar-->
