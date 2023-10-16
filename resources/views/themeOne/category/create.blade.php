@php
    $variants = old('variants',[]);
    $predefinedVariants = old('predefinedVariants',[]);
@endphp
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
        <form id="kt_ecommerce_edit_category_form" class="form d-flex flex-column flex-lg-row"
              action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <!--begin::Aside column-->
            <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10 min-w-md-300px">
                <!--begin::Thumbnail settings-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Icon</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body text-center pt-0">
                        <!--begin::Image input-->
                        <!--begin::Image input placeholder-->
                        <style>.image-input-placeholder {
                                background-image: url('{{asset('themeOne/assets/media/svg/files/blank-image.svg')}}');
                            }

                            [data-bs-theme="dark"] .image-input-placeholder {
                                background-image: url('{{asset('themeOne/assets/media/svg/files/blank-image-dark.svg')}}');
                            }</style>
                        <!--end::Image input placeholder-->
                        <!--begin::Image input-->
                        <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                             data-kt-image-input="true">
                            <!--begin::Preview existing avatar-->
                            <div class="image-input-wrapper w-150px h-150px"></div>
                            <!--end::Preview existing avatar-->
                            <!--begin::Label-->
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                   data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change image">
                                <!--begin::Icon-->
                                <i class="ki-duotone ki-pencil fs-7">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--end::Icon-->
                                <!--begin::Inputs-->
                                <input type="file" name="image" accept=".svg"/>
                                <input type="hidden" name="image_remove"/>
                                <!--end::Inputs-->
                            </label>
                            <!--end::Label-->
                            <!--begin::Cancel-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                  data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel image">
														<i class="ki-duotone ki-cross fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                            <!--end::Cancel-->
                            <!--begin::Remove-->
                            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                  data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove image">
														<i class="ki-duotone ki-cross fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                            <!--end::Remove-->
                        </div>
                        <!--end::Image input-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">
                            Set the category icon image. Only *.svg image files are accepted
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
                                 id="kt_ecommerce_add_category_status"></div>
                        </div>
                        <!--begin::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Select2-->
                        <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select">
                            <option></option>
                            <option value="1" selected="selected">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        <!--end::Select2-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Set the category status.</div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Status-->
                <!--begin::Template settings-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>Store Template</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Select store template-->
                        <label for="kt_ecommerce_add_category_store_template" class="form-label">Select a store
                            template</label>
                        <!--end::Select store template-->
                        <!--begin::Select2-->
                        <select class="form-select mb-2" data-control="select2" data-hide-search="true"
                                data-placeholder="Select an option" id="kt_ecommerce_add_category_store_template">
                            <option></option>
                            <option value="default" selected="selected">Default template</option>
                            <option value="electronics">Electronics</option>
                            <option value="office">Office stationary</option>
                            <option value="fashion">Fashion</option>
                        </select>
                        <!--end::Select2-->
                        <!--begin::Description-->
                        <div class="text-muted fs-7">Assign a template from your current theme to define how the
                            category products are displayed.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Template settings-->
            </div>
            <!--end::Aside column-->
            <!--begin::Main column-->
            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10 min-w-md-700px">
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
                            <label for="name" class="required form-label">Category Name</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input id="name" type="text" name="name" class="form-control mb-2"
                                   placeholder="Category name"
                                   value="{{old('name')}}"/>
                            <!--end::Input-->
                            <!--begin::Description-->
                            <div class="text-muted fs-7">A category name is required and recommended to be unique.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div>
                            <!--begin::Label-->
                            <label class="form-label">Description</label>
                            <!--end::Label-->
                            <!--begin::Editor-->
                            <div id="kt_ecommerce_edit_category_description"
                                 class="min-h-200px mb-2">{!! old('description') !!}</div>
                            <input type="hidden" name="description"
                                   value="{!! old('description') !!}"/>
                            <!--begin::Description-->
                            <div class="text-muted fs-7">Set a description to the category for better visibility.</div>
                            <!--end::Description-->
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Card header-->
                </div>
                <!--end::General options-->
                <!--begin::Automation-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Variants</h2>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <label class="form-label">Category assignment variants</label>
                        <div id="variants">
                            <div class="form-group" data-repeater-list="variants">
                                @if(count($variants)>0)
                                    <div class="d-flex flex-column gap-3" data-repeated-init-empty='false'
                                         id="repeated_variants_init_empty">
                                        @foreach($variants as $variant)
                                            <div class="mt-10" data-repeater-item>
                                                <label class="form-label">Conditions</label>
                                                <div
                                                    class="d-flex flex-wrap align-items-center text-gray-600 gap-5 mb-7">
                                                    <div class="d-flex flex-md-row flex-column gap-3">
                                                        <div>Products price relation:</div>
                                                        <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio"
                                                                   name="is_extra_price" value="0"
                                                                   id="just_information" {{ (key_exists('is_extra_price',$variant) && $variant['is_extra_price'] == "0") ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="just_information">Just
                                                                information.</label>
                                                        </div>
                                                        <div class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio"
                                                                   name="is_extra_price" value="1"
                                                                   id="extra_price" {{ (key_exists('is_extra_price',$variant) && $variant['is_extra_price'] == "1") ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="extra_price">Requires
                                                                extra price.</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-wrap align-items-center gap-5">
                                                    <label>
                                                        <input type="text" name="name" placeholder="Name"
                                                               class="form-control w-200 w-md-300px"
                                                               value="{{$variant['name']}}">
                                                    </label>
                                                    <label>
                                                        <div
                                                            class="input-group extra-price w-100 w-md-200px @if(empty($variant['is_extra_price'])) d-none @endif">
                                                            <input type="text" name="price" placeholder="Price: 0.00"
                                                                   class="form-control" value="{{$variant['price']}}">
                                                            <span class="input-group-text">AED</span>
                                                        </div>
                                                    </label>
                                                    <div>
                                                        <label class="form-label mt-2">Displayed Text:</label>
                                                        <div class="min-h-100px mb-2 variant-description"
                                                             data-placeholder="Variant display text.">{!! $variant['description'] !!}</div>
                                                        <input type="hidden" name="description"
                                                               value="{!! $variant['description'] !!}"/>
                                                    </div>
                                                </div>
                                                <button type="button" data-repeater-delete
                                                        class="btn btn-sm btn-light-danger">
                                                    <i class="ki-duotone ki-cross fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i> Delete
                                                </button>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="d-flex flex-column gap-3" data-repeated-init-empty='true'
                                         id="repeated_variants_init_empty">
                                        <div class="mt-10" data-repeater-item>
                                            <label class="form-label">Conditions</label>
                                            <div class="d-flex flex-wrap align-items-center text-gray-600 gap-5 mb-7">
                                                <div class="d-flex flex-md-row flex-column gap-3">
                                                    <div>Products price relation:</div>
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio"
                                                               name="is_extra_price" value="0"
                                                               id="just_information"/>
                                                        <label class="form-check-label" for="just_information">Just
                                                            information.</label>
                                                    </div>
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio"
                                                               name="is_extra_price" value="1" id="extra_price"/>
                                                        <label class="form-check-label" for="extra_price">Requires extra
                                                            price.</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-wrap align-items-center gap-5">
                                                <label>
                                                    <input type="text" name="name" placeholder="Name"
                                                           class="form-control w-200 w-md-300px">
                                                </label>
                                                <label>
                                                    <div class="input-group extra-price w-100 w-md-200px d-none">
                                                        <input type="text" name="price" placeholder="Price: 0.00"
                                                               class="form-control">
                                                        <span class="input-group-text">AED</span>
                                                    </div>
                                                </label>
                                                <div>
                                                    <label class="form-label mt-2">Displayed Text:</label>
                                                    <div class="min-h-100px mb-2 variant-description"
                                                         data-placeholder="Variant display text."></div>
                                                    <input type="hidden" name="description"/>
                                                </div>
                                            </div>
                                            <button type="button" data-repeater-delete
                                                    class="btn btn-sm btn-light-danger">
                                                <i class="ki-duotone ki-cross fs-2">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i> Delete
                                            </button>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="separator separator-dashed my-5"></div>
                            <div class="form-group mt-5">
                                <button type="button" data-repeater-create class="btn btn-sm btn-light-primary">
                                    <i class="ki-duotone ki-plus fs-2"></i>Add another variation
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card card-flush py-4">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Predefined Variants</h2>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <label class="form-label">Category predefined variants for new products.</label>
                        <div id="predefinedVariants">
                            <div class="form-group" data-repeater-list="predefinedVariants">
                                <div class="d-flex flex-column gap-3">
                                    @if(count($predefinedVariants)> 0)
                                        <div class="mt-10" id="repeated_init_empty" data-repeated-init-empty='false'>
                                            @foreach($predefinedVariants as $predefinedVariant)
                                                <div
                                                    class="d-flex flex-wrap align-items-center text-gray-600 gap-5 mb-7"
                                                    data-repeater-item>
                                                    <label for="name" class="form-label">Predefined variant
                                                        Value:</label>
                                                    <div class="input-group w-200px w-md-300px">
                                                        <input id="name" class="form-control" name="name"
                                                               value="{{$predefinedVariant['name']}}">
                                                        <button
                                                            class="border border-secondary btn btn-icon btn-flex btn-light-danger"
                                                            data-repeater-delete type="button">
                                                            <i class="ki-duotone ki-trash fs-5"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span><span class="path5"></span></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="mt-10" id="repeated_init_empty" data-repeated-init-empty='true'>
                                            <div class="d-flex flex-wrap align-items-center text-gray-600 gap-5 mb-7"
                                                 data-repeater-item>
                                                <label for="name" class="form-label">Predefined variant
                                                    Value:</label>
                                                <div class="input-group w-200px w-md-300px">
                                                    <input id="name" class="form-control" name="name">
                                                    <button
                                                        class="border border-secondary btn btn-icon btn-flex btn-light-danger"
                                                        data-repeater-delete type="button">
                                                        <i class="ki-duotone ki-trash fs-5"><span
                                                                class="path1"></span><span
                                                                class="path2"></span><span
                                                                class="path3"></span><span
                                                                class="path4"></span><span class="path5"></span></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <!--begin::Button-->
                                <button type="button" data-repeater-create class="btn btn-sm btn-primary">
                                    <i class="ki-duotone ki-plus fs-2"></i>Add another variation
                                </button>
                                <!--end::Button-->

                                <!--end::Form group-->
                            </div>
                        </div>
                    </div>
                </div>

                <!--end::Automation-->
                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <a href="{{redirect()->back()->getTargetUrl()}}"
                       id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_ecommerce_edit_category_submit"
                            class="btn btn-primary">
                        <span class="indicator-label">Save Changes</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                        </span>
                    </button>
                    <!--end::Button-->
                </div>
            </div>
            <!--end::Main column-->
        </form>
    </div>

@endsection
@push('scripts')
    @once
        <script src="{{asset('themeOne/assets/plugins/custom/formrepeater/formrepeater.bundle.js')}}"></script>
    @endonce
    <script type="text/javascript">
        const quillInstances = new Map();

        function initRadioButtons() {
            $(document).find('[name*="is_extra_price"]').on('change', function (e) {
                if ($(this).val() === "1") {
                    $(this).closest('[data-repeater-item]').find('.extra-price').removeClass('d-none');
                } else {
                    $(this).closest('[data-repeater-item]').find('.extra-price').addClass('d-none');
                }
            })
        };
        initRadioButtons();

        function QuillElementsInit(element) {
            // Check if a Quill instance already exists for this element
            if (quillInstances.has(element)) {
                return quillInstances.get(element);
            }

            // Initialize Quill
            var editor = new Quill(element, {
                modules: {
                    toolbar: [
                        ['bold', 'italic', 'underline', 'strike'],
                        ['blockquote'],
                        [{list: 'ordered'}, {list: 'bullet'}],
                        [{size: ['small', false, 'large', 'huge']}],
                        [{header: [1, 2, 3, 4, 5, 6, false]}],
                        [{color: []}, {background: []}],
                        [{font: []}],
                        ['clean']
                    ]
                },
                placeholder: 'Enter description here...',
                theme: 'snow'
            });

            editor.on('text-change', function () {
                element.nextElementSibling.value = editor.root.innerHTML;
            });

            // Store the Quill instance associated with this element
            quillInstances.set(element, editor);

            return editor;
        }

        KTUtil.onDOMContentLoaded(function () {
            $('#variants').repeater({
                initEmpty: $(this).find('#repeated_variants_init_empty').data('repeatedInitEmpty'),
                show: function () {

                    initRadioButtons();
                    QuillElementsInit($(this).find('.variant-description')[0]);
                    $(this).slideDown();
                },
                hide: function (deleteElement) {
                    $(this).slideUp(deleteElement);
                },
            });

            $('#predefinedVariants').repeater({
                initEmpty: $(this).find('#repeated_init_empty').data('repeatedInitEmpty'),
                show: function () {
                    QuillElementsInit($(this).find('#kt_ecommerce_edit_category_description')[0]);
                    $(this).slideDown();
                },
                hide: function (deleteElement) {
                    $(this).slideUp(deleteElement);
                }
            });

            // Initialize Quill for existing elements on DOMContentLoaded
            $('.variant-description, #kt_ecommerce_edit_category_description').each(function () {
                QuillElementsInit(this);
            });

            const submitBtn = document.querySelector('#kt_ecommerce_edit_category_submit');
            submitBtn.addEventListener('click', function (e) {
                submitBtn.setAttribute("data-kt-indicator", "on");
            });

            $('#kt_ecommerce_edit_category_status_select').on('change', function (e) {
                const status = $(this).val();
                if (status == 1) {
                    $('#kt_ecommerce_edit_category_status').removeClass('bg-danger').addClass('bg-success');
                } else {
                    $('#kt_ecommerce_edit_category_status').removeClass('bg-success').addClass('bg-danger');
                }
            }).trigger('change');
        });
    </script>
@endpush
