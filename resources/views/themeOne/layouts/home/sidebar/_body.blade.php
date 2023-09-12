<div class="mb-5 mb-lg-8" id="kt_sidebar_body">
    <!--begin::Scroll-->
    <div class="hover-scroll-y me-n6 pe-6" id="kt_sidebar_body" data-kt-scroll="true" data-kt-scroll-height="auto"
         data-kt-scroll-dependencies="#kt_sidebar_header, #kt_sidebar_footer"
         data-kt-scroll-wrappers="#kt_page, #kt_sidebar, #kt_sidebar_body" data-kt-scroll-offset="0">
        <!--begin::Timeline items-->
        <div class="timeline">
            @foreach($reviews as $review)
                <!--begin::Timeline item-->
                <div class="timeline-item">
                    <!--begin::Timeline line-->
                    <div class="timeline-line w-40px"></div>
                    <!--end::Timeline line-->
                    <!--begin::Timeline icon-->
                    <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                        <div class="symbol-label">
                            <div class="symbol symbol-circle symbol-40px" data-bs-toggle="tooltip"
                                 data-bs-boundary="window" data-bs-placement="top" title="{{$review->author_name}}">
                                <img src="{{$review->profile_photo_url}}" alt="img"/>

                            </div>
                        </div>
                    </div>
                    <!--end::Timeline icon-->
                    <!--begin::Timeline content-->

                    <div class="timeline-content mb-10 mt-n1">
                        <!--begin::Timeline heading-->
                        <div class="pe-3 mb-5">
                            <!--begin::Title-->
                            <div class="fs-5 fw-semibold mb-2 text-white">{{$review->text}}</div>
                            <!--end::Title-->
                            <!--begin::Description-->
                            <div class="d-flex align-items-center mt-1 fs-6">
                                <!--begin::Info-->
                                <div class="text-white opacity-50 me-2 fs-7">
                                    Added {{$review->relative_time_description }} by
                                </div>
                                <!--end::Info-->
                                <!--begin::User-->
                                <a class="btn btn-link text-white" href="{{$review->author_url}}">{{$review->author_name}}</a>
                                <!--end::User-->
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Timeline heading-->
                        <!--begin::Timeline details-->
                        <div class="pb-5">
                            <!--begin::Record-->
                            <div class="d-flex flex-stack border rounded px-7 py-3">
                                <!--begin::Title-->
                                <div class="rating">
                                    @for($i=1; $i<=5; $i++)
                                        <div class="rating-label @if($review->rating >= $i) checked @endif">
                                            <i class="ki-duotone ki-star fs-1"></i>
                                        </div>
                                    @endfor
                                </div>
                                <!--end::Action-->
                            </div>
                            <!--end::Record-->
                        </div>
                        <!--end::Timeline details-->
                    </div>
                    <!--end::Timeline content-->
                </div>
                <!--end::Timeline item-->
            @endforeach
            <!--end::Timeline item-->
        </div>
        <!--end::Timeline items-->
    </div>
    <!--end::Scroll-->
</div>
