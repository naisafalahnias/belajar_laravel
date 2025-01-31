@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Pembeli') }}</div>

                <div class="card-body">
                <form action="{{ route('pembeli.update', $pembeli->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama pembeli</label>
                            <input type="text" class="form-control" name="nama_pembeli" value="{{ $pembeli->nama_pembeli }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="laki-laki">Laki-Laki 
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="number" class="form-control" name="telepon" value="{{ $pembeli->telepon }}">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
