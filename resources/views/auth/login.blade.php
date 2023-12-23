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

<body>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="card shadow border-0 border-radius-10 pt-4 pb-5 px-4">
                    <div class="d-flex flex-column">
                        <h4 class="text-center text-primary mb-3">Login To DeskApp</h4>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label id="email">Email</label>
                                        <input id="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" type="email" autofocus>

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
                                            type="password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row pb-10">
                                {{-- <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                        <label class="custom-control-label" for="customCheck1">Remember</label>
                                    </div>
                                </div> --}}

                                <div class="col-12">
                                    @if (Route::has('password.request'))
                                        <div class="forgot-password">
                                            <a href="{{ route('password.request') }}">
                                                Forgot Password?
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Login
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-12 text-center">
                                Don't have an account yet?
                                <a href="{{ route('register') }}">
                                    <span class="text-primary">Register here.</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    @include('partials.scripts')
</body>

</html>
