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
                        <input type="text" data-product-filter="search"
                               class="form-control form-control-solid w-250px ps-14" placeholder="Search Product"/>
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
                                data-placeholder="Status" data-product-filter="status">
                            <option></option>
                            <option value="all">All</option>
                            <option value="published">Published</option>
                            <option value="scheduled">Scheduled</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </label>
                    <!--end::Select2-->
                </div>
                <!--begin::Add product-->
                <a href="{{route('item.create')}}" class="btn btn-primary">Add
                    Item</a>
                <!--end::Add product-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="products_table">
                <!--begin::Table head-->
                <thead>
                <!--begin::Table row-->
                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                    <th class="w-10px pe-2">
                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                            <label>
                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                       data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1"/>
                            </label>
                        </div>
                    </th>
                    <th class="min-w-200px">Product</th>
                    <th class="min-w-100px">Description</th>
                    <th class="min-w-70px">Type</th>
                    <th class="min-w-100px">Price</th>
                    <th class="min-w-100px">Category</th>
                    <th class="min-w-100px">Account</th>
                    <th class="min-w-100px">Status</th>
                    <th class="min-w-100px">Actions</th>
                </tr>
                <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-semibold text-gray-600">
                <!--begin::Table row-->
                @foreach ($items as $item)
                    <tr>
                        <!--begin::Category=-->
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="{{route('item.edit',$item)}}"
                                   class="symbol symbol-50px">
                                <span class="symbol-label"
                                      style="background-image:url({{$item->image}});"></span>
                                </a>
                                <!--end::Thumbnail-->

                            </div>
                        </td>
                        <td>
                            <div>
                                <!--begin::Title-->
                                <a href="{{route('item.edit',$item)}}"
                                   class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                   data-kt-ecommerce-product-filter="product_name">{{$item->name}}</a>
                                <!--end::Title-->
                            </div>
                        </td>
                        <!--end::Category=-->
                        <!--begin::SKU=-->
                        <td class="pe-0">
                            <span class="fw-bold">{{$item->description}}</span>
                        </td>
                        <!--end::SKU=-->
                        <!--begin::Qty=-->
                        <td class="text-end pe-0">
                            <span class="badge badge-light-danger">{{$item->type}}</span>
                        </td>
                        <!--end::Qty=-->
                        <!--begin::Price=-->
                        <td class="text-end pe-0">{{$item->price}}</td>
                        <!--end::Price=-->
                        <!--begin::Rating-->
                        <td class="text-end pe-0">
                            {{$item->category}}
                        </td>
                        <!--end::Rating-->
                        <!--begin::Status=-->
                        <td class="text-end pe-0">
                            <!--begin::Badges-->
                            {{optional($item->account)->name}}
                            <!--end::Badges-->
                        </td>
                        <!--end::Status=-->
                        <!--begin::Status=-->
                        <td class="text-end pe-0" data-order="Inactive">
                            <!--begin::Badges-->
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        <!--end::Status=-->
                        <!--begin::Action=-->
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                               data-kt-menu-trigger="click"
                               data-kt-menu-placement="bottom-end">Actions
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-5 m-0">
																<svg width="24" height="24" viewBox="0 0 24 24"
                                                                     fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path
                                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                        fill="currentColor"/>
																</svg>
															</span>
                                <!--end::Svg Icon--></a>
                            <!--begin::Menu-->
                            <div
                                class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="../../demo22/dist/apps/ecommerce/catalog/edit-product.html"
                                       class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3"
                                       data-kt-ecommerce-product-filter="delete_row">Delete</a>
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
    <!--end::Products-->
@endsection
