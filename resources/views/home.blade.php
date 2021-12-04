@extends('layouts.app')

@section('title', config('app.name') . ' | Inicio')
@section('content')
    <div class="container">
        <br>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createPostModal">
            Crear Publicación
        </button>

        @include('post.create')
    </div>
@endsection
