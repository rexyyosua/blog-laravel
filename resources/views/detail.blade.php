@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <img src="{{asset('storage/blog/'.$blog->images)}}" alt="gambar {{$blog->judul}}" width="150" height="150">
                    <h3>{{$blog->judul}}</h3>
                    <p>{{$blog->deskripsi}}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
