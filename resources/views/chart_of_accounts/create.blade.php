@extends('layouts.app')
@section('content')
    <form action="{{route('chartofaccounts.store')}}" method="POST">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Add New Account</div>
            </div>
            <div class="card-body">
                @csrf
                <div class="form-group row mb-3">
                    <label for="description" class="col-md-3 col-form-label text-md-right">code</label>
                    <div class="col-md-9">
                        <input id="description" type="text"
                               class="form-control {{ $errors->has('code')?'is-invalid' : '' }}"
                               name="code" value="{{ old('code') }}">
                        @if ($errors->has('code'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('code') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="name" class="col-md-3 col-form-label text-md-right">Name</label>
                    <div class="col-md-9">
                        <input id="name" type="text" class="form-control {{ $errors->has('name')?'is-invalid' : '' }}"
                               name="name" value="{{ old('name') }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="category" class="col-md-3 col-form-label text-md-right">Category</label>
                    <div class="col-md-9">
                        <select name="category" id="category" class="form-select">
                            <option>-</option>
                            @foreach($categories as $category)
                                <option value="{{$category}}">{{$category}}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('category'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('category') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="parent_id" class="col-md-3 col-form-label text-md-right">Parent</label>
                    <div class="col-md-9">
                        <select name="parent_id" id="parent_id" class="form-select">
                            <option>-</option>
                            @foreach($parents as $parent)
                                <option value="{{$parent->id}}">{{$parent->name}}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('parent_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('parent_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="form-group row">
                    <div class="col-9 offset-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
