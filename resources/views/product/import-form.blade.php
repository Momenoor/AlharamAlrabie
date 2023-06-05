@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Import Products List
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('product.import') }}" accept-charset="utf-8" enctype="multipart/form-data"
                        method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="file">File</label>
                            <input id="file" type="file" class="form-control @error('file') is-invalid @enderror"
                                name="file" value="{{ old('file') }}" autofocus />
                            @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Import</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
