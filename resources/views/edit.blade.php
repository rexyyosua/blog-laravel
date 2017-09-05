@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Blog</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/home/{{$blog->id}}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Judul</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="judul" value="{{ $blog->judul }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Deskripsi</label>

                            <div class="col-md-6">
                            <textarea class="form-control" style="height: 100px" name="deskripsi">{{ $blog->deskripsi }}</textarea>
                            </div>
                        </div>  

                        <input type="hidden" name="_method" value="PUT">


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Edit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
