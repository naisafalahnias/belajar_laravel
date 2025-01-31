@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Pengguna') }}</div>

                <div class="card-body">
                <form action="{{ route('pengguna.update', $pengguna->id) }}" method="post enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" value="{{ $pengguna->nama }}" name="nama" disabled>
                        </div>
                        <br>
                        <a href="{{ route('pengguna.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
