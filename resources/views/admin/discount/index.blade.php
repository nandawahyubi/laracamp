@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card my-5">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <strong>Discount</strong>
                            </div>
                            <div class="col d-flex justify-content-end">
                                <a href="{{ route('admin.discount.create') }}" class="btn btn-primary btn-sm">
                                    Add Discount
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('components.alert')
                        <table class="table table-responsive mt-3">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th>Name</th>
                                    <th class="text-center">Code</th>
                                    <th>Description</th>
                                    <th class="text-center">Percentage</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($discounts as $discount)
                                    <tr class="align-middle">
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $discount->name }}</td>
                                        <td class="text-center">
                                            <span class="badge bg-primary">
                                                {{ $discount->code }}
                                            </span>
                                        </td>
                                        <td>{{ $discount->description }}</td>
                                        <td class="text-center">{{ $discount->percentage }}%</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.discount.edit', $discount->id) }}"
                                                class="btn btn-warning btn-sm fs-6" style="width: 70px; border-radius:25px">
                                                edit
                                            </a>
                                            <form class="d-inline" method="post"
                                                action="{{ route('admin.discount.destroy', $discount->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger py-1 px-2"
                                                    style="width: 70px; border-radius:25px">
                                                    delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-4">No camp registered</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
