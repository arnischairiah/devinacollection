@extends('layouts/admin')

@section('container')
  
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
          <div class="user-profile-header-banner">
            <img src="../../assets/img/pages/profile-banner.png" width="100%" alt="Banner image" class="rounded-top">
          </div>
          <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
            <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
              <img src="../../assets/img/avatars/22.png" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
            </div>
            <div class="flex-grow-1 mt-3 mt-sm-5">
              <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                <div class="user-profile-info">
                  <h4>{{ $data->username }}</h4>
                  <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                    <li class="list-inline-item fw-semibold">
                      <i class='bx bx-pen'></i>{{ $data->hobby }}
                    </li>
                    <li class="list-inline-item fw-semibold">
                      <i class='bx bx-map'></i> Kota {{ $data->tempat_lahir }}
                    </li>
                    <li class="list-inline-item fw-semibold">
                      <i class='bx bx-calendar-alt'></i> Joined On {{ $data->created_at }}
                    </li>
                  </ul>
                </div>
                <a href="/adminpage-editsiswa/{{ $data->id }}" class="btn btn-primary text-nowrap">
                  <i class='bx bx-user-check'></i> Edit Profile
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="cardname" class="col-12">
        <div class="card mb-4">
          <div class="card-body">
            <h6><b>PROFILE</b></h6>
            <ul class="list-unstyled mb-4 mt-3">
              <li class="d-flex align-items-center mb-3"><i class="bx bx-user"></i><span class="fw-semibold mx-2">Full Name:</span><span>{{ $data->username }}</span></li>
              <li class="d-flex align-items-center mb-3"><i class="bx bx-badge"></i><span class="fw-semibold mx-2">NISN:</span><span>{{ $data->NISN }}</span></li>
              <li class="d-flex align-items-center mb-3"><i class="bx bx-map"></i><span class="fw-semibold mx-2">Tempat Lahir:</span> <span>{{ $data->tempat_lahir }}</span></li>
              <li class="d-flex align-items-center mb-3"><i class="bx bx-calendar"></i><span class="fw-semibold mx-2">Tanggal Lahir:</span> <span>{{ $data->tanggal_lahir }}</span></li>
              <li class="d-flex align-items-center mb-3"><i class="bx bx-star"></i><span class="fw-semibold mx-2">Role:</span><span>SISWA</span></li>
              <li class="d-flex align-items-center mb-3"><i class="bx bx-detail"></i><span class="fw-semibold mx-2">Kelas:</span><span>{{ $data->kelas }}</span></li>
            </ul>
            <h6><b>CONTACT</b></h6>
            <ul class="list-unstyled mb-4 mt-3">
              <li class="d-flex align-items-center mb-3"><i class="bx bx-phone"></i><span class="fw-semibold mx-2">Contact:</span> <span>{{ $data->nohp }}</span></li>
              <li class="d-flex align-items-center mb-3"><i class="bx bx-envelope"></i><span class="fw-semibold mx-2">Email:</span> <span>{{ $data->email }}</span></li>
            </ul>
          </div>
        </div>
      </div>
</div>


@endsection


