@extends('layouts.backoffice')

@section('title')
Dashboard
@endsection
@section('content')

<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-shopbag icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>
                    Products
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ route('product.create') }}" class="btn btn-success">Add product</a>
                    </h5>
                    <div class="table-responsive">
                        <table class="mb-0 table" id="product">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Characteristic</th>
                                    <th>Description</th>
                                    <th>Photo</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->characteristic }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        <img src="{{ asset($item->photo)}}" style="max-width: 10rem;" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ route('product.edit',$item->id) }}" class="btn btn-info">Edit</a>
                                        <form action="{{ route('product.destroy', $item->id)}}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty

                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

<script>
    $(document).ready(function() {
    $('#product').DataTable();
} );
</script>
@endpush