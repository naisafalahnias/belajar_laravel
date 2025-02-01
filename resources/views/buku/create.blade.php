@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card shadow-lg col-md-15" style="width: 120%;">
            <div class="card-header text-white text-center fs-4 fw-bold" style="background-color: #ffc0cb;">
                Tambah Data Buku
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
                    <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Buku</label>
                            <input type="text" class="form-control" name="nama_buku">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" class="form-control" name="stok">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Id Penerbit</label>
                            <select class="form-control" name="id_penerbit">
                                @foreach ($penerbit as $data)
                                <option value="{{ $data->id }}" >{{ $data->nama_penerbit }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Tanggal Terbit</label>
                            <input type="date" class="form-control" name="tanggal_terbit">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Id Genre</label>
                            <select class="form-control" name="id_genre">
                                @foreach ($genre as $data)
                                <option value="{{ $data->id }}" >{{ $data->genre }}</option>
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
