@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card shadow-lg col-md-15" style="width: 120%;">
            <div class="card-header text-white text-center fs-4 fw-bold" style="background-color: #ffc0cb;">
                {{ __('Data Penerbit') }}
            </div>

                <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" arial-label="Close"></button>
                    </div>
                @endif
                <a href="{{ route('penerbit.create') }}" class="btn btn-primary">daftar</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama penerbit</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($penerbit as $data)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{ $data->nama_penerbit }}</td>
                                <td>
                                    <a href="{{ route('penerbit.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('penerbit.show', $data->id) }}" class="btn btn-warning">Show</a>
                                    <form action="{{ route('penerbit.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
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
