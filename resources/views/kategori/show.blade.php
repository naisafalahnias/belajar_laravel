@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Kategori') }}</div>

                <div class="card-body">
                <form action="{{ route('kategori.update', $kategori->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama kategori</label>
                            <input type="text" class="form-control" name="nama_kategori" value="{{ $kategori->nama_kategori }}" disabled>
                        </div>
                        <br>
                        <a href="{{ route('kategori.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
