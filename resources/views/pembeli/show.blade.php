@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card shadow-lg col-md-15" style="width: 120%;">
            <div class="card-header text-white text-center fs-4 fw-bold" style="background-color: #ffc0cb;">
                {{ __('Edit Data Pembeli') }}
            </div>

                <div class="card-body">
                <form action="{{ route('pembeli.update', $pembeli->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama pembeli</label>
                            <input type="text" class="form-control" name="nama_pembeli" value="{{ $pembeli->nama_pembeli }}" disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="laki-laki" disabled>Laki-Laki 
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan" disabled>Perempuan
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="number" class="form-control" name="telepon" value="{{ $pembeli->telepon }}" disabled>
                        </div>
                        <br>
                        <a href="{{ route('pembeli.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
