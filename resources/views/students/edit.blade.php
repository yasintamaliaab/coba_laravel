@extends('layout.main')

@section('title','Form Ubah Mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
            <h1 class="mt-4">Form ubah Mahasiswa</h1>
            <form method="post" action="/students/{{$student->id}}">
            @method('patch')
            @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Input nama" name="nama" value="{{$student->nama}}">
                    @error('nama')
                    <div class="invalid-feedback">{{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="Input nim" name="nim" value="{{$student->nim}}">
                    @error('nim')
                    <div class="invalid-feedback">{{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Input email" name="email" value="{{$student->email}}">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Input jurusan" name="jurusan" value="{{$student->jurusan}}">
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
            </div>
        </div>
    </div>
@endsection