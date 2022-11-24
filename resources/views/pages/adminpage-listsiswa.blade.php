@extends('layouts/admin')

@section('container')

    <div class="d-flex justify-content-center">
        <h2>LIST AKUN SISWA</h2>
    </div>
    <div class="card">
        @if (isset($list_siswa))
        <div class="card-datatable table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Siswa</th>
                        <th>NISN</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($list_siswa as $ls)    
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $ls->username }}</td>
                        <td>{{ $ls->NISN }}</td>
                        <td>{{ $ls->kelas }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="/adminpage-profile/{{ $ls->id }}'" class="btn btn-primary btn-sm mr-1"><i class="fas fa-edit"></i> Edit</a>
                                <form action="/adminpage-delete/{{ $ls->id }}" method="post">
                                    @method('put')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Anda Yakin Ingin Menghapus Profile Siswa?')">><i class="fas fa-trash" ></i> Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
@endsection