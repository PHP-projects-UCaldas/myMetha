@extends('layouts.app')

@section('title', config('app.name').' | Login')
@section('content')
    <link rel="stylesheet" href="css/users/login.css">
    <div class="container-fluid">
        <form method="POST" action="{{ route('login') }}">
            <div class="row no-gutter">
                <!-- The image half -->
                <div class="col-md-6 d-none d-md-flex bg-image"></div>
                <!-- The content half -->
                <div class="col-md-6 bg-light">
                    <div class="login d-flex align-items-center py-5">
                        <!-- Demo content-->
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 col-xl-7 mx-auto">
                                    <h3 class="display-4">My Metha</h3>
                                    <p class="text-muted mb-4">¡Bienvenido al futuro!</p>
                                    <form>
                                        <div class="form-group mb-3">
                                            <input id="inputEmail" type="email" placeholder="Correo electrónico" required=""
                                                autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <input id="inputPassword" type="password" placeholder="Contraseña" required=""
                                                class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Recuérdame') }}
                                            </label>
                                        </div>
                                        <button type="submit"
                                            class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Iniciar
                                            sesión</button>
                                    </form>
                                </div>
                            </div>
                        </div><!-- End -->

                    </div>
                </div><!-- End -->
        </form>
    </div>
    </div>
@endsection
