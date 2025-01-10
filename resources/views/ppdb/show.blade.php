@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Siswa') }}</div>

                <div class="card-body">
                <form action="{{ route('ppdb.update', $ppdb->id) }}" method="post enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" value="{{ $ppdb->nama_lengkap }}" name="nama_lengkap" disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="{{ $ppdb->jenis_kelamin }}" disabled>Laki-Laki 
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="{{ $ppdb->jenis_kelamin }}" disabled>Perempuan
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Agama</label>
                            <select class="form-control" value="{{ $ppdb->agama }}" name="agama" disabled>
                                <option value="">Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="Protestan">Protestan</option>
                                <option value="Ateis">Ateis</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="textarea" class="form-control" value="{{ $ppdb->alamat }}" name="alamat" disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>No Telp</label>
                            <input type="number" class="form-control" value="{{ $ppdb->telepon }}" name="telepon" disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Asal sekolah</label>
                            <input type="text" class="form-control" value="{{ $ppdb->asal_sekolah }}" name="asal_sekolah" disabled>
                        </div>
                        <br>
                        <a href="{{ route('ppdb.index') }}" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
