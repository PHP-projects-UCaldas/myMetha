<!-- Modal -->
<link rel="stylesheet" href="{{ asset('css/users/register.css') }}">
<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalEdit"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalEdit"><b>Editar Perfil: {{ Auth::user()->name }}</b></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {!! Form::open(['route' => ['user.update', Auth::user()], 'method' => 'put']) !!}
            @csrf
            <div class="modal-body">
                <div class="form-group mb-3">
                    {!! Form::text('name', $user->name, ['class' => 'form-control rounded-pill border-0 shadow-sm px-4 text-primary ' . ($errors->has('name') ? 'is-invalid' : null), 'required' => 'required', 'placeholder' => 'Nombre']) !!}
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    {!! Form::text('lastname', $user->lastname, ['class' => 'form-control rounded-pill border-0 shadow-sm px-4 text-primary ' . ($errors->has('lastname') ? 'is-invalid' : null), 'required' => 'required', 'placeholder' => 'Apellido']) !!}
                    @error('lastname')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    {!! Form::email('email', $user->email, ['class' => 'form-control rounded-pill border-0 shadow-sm px-4 text-primary ' . ($errors->has('email') ? 'is-invalid' : null), 'required' => 'required', 'placeholder' => 'Correo electrónico']) !!}
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    {!! Form::password('password', ['class' => 'form-control rounded-pill border-0 shadow-sm px-4 text-primary ' . ($errors->has('password') ? 'is-invalid' : null), 'placeholder' => 'Contraseña']) !!}
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    {!! Form::password('password_confirmation', ['class' => 'form-control rounded-pill border-0 shadow-sm px-4 text-primary', 'placeholder' => 'Confirmar contraseña']) !!}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Guardar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
