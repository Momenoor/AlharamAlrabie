<!--begin::Toolbar wrapper-->
<div class="topbar d-flex align-items-stretch flex-shrink-0">
    <!--begin::Chat-->
    <div class="d-flex align-items-center ms-3 ms-lg-5">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon btn-topbar w-30px h-30px w-md-40px h-md-40px position-relative"
             id="kt_drawer_chat_toggle">
            <i class="ki-duotone ki-message-text-2 fs-1"><span class="path1"></span><span class="path2"></span><span
                    class="path3"></span></i>
            <span
                class="bullet bullet-dot bg-danger h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink">
            </span>
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::Chat-->
    <!--begin::Notifications-->
    <div class="d-flex align-items-center ms-3 ms-lg-5">
        <!--begin::Menu- wrapper-->
        <div class="btn btn-icon btn-topbar w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click"
             data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="ki-duotone ki-notification-bing fs-1"><span class="path1"></span><span class="path2"></span><span
                    class="path3"></span></i></div>
        @include('themeOne::partials.menus._notifications-menu')
        <!--end::Menu wrapper-->
    </div>
    <!--end::Notifications-->
    <!--begin::Theme mode-->
    <div class="d-flex align-items-center ms-3 ms-lg-5">
        @include('themeOne::partials.theme-mode._main')
    </div>
    <!--end::Theme mode-->
    <!--begin::User-->
    <div class="d-flex align-items-center ms-3 ms-lg-5" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click"
             data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <img class="h-100 w-100 rounded" src="assets/media/avatars/300-1.jpg" alt=""/>
        </div>
        @include('themeOne::partials.menus._user-account-menu')
        <!--end::Menu wrapper-->
    </div>
    <!--end::User -->
    <!--begin::Aside mobile toggle-->
    <!--end::Aside mobile toggle-->
</div>
<!--end::Toolbar wrapper-->
