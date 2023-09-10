@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('account.store')}}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                </div>
                <div class="form-group mb-3">
                    <label for="parent">Parent Account</label>
                    <select class="form-select" id="parent" name="parent" placeholder="Select Parent">
                        <option value="">Select Parent</option>
                        @foreach ($accounts as $account)
                            <option value="{{$account->id}}">{{$account->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{route('account.index')}}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection
