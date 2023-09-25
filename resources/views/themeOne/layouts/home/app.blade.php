<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->
<head>
    <base href=""/>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta charset="utf-8"/>
    <meta name="facebook-domain-verification" content="xec5bz7gz20ong9u4byzmcdcrx5n95" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="shortcut icon" href="{{asset('themeOne/assets/media/logos/favicon.ico')}}"/>
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets (used for this page only)-->
    <link href="{{asset('themeOne/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('themeOne/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheet Bundle (mandatory for all pages)-->
    <link href="{{asset('themeOne/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('themeOne/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('themeOne/assets/css/app.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top !== window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" data-kt-app-page-loading-enabled="true" data-kt-app-page-loading="on"
      style="background: radial-gradient(circle at center, #c96163, #af0808);"
      class="page-bg">
@include('themeOne::partials.theme-mode._init')
@include('themeOne::partials._loader')
<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <!--begin::Wrapper-->
    @yield('content')
    <!--end::Wrapper-->
</div>

<!--end::Page-->

<!--end::Root-->
@include('themeOne::partials._scroll-top')
<!--begin::Javascript-->
<script>
    let hostUrl = "assets/";        </script>
<!--begin::Global Javascript Bundle (mandatory for all pages)-->
<script src="{{asset('themeOne/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('themeOne/assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{asset('themeOne/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
{{--<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>--}}
<script src="{{asset('themeOne/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="{{asset('themeOne/assets/js/widgets.bundle.js')}}"></script>
<script src="{{asset('themeOne/assets/js/custom/widgets.js')}}"></script>
<script src="{{asset('themeOne/assets/js/app.js')}}"></script>
<!--end::Custom Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
