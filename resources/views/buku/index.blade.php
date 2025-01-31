@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg col-md-15" style="width: 120%;">
                <div class="card-header text-white text-center fs-4 fw-bold" style="background-color: #ffc0cb;">
                    {{ __('Data Buku') }}
                </div>

                <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
                    </div>
                @endif
                <a href="{{ route('buku.create') }}" class="btn btn-primary mb-3">
                    <i class="bi bi-plus-circle"></i> Tambah
                </a>
                    <table class="table">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Buku</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Image</th>
                                <th scope="col">Penerbit</th>
                                <th scope="col">Tanggal Terbit</th>
                                <th scope="col">Genre</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($buku as $data)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $data->nama_buku }}</td>
                                <td>{{ $data->harga }}</td>
                                <td>{{ $data->stok }}</td>
                                <td>
                                    <img src="{{ asset('/images/buku/' . $data->image) }}" width="100" alt="" srcset="">
                                </td>
                                <td>{{ $data->penerbit->nama_penerbit ?? 'Tidak Ada'}}</td>
                                <td>{{ $data->tanggal_terbit }}</td>
                                <td>{{ $data->genre->genre ?? 'Tidak Ada'}}</td>
                                
                                
                                <td>
                                    <form action="{{ route('buku.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('buku.edit', $data->id) }}" class="btn btn-outline-success">
                                            <i class="bi bi-pencil-square"></i> Edit
                                        </a>
                                        <a href="{{ route('buku.show', $data->id) }}" class="btn btn-outline-warning">
                                            <i class="bi bi-pencil-square"></i> Show
                                        </a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah Anda Yakin?')">
                                            <i class="bi bi-pencil-square"></i> Delete
                                        </button>
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
