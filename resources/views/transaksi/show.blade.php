@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card shadow-lg col-md-15" style="width: 120%;">
            <div class="card-header text-white text-center fs-4 fw-bold" style="background-color: #ffc0cb;">
                Edit Data Transaksi
            </div>

                <div class="card-body">
                    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input type="number" class="form-control" name="jumlah" value="{{ $transaksi->jumlah }}" disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tanggal_transaksi" value="{{ $transaksi->tanggal_transaksi }}" disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Buku</label>
                            <select class="form-control" name="id_buku" disabled>
                                @foreach ($buku as $data)
                                <option value="{{ $data->id }}" {{$data->id == $transaksi->id_buku ? 'selected' : '' }} >{{ $data->nama_buku }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Pembeli</label>
                            <select class="form-control" name="id_pembeli" disabled>
                                @foreach ($pembeli as $data)
                                <option value="{{ $data->id }}" {{$data->id == $transaksi->id_pembeli ? 'selected' : '' }}>{{ $data->nama_pembeli }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <a href="{{ route('transaksi.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
