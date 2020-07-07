@extends('layout/main')

@section('title','Detail Mahasiswa')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Detail Mahasiswa</h1>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$student -> nama}}</h5>
                    <p class="card-subtitle my-3 ">{{$student -> nim}}</p>
                    <p class="card-subtitle my-3 ">{{$student -> email}}</p>
                    <p class="card-subtitle my-3 ">{{$student -> jurusan}}</p>
                    <a href="{{$student->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="/students/{{$student->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/students">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection