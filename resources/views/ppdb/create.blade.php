@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Data Peserta') }}</div>

                <div class="card-body">
                <form action="{{ route('ppdb.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="laki-laki">Laki-Laki 
                            <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">Perempuan
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Agama</label>
                            <select class="form-control" name="agama">
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
                            <input type="textarea" class="form-control" name="alamat">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="number" class="form-control" name="telepon" value="">
                        </div>
                        <br>
                        <div class="form-group">
                            <label>Asal sekolah</label>
                            <input type="text" class="form-control" name="asal_sekolah" value="">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
