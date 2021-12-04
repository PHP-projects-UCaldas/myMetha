@extends('layouts.app')

@section('title', config('app.name').' | Register')
@section('content')
    <link rel="stylesheet" href="css/users/register.css">
    <div class="container-fluid">
        {!! Form::open(['route' => 'register']) !!}
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex bg-image"></div>
            <!-- The content half -->
            <div class="col-md-6 bg-light">
                <div class="register d-flex align-items-center py-5">
                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h3 class="display-4">My Metha</h3>
                                <p class="text-muted mb-4">¡Bienvenido al futuro!</p>
                                <form>
                                    @csrf
                                    <div class="form-group mb-3">
                                        {!! Form::text('name', old('name'), ['class' => 'form-control rounded-pill border-0 shadow-sm px-4 text-primary ' . ($errors->has('name') ? 'is-invalid' : null), 'required' => 'required', 'placeholder' => 'Nombre']) !!}
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        {!! Form::text('lastname', old('lastname'), ['class' => 'form-control rounded-pill border-0 shadow-sm px-4 text-primary ' . ($errors->has('lastname') ? 'is-invalid' : null), 'required' => 'required', 'placeholder' => 'Apellido']) !!}
                                        @error('lastname')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        {!! Form::email('email', old('email'), ['class' => 'form-control rounded-pill border-0 shadow-sm px-4 text-primary ' . ($errors->has('email') ? 'is-invalid' : null), 'required' => 'required', 'placeholder' => 'Correo electrónico']) !!}
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        {!! Form::password('password', ['class' => 'form-control rounded-pill border-0 shadow-sm px-4 text-primary ' . ($errors->has('password') ? 'is-invalid' : null), 'required' => 'required', 'placeholder' => 'Contraseña']) !!}
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        {!! Form::password('password_confirmation', ['class' => 'form-control rounded-pill border-0 shadow-sm px-4 text-primary', 'required' => 'required', 'placeholder' => 'Confirmar contraseña']) !!}
                                    </div>
                                    {!! Form::submit(__('Registrarme'), ['class' => 'btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm']) !!}
                                </form>

                            </div>
                        </div>
                    </div><!-- End -->

                </div>
            </div><!-- End -->
            {!! Form::close() !!}
        </div>
    </div>
@endsection
