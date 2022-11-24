@extends('layouts/admin')

@section('container')
<div class="row">
    <div class="col-lg-12">
        <h1 class="h3 mb-4 text-gray-800">Tambah berita</h1>

    <form action="{{ url('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-2">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{old('judul')}}">
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
            <label for="slug">Kategori</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{old('slug')}}">
            @error('slug')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group mt-2">
            <label for="konten">Konten</label>
            <textarea class="form-control" id="konten" rows="4" name="konten">{{old('konten')}}</textarea>
            @error('konten')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <button style="margin-top: 20px;" type="submit" class="btn btn-warning">Tambah</button>
            <a style="margin-top: 20px;" href="/adminpage-dashboard" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
    </div>
</div>
@endsection