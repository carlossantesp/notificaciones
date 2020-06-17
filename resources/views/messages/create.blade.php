@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Message</div>

                <div class="card-body">
                    <form action="{{ route('messages.store') }}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label for="receiver_id">Receiver</label>
                        <select name="receiver_id" id="receiver_id" class="custom-select @error('receiver_id') is-invalid @enderror">
                          <option value="">-Select-</option>
                          @foreach ($receivers as $receiver)
                              <option value="{{ $receiver->id }}">{{ $receiver->name }}</option>
                          @endforeach
                        </select>
                        @error('receiver_id')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" id="content" cols="30" class="form-control @error('content') is-invalid @enderror" placeholder="Typing message"></textarea>
                        @error('content')
                          <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection