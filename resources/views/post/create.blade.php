<!-- Modal -->
<form action="{{ route('post.store') }}" method="POST">
    @csrf
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear Post</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md col-md-offset-2">
                                <div class="form-group">
                                    <textarea class="form-control" name="post_content" id="post_content" cols="30"
                                        rows="10" placeholder="Contenido del Post">
                                                {{ old('post_content') }}
                                            </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Publicar</button>
                </div>
            </div>
        </div>
    </div>
</form>
