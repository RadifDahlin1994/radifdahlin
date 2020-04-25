@extends('layout/main')

@section('title','Daftar member')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-15">
            <h1 class="mt-3">Daftar member</h1>
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Npm</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenjang</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">jurusan</th>
                    <th scope="col">email</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>    
                <tbody>
                @foreach( $students as $student )
                    <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $student->Npm }}</td>
                    <td>{{ $student->Nama }}</td>
                    <td>{{ $student->Jenjang }}</td>
                    <td>{{ $student->Alamat }}</td>
                    <td>{{ $student->Jurusan }}</td>
                    <td>{{ $student->Email }}</td>
                    <td>
                    <a href="/students/{{ $student->id }}" class="badge badge-info">Detail</a>
                    </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            
        

            <a href="/students/create" class="btn btn-primary my-3">create</a>

        </div>
    </div>
</div>
@endsection
   