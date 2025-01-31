@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Product') }}</div>

                <div class="card-body">
                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name Product</label>
                            <input type="text" class="form-control" name="name_product">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Merk</label>
                            <input type="text" class="form-control" name="merk">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control" name="price">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Stock</label>
                            <input type="number" class="form-control" name="stock">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
