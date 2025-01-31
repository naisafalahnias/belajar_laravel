@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card shadow-lg col-md-15" style="width: 120%;">
            <div class="card-header text-white text-center fs-4 fw-bold" style="background-color: #ffc0cb;">
                {{ __('Data Transaksi') }}
            </div>

                <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
                    </div>
                @endif
                <a href="{{ route('transaksi.create') }}" class="btn btn-primary mb-3">
                    <i class="bi bi-plus-circle"></i> Tambah
                </a>
                    <table class="table">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Tanggal Transaksi</th>
                                <th scope="col">Buku</th>
                                <th scope="col">Pembeli</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($transaksi as $data)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $data->jumlah }}</td>
                                <td>{{ $data->tanggal_transaksi }}</td>
                                <td>{{ $data->buku->nama_buku }}</td>
                                <td>{{ $data->pembeli->nama_pembeli }}</td>
                                
                                <td>
                                    <form action="{{ route('transaksi.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('transaksi.edit', $data->id) }}" class="btn btn-outline-success">Edit</a>
                                        <a href="{{ route('transaksi.show', $data->id) }}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                    </form>
                                </td> 
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
