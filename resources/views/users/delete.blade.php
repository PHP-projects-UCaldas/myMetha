<!-- Modal -->
<div class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel"><b>¿Desea eliminar el perfil?</b></h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {!! Form::open(['route' => ['user.destroy', Auth::user()], 'method' => 'delete']) !!}
            @csrf
            <div class="modal-body">
                <h5>El usuario {{ Auth::user()->name }} será eliminado</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
