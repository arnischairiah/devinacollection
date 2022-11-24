@extends('layouts/murid')

@section('container')
<div class="row">
    <div class="col-md-6 col-lg-12 mb-4 order-lg-1 order-2">
        <div class="card bg-white">
            <div class="d-flex align-items-end row">
                <div class="col-8">
                    <div class="card-body">
                        <h2 class="card-title mb-1 text-nowrap">Congratulations {{ $shortName[0] }}</h2>
                        <h6 class="d-block mb-3 text-nowrap">You have saved</h6>
                        <h3 class="card-title text-primary mb-1">Rp. <span id='currency'>{{ $totalSavings }}</span></h3>
                    </div>
                </div>
                <div class="col-4 pt-3 ps-0 text-center">
                    <img src="../../assets/img/illustrations/prize-light.png" width="90" height="140" class="rounded-start" alt="View Sales">
                </div>
            </div>
        </div>
    </div>
</div>
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
<script>
    (function() 
    {
        document.getElementById('currency').innerText = parseInt(document.getElementById('currency').innerText).toLocaleString('id-ID')
    })();
</script>
@endsection