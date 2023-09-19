@extends('themeOne::layouts.system.app')
@section('content')
    <div class="d-flex flex-column">
        <div class="d-flex justify-content-center">
            Our Menu
        </div>

        <div class="d-flex flex-row-fluid">
            <div class="flex-grow-1">
                <hr class="text-primary">
            </div>
            <div class="flex-shrink-0 pe-2 ps-2">Category</div>
            <div class="flex-grow-1">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="d-flex">
                       <div class="flex-shrink-0 pe-2 ps-2">
                        <img src="{{asset('themeOne/assets/media/svg/food-icons/coffee.svg')}}" alt="">
                    </div>
                    <div class="flex-grow-1">
                        desctription
                    </div>
                    <div>
                        12 / 15 AED
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    </div>

@endsection
