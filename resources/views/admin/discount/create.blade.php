@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card my-5">
                    <div class="card-header">
                        Insert a new discount
                    </div>
                    <div class="card-body">
                        @include('components.alert')
                        <form action="{{ route('admin.discount.store') }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="" class="form-label mt-2 mb-1">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="form-label mt-2 mb-1">Code</label>
                                <input type="text" name="code" class="form-control @error('code') is-invalid @enderror"
                                    value="{{ old('code') }}" required>
                                @error('code')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="form-label mt-2 mb-1">Description</label>
                                <textarea name="description" cols="0" rows="3"
                                    class="form-control @error('description') is-invalid @enderror" style="resize: none;">
                                    {{ old('description') }}
                                </textarea>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="" class="form-label mt-2 mb-1">Discount Percentage</label>
                                <input type="number" name="percentage"
                                    class="form-control @error('percentage') is-invalid @enderror" min="1" max="100"
                                    value="{{ old('percentage') }}" required>
                                @error('percentage')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
