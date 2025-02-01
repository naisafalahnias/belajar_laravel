@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card shadow-lg col-md-15" style="width: 120%;">
            <div class="card-header text-white text-center fs-4 fw-bold" style="background-color: #ffc0cb;">
                {{ __('Tambah Data Genre') }}
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
                <form action="{{ route('genre.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Genre</label>
                            <input type="text" class="form-control" name="genre">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
