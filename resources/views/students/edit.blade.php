@extends('layout/main')

@section('title','Form Ubah Data Mahasiswa')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>
            <form method="post" action="/students/{{$student->id}}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{$student->nama}}" name="nama" placeholder="Masukkan Nama" aria-describedby="emailHelp">
                    @error('nama')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" value="{{$student->nim}}" name="nim" placeholder="Masukkan NIM" aria-describedby="emailHelp">
                    @error('nim')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">

                    <input type="text" class="form-control  @error('email') is-invalid @enderror" value="{{$student->email}}" name="email" placeholder="Masukkan Email" aria-describedby="emailHelp">
                    @error('email')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                    <input type="text" class="form-control  @error('jurusan') is-invalid @enderror" value="{{$student->jurusan}}" name="jurusan" placeholder="Masukkan Nama Jurusan" aria-describedby="emailHelp">
                    @error('jurusan')<div class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data!</button>
            </form>
        </div>
    </div>
</div>

@endsection