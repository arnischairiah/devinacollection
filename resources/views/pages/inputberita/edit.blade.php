@extends('layouts/admin')

@section('container')
<div class="row">
    <div class="col-lg-12">
        <h1 class="h3 mb-4 text-gray-800">Edit berita</h1>

    <form action="/inputberita/update/{{$beritaId}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row"></div>
            <div class="col md-2">
                <img src="/upload/inputberita/{{ $inputberita->sampul }}" width="50%" height="150px" class="mt-2" alt="">
            </div>
            <div class="col md-10"><div class="form-group mt-2">
            <label for="judul">Edit Berita</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{old('judul') ? old('judul') : $inputberita->judul}}">
            @error('judul')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="sampul">Sampul</label>
            <input type="file" class="form-control" id="sampul" name="sampul">
            @error('sampul')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>   
        <div class="form-group mt-2">
            <label for="konten">Kategori</label>
            <textarea class="form-control" id="slug" name="slug">{{old('slug') ? old('slug') : $inputberita->slug}}</textarea>
            @error('konten')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="konten">Konten</label>
            <textarea class="form-control" id="konten" rows="10" name="konten">{{old('konten') ? old('konten') : $inputberita->konten}}</textarea>
            @error('konten')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
            <button style="margin-top: 20px;" type="submit" class="btn btn-primary">Edit</button>
            <a style="margin-top: 20px;" href="/adminpage-listberita" class="btn btn-secondary">Kembali</a>
    </form>
    </div>
</div>
@endsection