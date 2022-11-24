@extends('layouts.auth')

@section('content')
<body>
    <!-- Content -->
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                
                {{-- SUCCESSFUL REGISTRATION ALERT --}}
                @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
                @endif

                <!-- Login -->
                <div class="card">
                    <div class="card-body">

                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="#" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    <img src="./assets/img/avatars/LogoDC.png" alt="image" height="140" width="140">
                                </span>
                            </a>
                        </div>
                        <!-- /Logo -->

                        {{-- <h4 class="mb-2">Selamat Datang di DevinaCollection! 👋</h4> --}}
                        {{-- <p class="mb-4">Please sign-in to your account and start the adventure</p> --}}

                        <form id="formAuthentication" class="mb-3 fv-plugins-bootstrap5 fv-plugins-framework" action="{{url('login')}}" method="POST">
                            @csrf()
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" autofocus required>

                                @error('email')
                                <div class="fv-plugins-message-container invalid-feedback" role="alert">
                                    <div>
                                        {{ $message }}
                                    </div>
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>
                                    <a href="auth-forgot-password-basic.html">
                                        <small>Forgot Password?</small>
                                    </a>
                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" required>
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>

                                @error('password')
                                <div class="fv-plugins-message-container invalid-feedback" role="alert">
                                    <div>
                                        {{ $message }}
                                    </div>
                                </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-warning d-grid w-100" type="submit">Sign in</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <span>New on our platform?</span>
                            <a href="/register">
                                <span>Create an account</span>
                            </a>
                        </p>

                    </div>
                </div>
                <!-- /Login -->
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection