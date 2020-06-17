@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
					<h5 class="card-title m-0">Notificacion</h5>
            		<a href="{{ route('notifications.index') }}" class="btn btn-link">Volver atrás</a>
				</div>

                <div class="card-body">
					<dl class="row">
						<dt class="col-sm-3">Enviado por:</dt>
						<dd class="col-sm-9">{{ $message->sender->name }}</dd>
						<dt class="col-sm-3">Recibido por:</dt>
						<dd class="col-sm-9">{{ $message->receiver->name }}</dd>
						<dt class="col-sm-12">Contenido del mensaje: </dt>
						<dd class="col-sm-12">{{ $message->content }}</dd>
					</dl>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection