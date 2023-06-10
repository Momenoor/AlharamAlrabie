@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            Chart of Accounts
        </div>
        <div class="card-body">
            <table class="table table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($accounts as $account)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $account->name }}</td>
                        <td>{{ $account->type }}</td>
                        <td>{{ $account->description }}</td>
                        <td>
                            <a href="{{ route('chart.edit', $account) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ route('chart.destroy', $account) }}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
