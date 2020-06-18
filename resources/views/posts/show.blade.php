@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="card-title m-0">Detalle del Post</h5>
          <a href="{{ route('posts.index') }}" class="btn btn-link">Volver atrás</a>
        </div>

        <div class="card-body">
          <dl class="row">
            <dt class="col-sm-2">Titulo:</dt>
            <dd class="col-sm-10">{{ $post->title }}</dd>
            <dt class="col-sm-12">Contenido: </dt>
            <dd class="col-sm-12">{{ $post->body }}</dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection