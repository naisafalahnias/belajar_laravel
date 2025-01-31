@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data customer') }}</div>

                <div class="card-body">
                <form action="{{ route('customer.update', $customer->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Name Customer</label>
                            <input type="text" class="form-control" name="name_customer" value="{{ $customer->name_customer }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Gender</label>
                            <input type="radio" class="form-check-input" name="gender" value="laki-laki">Laki-Laki 
                            <input type="radio" class="form-check-input" name="gender" value="Perempuan">Perempuan
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Contact</label>
                            <input type="number" class="form-control" name="contact" value="{{ $customer->contact }}">
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
