<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<div class="container">
    <div class="row">
        <div class="col-md col-md-offset-2">
                <div class="form-group">
                    <textarea class="form-control" name="post_content" id="post_content" cols="30" rows="10"
                        placeholder="Contenido del Post">
                            {{ old('post_content') }}
                        </textarea>
                </div>
        </div>
    </div>
</div>
