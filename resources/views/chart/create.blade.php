@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">Add New Account</div>
        </div>
        <div class="card-body">
            <form action="{{route('chart.store')}}" method="POST">
                @csrf
                <div class="form-group row mb-3">
                    <label for="name" class="col-md-3 col-form-label text-md-right">Name</label>
                    <div class="col-md-9">
                        <input id="name" type="text" class="form-control{{ $errors->has('name')?'is-invalid' : '' }}"
                               name="name" value="{{ old('name') }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="description" class="col-md-3 col-form-label text-md-right">Description</label>
                    <div class="col-md-9">
                        <input id="description" type="text"
                               class="form-control{{ $errors->has('description')?'is-invalid' : '' }}"
                               name="description" value="{{ old('description') }}">
                        @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="type" class="col-md-3 col-form-label text-md-right">Type</label>
                    <div class="col-md-9">
                        <select name="type" id="type" class="form-select">
                            <option>-</option>
                            <option value="income">Income</option>
                            <option value="expense">Expense</option>
                            <option value="cash">Cash</option>
                        </select>

                        @if ($errors->has('type'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('type') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
