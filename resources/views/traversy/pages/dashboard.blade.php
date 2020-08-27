@extends('traversy.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <a href="/traversy/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>Your Blog Posts</h3>
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            @foreach($posts as $post)
                            <tr>
                            <th>{{$post->title}}</th>
                            <th><a href="/traversy/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></th>
                            <th></th>
                            </tr>
                            @endforeach
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
