@extends('layout.main')

@section('title','Form Tambah Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
            <h1 class="mt-4">Form tambah Mahasiswa</h1>
            <form method="post" action="/students">
            @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Input nama" name="nama" value="{{old('nama')}}">
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Input nim" name="nim" value="{{old('nim')}}">
                    @error('nim')
                    <div class="invalid-feedback">{{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Input email" name="email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Input jurusan" name="jurusan" value="{{old('jurusan')}}">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
            </div>
        </div>
    </div>
@endsection