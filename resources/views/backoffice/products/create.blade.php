@extends('layouts.backoffice')

@section('title')
Add new product
@endsection
@section('content')

<div class="app-main__inner">

    <div class="row">
        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Add New Product</h5>
                    <form class="" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="position-relative form-group">
                            <label for="name">Name</label>
                            <input name="name" id="name" placeholder="name" type="name" value="{{ old('name') }}"
                                class="form-control">
                            @error('name') <div class="text-muted"> {{ $message}}</div> @enderror
                        </div>

                        <div class="position-relative form-group">
                            <label for="name">Characteristic</label>
                            <input name="characteristic" id="characteristic" placeholder="characteristic" type="name"
                                value="{{ old('characteristic') }}" class="form-control">
                            @error('characteristic') <div class="text-muted"> {{ $message}}</div> @enderror
                        </div>

                        <div class="position-relative form-group">
                            <label for="descriptions">Description</label>
                            <textarea name="description" id="description" placeholder="description"
                                class="form-control">{{ old('description') }}</textarea>
                            @error('description') <div class="text-muted"> {{ $message}}</div> @enderror

                        </div>

                        <div class="position-relative form-group">
                            <label for="photo" class="">Photo</label>
                            <input name="photo" id="photo" type="file" class="form-control-file" accept="image/*">
                            @error('photo') <div class="text-muted"> {{ $message}}</div> @enderror
                            <small class=" form-text text-muted">This is some placeholder block-level help text for the
                                above input. It's a bit lighter and easily wraps to a new line.</small>
                        </div>
                        <button class="mt-1 btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection