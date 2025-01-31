@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Data Genre') }}</div>

                <div class="card-body">
                <form action="{{ route('genre.update', $genre->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Genre</label>
                            <input type="text" class="form-control" name="genre" value="{{ $genre->genre }}">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">simpan perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
