@extends('layouts.app')

@section('content')
{!! Html::script('css/users/register.css') !!}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                    {!! Form::open(['route' => 'register']) !!}
                        @csrf
                        <div class="form-group row">
                            {!! Form::label('name', '{{ __('Nombre') }}', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('name', '{{ old('name') }}', ['class' => 'form-control @error('name') is-invalid @enderror', 'required' => 'required']) !!}
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('lastname', '{{ __('Apellido') }}', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::text('lastname', '{{ old('lastname') }}', ['class' => 'form-control @error('lastname') is-invalid @enderror', 'required' => 'required']) !!}
                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('email', '{{ __('Correo Electrónico') }}', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::email('email', '{{ old('email') }}', ['class' => 'form-control @error('email') is-invalid @enderror', 'required' => 'required']) !!}
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('password', '{{ __('Contraseña') }}', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password', '{{ old('password') }}', ['class' => 'form-control @error('password') is-invalid @enderror', 'required' => 'required']) !!}
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('password-confirm', '{{ __('Nombre') }}', ['class' => 'col-md-4 col-form-label text-md-right']) !!}
                            <div class="col-md-6">
                                {!! Form::password('password-confirm', null, ['class' => 'form-control', 'required' => 'required']) !!}
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {!! Form::submit('{{ __('Register') }}', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
