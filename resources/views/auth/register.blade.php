@extends('layouts.auth')

@section('content')
<body>
    <!-- Content -->
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">

                <!-- Register -->
                <div class="card">
                    <div class="card-body">

                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="#" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    <img src="./assets/img/avatars/logoDC.png" alt="image" height="150" width="150">
                                </span>
                            </a>
                        </div>
                        <!-- /Logo -->

                        {{-- <h4 class="mb-2">Adventure starts here 🚀</h4> --}}

                        {{-- REGISTER FORM --}}
                        <form id="formAuthentication" class="mb-3 fv-plugins-bootstrap5 fv-plugins-framework" action="{{url('register')}}" method="POST">
                            @csrf()

                            {{-- USERNAME --}}
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Enter your username" value="{{ old('username') }}" autofocus required>

                                @error('username')
                                <div class="fv-plugins-message-container invalid-feedback" role="alert">
                                    <div>
                                        {{ $message }}
                                    </div>
                                </div>
                                @enderror
                            </div>

                            {{-- NISN --}}
                            {{-- <div class="mb-3">
                                <label for="NISN" class="form-label">NISN</label>
                                <input type="text" class="form-control @error('NISN') is-invalid @enderror" id="NISN" name="NISN" placeholder="Enter your NISN" value="{{ old('NISN') }}" required>
                                
                                @error('NISN')
                                <div class="fv-plugins-message-container invalid-feedback" role="alert">
                                    <div>
                                        {{ $message }}
                                    </div>
                                </div>
                                @enderror
                            </div> --}}

                            {{-- CLASS --}}
                            {{-- <div class="mb-3">
                                <label for="kelas" class="form-label">Kelas</label>
                                <select class="form-select @error('kelas') is-invalid @enderror" id="kelas" name="kelas" value="{{ old('NISN') }}" required>
                                    <option value="1">Kelas 1</option>
                                    <option value="2">Kelas 2</option>
                                    <option value="3">Kelas 3</option>
                                    <option value="4">Kelas 4</option>
                                    <option value="5">Kelas 5</option>
                                    <option value="6">Kelas 6</option>
                                </select>

                                @error('kelas')
                                <div class="fv-plugins-message-container invalid-feedback" role="alert">
                                    <div>
                                        {{ $message }}
                                    </div>
                                </div>
                                @enderror
                            </div> --}}

                            {{-- EMAIL --}}
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                                
                                @error('email')
                                <div class="fv-plugins-message-container invalid-feedback" role="alert">
                                    <div>
                                        {{ $message }}
                                    </div>
                                </div>
                                @enderror
                            </div>

                            {{-- PASSWORD --}}
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">Password</label>
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
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" required>
                                    <label class="form-check-label" for="terms-conditions">
                                        I agree to
                                        <a href="javascript:void(0);">privacy policy & terms</a>
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-warning d-grid w-100">
                                Sign up
                            </button>
                        </form>

                        <p class="text-center">
                            <span>Already have an account?</span>
                            <a href="/login">
                                <span>Sign in instead</span>
                            </a>
                        </p>

                    </div>
                </div>
                <!-- /Register -->
                
            </div>
        </div>
    </div>

@endsection