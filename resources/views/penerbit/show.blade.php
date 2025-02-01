@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card shadow-lg col-md-15" style="width: 120%;">
            <div class="card-header text-white text-center fs-4 fw-bold" style="background-color: #ffc0cb;">
                {{ __('Edit Data penerbit') }}
            </div>

                <div class="card-body">
                <form action="{{ route('penerbit.update', $penerbit->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama penerbit</label>
                            <input type="text" class="form-control" nama="nama_penerbit" value="{{ $penerbit->nama_penerbit }}" disabled>
                        </div>
                        <br>
                        <a href="{{ route('penerbit.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
