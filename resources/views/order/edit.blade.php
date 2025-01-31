@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Order</div>

                <div class="card-body">
                    <form action="{{ route('order.update', $order->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Id Product</label>
                            <select class="form-control" name="id_product">
                                @foreach ($product as $data)
                                <option value="{{ $data->id }}" {{$data->id == $order->id_product ? 'selected' : '' }}>{{ $data->name_product }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" class="form-control" name="quantity" value="{{ $order->quantity }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Order Date</label>
                            <input type="date" class="form-control" name="order_date" value="{{ $order->order_date }}>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Id Customer</label>
                            <select class="form-control" name="id_customer">
                                @foreach ($customer as $data)
                                <option value="{{ $data->id }}" {{$data->id == $order->id_customer ? 'selected' : '' }} >{{ $data->name_customer }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
