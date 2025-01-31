@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Buku</div>

                <div class="card-body">
                    <form action="{{ route('buku.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama Buku</label>
                            <input type="text" class="form-control" name="nama_buku" value="{{ $buku->nama_buku }}" disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga" value="{{ $buku->harga }}" disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" class="form-control" name="stok" value="{{ $buku->stok }}" disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Image</label>
                            <img src="{{ asset('/images/buku/' . $buku->image) }}" width="100" alt="" srcset="">
                            <input type="file" class="form-control" name="image" required disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Penerbit</label>
                            <select class="form-control" name="id_penerbit" disabled>
                                @foreach ($penerbit as $data)
                                <option value="{{ $data->id }}" >{{ $data->nama_penerbit ? 'selected' : ''  }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Tanggal Terbit</label disabled>
                            <input type="date" class="form-control" name="tanggal_terbit" value="{{ $buku->tanggal_terbit }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Genre</label>
                            <select class="form-control" name="id_genre" disabled>
                                @foreach ($genre as $data)
                                <option value="{{ $data->id }}" >{{ $data->genre ? 'selected' : ''  }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <a href="{{ route('buku.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
