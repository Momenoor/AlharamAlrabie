@extends('themeOne::layouts.system.app')
@section('content')
    <div class="card card-flush  mt-lg-20">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    {!!  getSvgIcon('icons/duotune/general/gen021.svg','svg-icon-1 position-absolute ms-4')!!}
                    <label>
                        <input type="text" data-category-filter="search"
                               class="form-control form-control-solid w-250px ps-14" placeholder="Search Castegory"/>
                    </label>
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <div class="w-100 mw-150px">
                    <!--begin::Select2-->
                    <label>
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Status" data-category-filter="status">
                            <option></option>
                            <option value="all">All</option>
                            <option value="published">Published</option>
                            <option value="scheduled">Scheduled</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </label>
                    <!--end::Select2-->
                </div>
                <!--begin::Add category-->
                <a href="{{route('category.create')}}" class="btn btn-primary">Add
                    Category</a>
                <!--end::Add category-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="categories_table">
                <!--begin::Table head-->
                <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <label>
                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                       data-kt-check-target="#kt_ecommerce_categories_table .form-check-input"
                                       value="1"/>
                            </label>
                        </div>
                    </th>
                    <th class="min-w-200px">Category</th>
                    <th class="min-w-100px">Description</th>
                    <th class="min-w-70px">Slug</th>
                    <th class="min-w-100px">Variants</th>
                    <th class="min-w-100px">Predefined Variants</th>
                    <th class="min-w-100px">Status</th>
                    <th class="min-w-100px">Actions</th>
                </tr>
                <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-semibold text-gray-600">
                <!--begin::Table row-->
                @foreach ($categories as $category)
                    <tr>
                        <!--begin::Category=-->
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="{{route('category.edit',$category)}}"
                                   class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url('{{asset($category->image)}}');"></span>
                                </a>
                                <!--end::Thumbnail-->

                            </div>
                        </td>
                        <td>
                            <div>
                                <!--begin::Title-->
                                <a href="{{route('category.edit',$category)}}"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-category-filter="category_name">{{$category->name}}</a>
                                <!--end::Title-->
                            </div>
                        </td>
                        <!--end::Category=-->
                        <!--begin::SKU=-->
                        <td class="pe-0">
                            <span class="fw-bold">{!! $category->description !!}</span>
                        </td>
                        <!--end::SKU=-->
                        <!--begin::slug=-->
                        <td class=" pe-0">
                            {{$category->slug}}
                        </td>
                        <!--end::slug=-->
                        <!--begin::Price=-->
                        <td class=" pe-0">{!! $category->variants->pluck('name')->toJson(JSON_UNESCAPED_UNICODE)!!}</td>
                        <!--end::Price=-->
                        <!--begin::Rating-->
                        <td class=" pe-0">
                            {!! $category->predefinedVariants->pluck('name')->toJson(JSON_UNESCAPED_UNICODE)!!}
                        </td>
                        <!--end::Rating-->
                        <!--begin::Status=-->
                        <td class=" pe-0" data-order="status">
                            <!--begin::Badges-->
                            <div class="badge badge-light-success">{{$category->status}}</div>
                            <!--end::Badges-->
                        </td>
                        <!--end::Status=-->
                        <!--begin::Action=-->
                        <td class="">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                               data-kt-menu-trigger="click"
                               data-kt-menu-placement="bottom-end">Actions
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                {!! getSvgIcon('icons/duotune/arrows/arr072.svg','svg-icon svg-icon-5 m-0') !!}
                                <!--end::Svg Icon--></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="{{route('category.edit',$category)}}"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3"
                                       data-kt-ecommerce-category-filter="delete_row"
                                       data-kt-ecommerce-category-id="{{$category->id}}">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                        <!--end::Action=-->
                    </tr>
                @endforeach
                <!--end::Table row-->
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::categories-->
@endsection
@push('scripts')
    <script>
        KTUtil.onDOMContentLoaded(function () {
            document.querySelectorAll('[data-kt-ecommerce-category-filter="delete_row"]').forEach(function (element) {
                element.addEventListener('click', function (e) {
                    e.preventDefault();
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            var id = element.getAttribute('data-kt-ecommerce-category-id');
                            axios.delete('/category/' + id).then(function (response) {
                                if (response.data.success) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Deleted!',
                                        text: 'Record has been deleted.',
                                        toast: true, // This makes it a toast notification
                                        position: 'top-end', // You can adjust the position
                                        showConfirmButton: false, // Hide the confirmation button
                                        timer: 3000 // Auto-close after 3 seconds
                                    });
                                    element.closest('tr').remove();
                                } else {
                                    Swal.fire(
                                        'Error!',
                                        response.data.message,
                                        'error'
                                    );
                                }
                            }).catch(function (error) {
                                console.error(error);
                            })
                        }
                    })
                })
            })
        });
    </script>
@endpush
