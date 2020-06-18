@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Notificaciones no Leidas</div>

                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        @forelse ($unreadNotifications as $unreadNotification)
                        <a href="{{ $unreadNotification->data['link'] }}" class="list-group-item list-group-item-action">
                            <div class="d-flex justify-content-between">
                            <h5 class="mb-1">{{ $unreadNotification->data['text'] }}</h5>
                            <small>{{ $unreadNotification->data['create_day'] }}</small>
                            </div>
                            <p class="mb-1">{{ Str::limit($unreadNotification->data['content']) }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small>Por: {{ $unreadNotification->data['user'] }}</small>
                                <form action="{{ route('notifications.read', $unreadNotification->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-link">
                                        <i class="fas fa-check"></i>
                                    </button>
                                </form>
                            </div>
                        </a>
                        @empty
                        <p class="list-group-item text-center mb-0">No tiene notificaciones pendientes</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Notificaciones Leidas</div>

                <div class="card-body p-0">
                    <div class="list-group list-group-flush">
                        @forelse ($readNotifications as $readNotification)
                        <a href="{{ $readNotification->data['link'] }}" class="list-group-item list-group-item-action">
                            <div class="d-flex justify-content-between">
                            <h5 class="mb-1">{{ $readNotification->data['text'] }}</h5>
                            <small>{{ $readNotification->data['create_day'] }}</small>
                            </div>
                            <p class="mb-1">{{ Str::limit($readNotification->data['content']) }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small>Por: {{ $readNotification->data['user'] }}</small>
                                <form action="{{ route('notifications.destroy', $readNotification->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-link text-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </a>
                        @empty
                        <p class="list-group-item text-center mb-0">No tiene notificaciones pendientes</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection