@extends('layout/main')

@section('title','Mahasiswa SI-M1803')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-15">
        <div class="p-3 mb-2 bg-dark text-white"><h1>Mahasiswa SI-M1803</h1></div>
            
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            <table class="table table-dark">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Npm</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenjang</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Email</th>
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
   