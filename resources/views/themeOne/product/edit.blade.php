@extends('themeOne::layouts.system.app')
@section('content')
    <div class="mt-lg-20">
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!--begin::Form-->
        <form id="kt_ecommerce_edit_product_form" class="form d-flex flex-column flex-lg-row"
              action="{{route('product.update',$product)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!--begin::Aside column-->
            <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                <!--begin::Thumbnail settings-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Image</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body text-center pt-0">
                        @include('themeOne::product.imageWithCropperInModal',['product'=>$product])
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Thumbnail settings-->
                <!--begin::Status-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Status</h2>
                        </div>
                        <!--end::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <div class="rounded-circle bg-success w-15px h-15px"
                                 id="kt_ecommerce_edit_product_status"></div>
                        </div>
                        <!--begin::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Select2-->
                        <label for="kt_ecommerce_edit_product_status_select"></label>
                        <select class="form-select mb-2"
                                data-control="select2"
                                data-hide-search="true"
                                data-placeholder="Select an option"
                                name="is_show_in_menu"
                                id="kt_ecommerce_edit_product_status_select">
                            <option></option>
                            <option value="1" @selected(old('is_show_in_menu',$product->is_show_in_menu) == 1)>Show in
                                menu
                            </option>
                            <option value="0" @selected(old('is_show_in_menu',$product->is_show_in_menu) == 0)>Not show
                                in menu
                            </option>
                        </select>
                        <!--end::Select2-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Set the product menu status.</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Status-->
                <!--begin::Category & tags-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Product Details</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Input group-->
                        <!--begin::Label-->
                        <label for="kt_ecommerce_edit_product_category" class="form-label">Category</label>
                        <!--end::Label-->
                        <!--begin::Select2-->
                        <select name="categories_id" id="kt_ecommerce_edit_product_category" class="form-select mb-2"
                                data-control="select2" data-placeholder="Select a category" data-allow-clear="true">
                            <option></option>
                            @foreach($categories as $category)
                                <option data-predefined-variants="{{$category->predefinedVariants}}"
                                        value="{{$category->id}}" @selected($category->id  == old('category_id',$product->category_id))>{{$category->name}}</option>
                            @endforeach
                        </select>
                        <!--end::Select2-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7 mb-7">Add product to a category.</div>
                        <!--end::Description-->
                        <!--end::Input group-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Category & tags-->
                <!--begin::Weekly sales-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Weekly Sales</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <span class="text-muted">No data available. Sales data will begin capturing once product has been published.</span>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Weekly sales-->
                <!--begin::Template settings-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Product Template</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Select store template-->
                        <label for="kt_ecommerce_edit_product_store_template" class="form-label">Select a product
                            template</label>
                        <!--end::Select store template-->
                        <!--begin::Select2-->
                        <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                data-placeholder="Select an option" id="kt_ecommerce_edit_product_store_template">
                            <option></option>
                        </select>
                        <!--end::Select2-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Assign a template from your current theme to define how a single
                            product is displayed.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Template settings-->
            </div>
            <!--end::Aside column-->
            <!--begin::Main column-->
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <!--begin::Tab content-->
                <div class="tab-content">
                    <div class="d-flex flex-column gap-7 gap-lg-10">
                        <!--begin::General options-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>General</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                <div class="mb-10 fv-row">
                                    <!--begin::Label-->
                                    <label for="name" class="required form-label">Product Name</label>
                                    <input type="text" id="name" name="name" class="form-control mb-2"
                                           placeholder="Product name" value="{{old('name',$product->name)}}"/>
                                    <!--end::Input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">A product name is required and recommended to be
                                        unique.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div>
                                    <!--begin::Label-->
                                    <label class="form-label">Description</label>
                                    <!--end::Label-->
                                    <!--begin::Editor-->
                                    <div id="kt_ecommerce_edit_product_description"
                                         class="min-h-200px mb-2">{{old('description',$product->description)}}</div>
                                    <input type="hidden" name="description"
                                           value="{{old('description',$product->description)}}"/>
                                    <!--end::Editor-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set a description to the product for better
                                        visibility.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Card header-->
                        </div>
                        <!--end::General options-->
                        <!--begin::Pricing-->
                        <div class="card card-flush py-4">
                            <!--begin::Card header-->
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>Pricing</h2>
                                </div>
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card-body pt-0">
                                <!--begin::Input group-->
                                @include('themeOne::product.productVariants',['product'=>$product])
                                <div id="kt_ecommerce_edit_product_price_container">
                                    <label for="price" class="required form-label">Base Price</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" id="price" name="price" class="form-control mb-2"
                                           placeholder="Product price" value=""/>
                                </div>
                                <!--end::Input-->
                                <!--begin::Description-->
                                <div class="text-muted fs-7">Set the product price.</div>
                                <!--end::Description-->

                                <!--end::Input group-->
                                <!--begin::Tax-->
                                <div class="d-flex flex-wrap gap-5">
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <!--begin::Label-->
                                        <label class="required form-label">Tax Class</label>
                                        <!--end::Label-->
                                        <!--begin::Select2-->
                                        <select class="form-select mb-2" name="tax" data-control="select2"
                                                data-hide-search="true" data-placeholder="Select an option">
                                            <option></option>
                                            <option value="0">Tax Free</option>
                                            <option value="1">Taxable Goods</option>
                                            <option value="2">Downloadable Product</option>
                                        </select>
                                        <!--end::Select2-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set the product tax class.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row w-100 flex-md-root">
                                        <!--begin::Label-->
                                        <label class="form-label">VAT Amount (%)</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control mb-2" value=""/>
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set the product VAT about.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end:Tax-->
                            </div>
                        </div>
                        <!--end::Card header-->
                    </div>
                    <!--end::Pricing-->
                </div>

                <!--end::Tab content-->
                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <a href="{{route('product.index')}}" id="kt_ecommerce_edit_product_cancel"
                       class="btn btn-light me-5">Cancel</a>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_ecommerce_edit_product_submit" class="btn btn-primary">
                        <span class="indicator-label">Save Changes</span>
                        <span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
            </div>
            <!--end::Main column-->
        </form>
        <!--end::Form-->
    </div>

@endsection
@push('scripts')
    <script type="text/javascript">
        KTUtil.onDOMContentLoaded(function () {
            const submitBtn = document.querySelector('#kt_ecommerce_edit_product_submit');
            submitBtn.addEventListener('click', function (e) {
                submitBtn.setAttribute("data-kt-indicator", "on");
            });

            var quill = new Quill('#kt_ecommerce_edit_product_description', {
                modules: {
                    toolbar: [
                        [{
                            header: [3, 4, 5, false]
                        }],
                        ['bold', 'italic', 'underline'],
                    ]
                },
                placeholder: 'Type your text here...',
                theme: 'snow' // or 'bubble'
            })
            quill.on('text-change', function () {

                $('[name="description"]').val(quill.root.innerHTML);
            });

            $('#kt_ecommerce_edit_product_category').select2().on('change', function (e) {
                var predefinedVariants = $(this).find('option:selected').data('predefined-variants');
                if (predefinedVariants !== undefined) {

                } else {

                }

            }).trigger('change');


            $('#kt_ecommerce_edit_product_status_select').on('change', function (e) {
                const status = $(this).val();
                if (status === "1") {
                    $('#kt_ecommerce_edit_product_status').removeClass('bg-danger').addClass('bg-success');
                } else {
                    $('#kt_ecommerce_edit_product_status').removeClass('bg-success').addClass('bg-danger');
                }
            }).trigger('change');
        })

    </script>
@endpush
