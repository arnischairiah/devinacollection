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
                      <i class='bx bx-pen'></i> {{ $data->hobby }}
                    </li>
                    <li class="list-inline-item fw-semibold">
                      <i class='bx bx-map'></i> Kota {{ $data->tempat_lahir }}
                    </li>
                    <li class="list-inline-item fw-semibold">
                      <i class='bx bx-calendar-alt'></i> Joined {{ $data->created_at }}
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-body">
            <h5><b>Edit Profile</b></h5>
            <div class="row">
               <div class="col-lg-6">

                 <form action="/adminpage-update/{{ $data->id }}" method="post">
                   @method('put')  
                   @csrf
                   <div class="form-group mb-2">
                       <i class="fa fa-id-badge"></i> NISN
                       <input class="form-control" name="NISN" placeholder="Input NISN" value="{{ old('NISN', $data->NISN) }}" id="NISN" readonly>
                   </div>
                   <div class="form-group mb-2">
                       <i class="fa fa-user"></i> Full Name
                       <input class="form-control" name="username" placeholder="Input Nama Lengkap" value="{{ old('NISN', $data->username) }}">
                    </div>
                   <div class="form-group mb-2">
                       <i class="fa fa-pen"></i> Hobby
                       <input class="form-control" name="hobby" placeholder="Input Hobby" value="{{ old('NISN', $data->hobby) }}">
                   </div>
                   <div class="form-group mb-2">
                       <i class="fa fa-map-pin"></i> Alamat
                       <input class="form-control uppercase" name="alamat" placeholder="Input Alamat" value="{{ old('NISN', $data->alamat) }}">
                   </div>
                   
                </div>
                <div class="col-lg-6">
                <div class="form-group mb-2">
                    <i class="fa fa-map"></i> Tempat Lahir
                    <input class="form-control uppercase" name="tempat_lahir" placeholder="Input Tempat Lahir" value="{{ old('NISN', $data->tempat_lahir) }}">
                </div>
                <div class="form-group mb-2">
                    <i class="fa fa-calendar"></i> Tanggal Lahir
                    <input class="form-control" type="date" name="tanggal_lahir" placeholder="Input Tanggal Lahir" value="{{ old('NISN', $data->tanggal_lahir) }}">
                </div>
                <div class="form-group mb-2">
                    <i class="fa fa-phone"></i> Nomor HP
                    <input class="form-control" type="number" placeholder="Input Nomor HP" name="nohp" value="{{ old('NISN', $data->nohp) }}">
                </div>   
                <div class="form-group mb-2">
                    <i class="fa fa-id-card-alt"></i> Kelas
                    <select name="kelas" class="form-control">
                        <option value="{{ old('NISN', $data->kelas) }}">==Pilih Kelas==</option>
                        <option value="1">Kelas I SD</option>
                        <option value="2">Kelas II SD</option>
                        <option value="3">Kelas III SD</option>
                        <option value="4">Kelas IV SD</option>
                        <option value="5">Kelas V SD</option>
                        <option value="6">Kelas VI SD</option>
                    </select>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                    <p style="color: red"><i>*Pastikan Data yang anda input benar</i></p>
                    <input type="submit" name="update" class="btn btn-primary" value="Simpan Edit">
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection