@extends('layout/main')

@section('title','Form edit member')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Edit Data member</h1>
            
    <form method="post" action="/students/{{ $students->id }}">
    @method('patch')
    @csrf
        <div class="form-group">
            <label for="Npm">Npm</label>
            <input type="text" class="form-control" id="Npm" placeholder="Masukan Npm" name="Npm" value="{{ $students->Npm }}">
        </div>
        <div class="form-group">
            <label for="Nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="Nama" placeholder="Masukan Nama" name="Nama" value="{{ $students->Nama }}">
        </div>
        <div class="form-group">
            <label for="Jenjang">Jenjang</label>
            <input type="text" class="form-control" id="Jenjang" placeholder="Masukan Jenjang" name="Jenjang" value="{{ $students->Jenjang }}">
        </div>
        <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="text" class="form-control" id="Alamat" placeholder="Masukan Alamat" name="Alamat" value="{{ $students->Alamat }}">
        </div>
        <div class="form-group">
            <label for="Jurusan">Jurusan</label>
            <input type="text" class="form-control" id="Jurusan" placeholder="Masukan Jurusan" name="Jurusan" value="{{ $students->Jurusan }}">
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control" id="Jurusan" placeholder="Masukan Email" name="Email" value="{{ $students->Email }}">
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>

        </div>
    </div>
</div>
@endsection
   