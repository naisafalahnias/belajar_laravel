@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Product') }}</div>

                <div class="card-body">
                <form action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Name Product</label>
                            <input type="text" class="form-control" name="name_product" value="{{ $product->name_product }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Merk</label>
                            <input type="text" class="form-control" name="merk" value="{{ $product->merk }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control" name="price" value="{{ $product->price }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Stock</label>
                            <input type="number" class="form-control" name="stock" value="{{ $product->stock }}">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">simpan perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
