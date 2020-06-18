@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lista de Post</div>

                <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Body</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($posts as $post)
                          <tr>
                            <td><a href="{{ route('posts.show',$post->id) }}">{{ $post->title }}</a></td>
                            <td>{{ Str::limit($post->body,100) }}</td>
                          </tr>
                        @empty
                          <tr>
                            <td colspan="2">No tiene posts</td>
                          </tr>
                        @endforelse
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection