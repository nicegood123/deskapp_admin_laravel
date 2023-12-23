<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>DeskApp Admin Laravel</title>

    <!-- Site favicon -->
    @include('partials.favicon')

    <!-- Mobile Specific Metas -->
    @include('partials.metas')

    <!-- Google Font -->
    @include('partials.fonts')
    <!-- CSS -->
    @include('partials.styles')
</head>

<body class="login-page">
    {{-- Login Header --}}
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="/">
                    <img src="{{ asset('assets/vendors/images/deskapp-logo.svg') }}" alt="" />
                </a>
            </div>
            <div class="login-menu">
                <ul>
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-7">
                    <div class="card bg-white box-shadow border-radius-10 pl-20 pr-20">
                        <h4 class="text-center text-primary pt-30 pb-20">Create Account</h4>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label id="name">Name</label>
                                        <input id="name" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" type="text" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label id="email">Email</label>
                                        <input id="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" type="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label id="password">Password</label>
                                        <input id="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            value="{{ old('password') }}" type="password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label id="confirmPassword">Confirm Pasword</label>
                                        <input id="confirmPassword" name="password_confirmation" class="form-control"
                                            type="password">
                                    </div>
                                </div>





                            </div>

                            <div class="row pb-30">
                                <div class="col-12">
                                    <div class="input-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Register
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    @include('partials.scripts')
</body>

</html>
