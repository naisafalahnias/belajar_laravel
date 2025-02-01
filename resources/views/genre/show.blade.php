@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card shadow-lg col-md-15" style="width: 120%;">
            <div class="card-header text-white text-center fs-4 fw-bold" style="background-color: #ffc0cb;">
                {{ __('Edit Data Genre') }}
            </div>

                <div class="card-body">
                <form action="{{ route('genre.update', $genre->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Genre</label>
                            <input type="text" class="form-control" name="genre" value="{{ $genre->genre }}" disabled>
                        </div>
                        <br>
                        <a href="{{ route('genre.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
