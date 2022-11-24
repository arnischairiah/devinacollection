@extends('layouts/admin')

@section('container')
<!-- Flash Data -->
{!! session('sukses') !!}

<!-- <div class="row">
    <div class="col-12">
        <h1 class="h3 mb-4 text-gray-800">List Berita</h1>

    <a href="/adminpage-editberita" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Berita</a>
    <table class="table mt-4 table-hover table-bordered">
          
            @if(isset($inputberita))
         table -->
       <!-- <table class="table mt-4 table-hover table-bordered">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Sampul</th>
                <th scope="col">Judul</th>
                <th scope="col">Slug</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($inputberita as $row)
                    <tr>
              <th scope="row">{{$loop->iteration}}</th>
                <td><img src="/upload/inpuberita/{{$row->sampul}}" alt="" width="80px" height="80px"></td>
                    <td>{{$row->no}}</td>
                        <td>{{$row->sampul}}</td>
                        <td>{{$row->judul}}</td>
                        <td>{{$row->slug}}</td>
                        <td>{{$row->aksi}}</td>
                        <td width="20%">
                     <div class="btn-group" role="group" aria-label="Basic example">
                       <a href="/inputberita$inputberita/{{$row->id}}/edit" class="btn btn-primary btn-sm mr-1"><i class="fas fa-edit"></i> Edit</a>
                        <form action="/inputberita$inputberita/{{$row->id}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                        </form>
                        </div>
                </td>
                 </tr>
                    @endforeach
                </tbody>
        </table>
        {{$inputberita->links()}}
    @else
        <div class="alert alert-info mt-4" role="alert">
            Anda Belum Mempunyai Data
        </div>
    @endif
    </div>
</div> -->

@foreach ($tampil as $item)
<div class="row">
    <div class="col-lg-12">
        <table class="table">
            <tr>
                <th>judul</th>
            </tr>
            <tr>
                <td></td>
            </tr>
        </table>
    </div>
</div>
@endforeach
@endsection