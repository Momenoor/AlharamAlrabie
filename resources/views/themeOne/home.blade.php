@extends('themeOne::layouts.app')

@section('content')
    <div class="page launcher sidebar-enabled d-flex flex-row flex-column-fluid me-lg-5" id="kt_page">
        <div class="d-flex flex-row-fluid">
            <!--begin::Container-->
            <div class="d-flex flex-column flex-row-fluid align-items-center">
                @include('themeOne::layouts.header._base')
                @include('themeOne::layouts.footer._base')
            </div>
        </div>
        <!--begin::Container-->
        @include('themeOne::layouts.sidebar._base')
        <!--end::Container-->

    </div>
@endsection
