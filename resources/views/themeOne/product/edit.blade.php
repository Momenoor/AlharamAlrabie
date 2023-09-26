@extends('themeOne::layouts.system.app')
@section('content')
    <div class="mt-lg-20">
        <!--begin::Form-->
        <form id="kt_ecommerce_edit_product_form" class="form d-flex flex-column flex-lg-row"
              action="{{route('product.update',$product)}}" method="post">
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
                        <!--begin::Image input-->
                        <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                             data-kt-image-input="true">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-150px h-150px"
                                 style="background-image: url('{{$product->image}}')"></div>
                            <!--end::Preview existing avatar-->
                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                   data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                <i class="ki-duotone ki-pencil fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--begin::Inputs-->
                                <input type="file" name="image" value="{{$product->image}}" accept=".png, .jpg, .jpeg"/>
                                <input type="hidden" name="image_remove"/>
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->
                            <!--begin::Cancel-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                  data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
														<i class="ki-duotone ki-cross fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                            <!--end::Cancel-->
                            <!--begin::Remove-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                  data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
														<i class="ki-duotone ki-cross fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                            <!--end::Remove-->
                        </div>
                        <!--end::Image input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image
                            files are accepted
                        </div>
                        <!--end::Description-->
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
                        <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                data-placeholder="Select an option" name="is_show_in_menu"
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
                        <label for="kt_ecommerce_edit_product_categories" class="form-label">Categories</label>
                        <!--end::Label-->
                        <!--begin::Select2-->
                        <select name="categories[]" id="kt_ecommerce_edit_product_categories" class="form-select mb-2"
                                data-control="select2"
                                data-placeholder="Select a category"
                                data-allow-clear="true" multiple="multiple">
                            <option></option>
                            @foreach($categories as $category)
                                <option
                                    value="{{$category->id}}" @selected(in_array($category->id ,old('categories[]',$product->categories_ids)))>{{$category->name}}</option>
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
                <!--begin:::Tabs-->
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                           href="#kt_ecommerce_edit_product_general">General</a>
                    </li>
                    <!--end:::Tab item-->
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                           href="#kt_ecommerce_edit_product_advanced">Advanced</a>
                    </li>
                    <!--end:::Tab item-->
                </ul>
                <!--end:::Tabs-->
                <!--begin::Tab content-->
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_ecommerce_edit_product_general" role="tab-panel">
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
                                               placeholder="Product name" value="{{$product->name}}"/>
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
                                             name="description" class="min-h-200px mb-2">{{$product->description}}</div>
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
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
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
                                    </div>
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
                                <!--end::Card header-->
                            </div>
                            <!--end::Pricing-->
                        </div>
                    </div>
                    <!--end::Tab pane-->
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade" id="kt_ecommerce_edit_product_advanced" role="tab-panel">
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <!--begin::Inventory-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Inventory</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label">SKU</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="sku" class="form-control mb-2" placeholder="SKU Number"
                                               value=""/>
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Enter the product SKU.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label">Barcode</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="sku" class="form-control mb-2"
                                               placeholder="Barcode Number" value=""/>
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Enter the product barcode number.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label">Quantity</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div class="d-flex gap-3">
                                            <input type="number" name="shelf" class="form-control mb-2"
                                                   placeholder="On shelf" value=""/>
                                            <input type="number" name="warehouse" class="form-control mb-2"
                                                   placeholder="In warehouse"/>
                                        </div>
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Enter the product quantity.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row">
                                        <!--begin::Label-->
                                        <label class="form-label">Allow Backorders</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div class="form-check form-check-custom form-check-solid mb-2">
                                            <input class="form-check-input" type="checkbox" value=""/>
                                            <label class="form-check-label">Yes</label>
                                        </div>
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Allow customers to purchase products that are out
                                            of stock.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::Inventory-->
                            <!--begin::Variations-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Variations</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
                                        <!--begin::Label-->
                                        <label class="form-label">Add Product Variations</label>
                                        <!--end::Label-->
                                        <!--begin::Repeater-->
                                        <div id="kt_ecommerce_edit_product_options">
                                            <!--begin::Form group-->
                                            <div class="form-group">
                                                <div data-repeater-list="kt_ecommerce_edit_product_options"
                                                     class="d-flex flex-column gap-3">
                                                    <div data-repeater-item=""
                                                         class="form-group d-flex flex-wrap align-items-center gap-5">
                                                        <!--begin::Select2-->
                                                        <div class="w-100 w-md-200px">
                                                            <select class="form-select" name="product_option"
                                                                    data-placeholder="Select a variation"
                                                                    data-control="select2"
                                                                    data-kt-ecommerce-catalog-add-product="product_option">
                                                                <option></option>
                                                                <option value="color">Color</option>
                                                                <option value="size">Size</option>
                                                                <option value="material">Material</option>
                                                                <option value="style">Style</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Select2-->
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control mw-100 w-200px"
                                                               name="product_option_value" placeholder="Variation"/>
                                                        <!--end::Input-->
                                                        <button type="button" data-repeater-delete=""
                                                                class="btn btn-sm btn-icon btn-light-danger">
                                                            <i class="ki-duotone ki-cross fs-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Form group-->
                                            <!--begin::Form group-->
                                            <div class="form-group mt-5">
                                                <button type="button" data-repeater-create=""
                                                        class="btn btn-sm btn-light-primary">
                                                    <i class="ki-duotone ki-plus fs-2"></i>Add another variation
                                                </button>
                                            </div>
                                            <!--end::Form group-->
                                        </div>
                                        <!--end::Repeater-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::Variations-->
                        </div>
                    </div>
                    <!--end::Tab pane-->
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
        var submitBtn = document.querySelector('#kt_ecommerce_edit_product_submit');
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
        });
        $('#kt_ecommerce_edit_product_categories').on('change', function (e) {
            const initialCategories = {!! $product->categories->toJson() !!};
            const oldCategoryPrices = @json(old('category_price', []));
            const selectedCategories = $(this).select2('data');
            const priceContainer = $('#kt_ecommerce_edit_product_price_container');
            priceContainer.empty();
            selectedCategories.forEach(category => {
                const id = category.id;
                const name = category.text;

                // First, look for old value
                let inputValue = oldCategoryPrices[id] ? oldCategoryPrices[id] : '';

                // If no old value, then look for initial value
                if (!inputValue) {
                    const initialCategory = initialCategories.find(c => c.id == id);
                    if (initialCategory && initialCategory.pivot && initialCategory.pivot.price) {
                        inputValue = initialCategory.pivot.price;
                    }
                }
                priceContainer.append(`<div class="form-group">
                <label class="form-label">Price for ${name}</label>
                <input type="text" class="form-control" name="category_price[${id}]" value="${inputValue}">
            </div>`);
            });
        });
        $('#kt_ecommerce_edit_product_categories').select2().trigger('change');

        $('#kt_ecommerce_edit_product_status_select').on('change', function (e) {
            const status = $(this).val();
            if (status == 1) {
                $('#kt_ecommerce_edit_product_status').removeClass('bg-danger').addClass('bg-success');
            } else {
                $('#kt_ecommerce_edit_product_status').removeClass('bg-success').addClass('bg-danger');
            }
        })

    </script>
@endpush
