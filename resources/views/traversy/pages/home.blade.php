@extends('traversy.layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <div class="row">
            <div class="col-12 text-center">
                <h1>{{$title}}</h1>
                <p>This is the laravel application from the "Laravel From Scratch" youtube series</p>
                <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p><a href="/dashboard" class="btn btn-primary btn-lg">Vuexy Dashboard</a></p>
            </div>
        </div>
    </div>
@endsection