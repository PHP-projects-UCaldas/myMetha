<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>My Metha</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>

<body>
    @include('layouts.app')

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Crear Post
    </button>

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
                        @include('post.create')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Publicar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
