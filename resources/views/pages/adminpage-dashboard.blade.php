@extends('layouts/admin')

@section('container')
<div class="row">
    @foreach ($berita as $row)
    <div class="col-lg-6 gap-2">
        <div class="card mb-4">
            <div class="card-body">
                <img src="/upload/inputberita/{{$row->sampul}}" class="card-img-top" alt="..."></a>
                <h5 class="card-title">{{ $row->judul }}</h5>
                <div class="card-subtitle text-muted mb-3">{{ $row->slug }}</div>
                <p class="card-text"><small class="text-muted">{{$row->created_at->diffForHumans()}}</small></p>
                <a href="javascript:void(0)" class="btn btn-outline-primary card-link">Selengkapnya</a>
            </div>
        </div>
    </div>
        @endforeach
    </div>
@endsection