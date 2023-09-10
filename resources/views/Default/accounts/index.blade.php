@extends('Default.layouts.app')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
        </tr>
        </thead>
        <tbody>
        @foreach($accounts as $account)
            <tr>
                <th scope="row">{{$account['id']}}</th>
                <td>
                    <pre>{{$account['indentation']}} {{$account['name']}}</pre>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
