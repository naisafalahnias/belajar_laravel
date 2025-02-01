@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card shadow-lg col-md-15" style="width: 120%;">
            <div class="card-header text-white text-center fs-4 fw-bold" style="background-color: #ffc0cb;">
                Edit Data Buku
            </div>
            @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-body">
                    <form action="{{ route('buku.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama Buku</label>
                            <input type="text" class="form-control" name="nama_buku" value="{{ $buku->nama_buku }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga" value="{{ $buku->harga }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" class="form-control" name="stok" value="{{ $buku->stok }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Image</label>
                            <img src="{{ asset('/images/buku/' . $buku->image) }}" width="100" alt="" srcset="">
                            <input type="file" class="form-control" name="image" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Penerbit</label>
                            <select class="form-control" name="id_penerbit">
                                @foreach ($penerbit as $data)
                                <option value="{{ $data->id }}" >{{ $data->nama_penerbit ? 'selected' : ''  }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Tanggal Terbit</label>
                            <input type="date" class="form-control" name="tanggal_terbit" value="{{ $buku->tanggal_terbit }}">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Genre</label>
                            <select class="form-control" name="id_genre">
                                @foreach ($genre as $data)
                                <option value="{{ $data->id }}" >{{ $data->genre ? 'selected' : ''  }}</option>
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
