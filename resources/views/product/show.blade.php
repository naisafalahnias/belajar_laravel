@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Product') }}</div>

                <div class="card-body">
                <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Name Product</label>
                            <input type="text" class="form-control" name="name_product" value="{{ $product->name_product }}" disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Merk</label>
                            <input type="text" class="form-control" name="merk" value="{{ $product->merk }}" disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control" name="price" value="{{ $product->price }}" disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Stock</label>
                            <input type="number" class="form-control" name="stock" value="{{ $product->stock }}" disabled>
                        </div>
                        <br>
                        <a href="{{ route('product.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
