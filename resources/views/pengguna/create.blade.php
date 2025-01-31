@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Pengguna') }}</div>

                <div class="card-body">
                <form action="{{ route('pengguna.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
