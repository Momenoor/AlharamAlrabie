@extends('themeOne::layouts.system.app')
@section('content')
    <div class="d-flex flex-column text-danger mt-lg-20">
        <div class="d-flex justify-content-center mb-5">
            <div class=" fs-4tx badge badge-lg badge-danger pe-20 ps-20 pt-5 pb-5">Our Menu</div>
        </div>
        @foreach ($products as $category => $subProduct)
            <div class="d-flex mb-10 align-items-center">
                <div class="flex-grow-1 ">
                    <div class="v-line bg-danger"></div>
                </div>
                <div class="flex-shrink-0 fs-2tx pe-3 ps-3">{{$category}}</div>
                <div class="flex-grow-1">
                    <div class="v-line bg-danger"></div>
                </div>
            </div>
            <div class="row">
                @foreach ($subProduct as $product)
                    <div class="col-lg-6 col-md-12 mb-20">
                        <div class="d-flex gap-5">
                            <div class="flex-shrink-0 pe-2 ps-2">
                                <img src="https://dummyimage.com/80x80/000/fff" alt="">
                            </div>
                            <div class="flex-grow-1 flex-column">
                                <h4 class="d-flex justify-content-between mb-2">
                                    <div>
                                        {{$product->name}}
                                    </div>
                                    <div class="min-w-65px">
                                        {{$product->price}} AED
                                    </div>
                                </h4>
                                <div class="text-justify text-muted">
                                      {{$product->description}}
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        @endforeach
    </div>

@endsection
