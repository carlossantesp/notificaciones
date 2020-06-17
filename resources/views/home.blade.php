@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body text-center">
                    <p>Basic notification system with laravel 7</p>
                    <a href="{{ route('messages.create') }}" class="card-link">Send message</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
