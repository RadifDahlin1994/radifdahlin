@extends('layout/main')

@section('title','Form Mahasiswa SI-M1803')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Mahasiswa SI-M1803</h1>
            
    <form method="post" action="/students">
    @csrf
        <div class="form-group">
            <label for="Npm">Npm</label>
            <input type="text" class="form-control" id="Npm" placeholder="Masukan Npm" name="Npm" required>
        </div>
        <div class="form-group">
            <label for="Nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="Nama" placeholder="Masukan Nama" name="Nama">
        </div>
        <div class="form-group">
            <label for="Jenjang">Jenjang</label>
            <input type="text" class="form-control" id="Jenjang" placeholder="Masukan Jenjang" name="Jenjang">
        </div>
        <div class="form-group">
            <label for="Alamat">Alamat</label>
            <input type="text" class="form-control" id="Alamat" placeholder="Masukan Alamat" name="Alamat">
        </div>
        <div class="form-group">
            <label for="Jurusan">Jurusan</label>
            <input type="text" class="form-control" id="Jurusan" placeholder="Masukan Jurusan" name="Jurusan">
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control" id="Jurusan" placeholder="Masukan Email" name="Email">
        </div>
        <button type="submit" class="btn btn-primary">create</button>
    </form>

        </div>
    </div>
</div>
@endsection
   