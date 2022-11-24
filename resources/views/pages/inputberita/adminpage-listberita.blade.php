@extends('layouts/admin')

@section('container')
<!-- Flash Data -->
{!! session('sukses') !!}

<div class="row">
    <div class="col-12">
        <h1 class="h3 mb-4 text-gray-800">List Berita</h1>

        <a href="/adminpage-inputberita" class="btn btn-warning btn-sm"><i class="fas fa-plus"></i> Tambah Berita</a>
        <table class="table mt-4 table-hover table-bordered">

            @if(isset($berita))
            <!-- table -->
            <table class="table mt-4 table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Konten</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($berita as $row)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td><img src="/upload/inpuberita/{{$row->sampul}}" alt="" width="80px" height="80px"></td>
                        <td>{{$row->judul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->konten}}</td>
                        <td width="20%">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="/inputberita/edit/{{$row->id}}" class="btn btn-primary btn-sm mr-1"><i class="fas fa-edit"></i> Edit</a>
                                <form action="/inputberita/hapus/{{$row->id}}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')"><i class="fas fa-trash"></i> Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @else
            <div class="alert alert-info mt-4" role="alert">
                Anda Belum Mempunyai Data
            </div>
            @endif
    </div>
</div>
@endsection