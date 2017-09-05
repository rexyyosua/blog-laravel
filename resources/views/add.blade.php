@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Blog</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/home/" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Judul</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="judul" required autofocus>
                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Deskripsi</label>

                            <div class="col-md-6">
                            <textarea class="form-control" style="height: 100px" name="deskripsi"></textarea>
                            @if ($errors->has('deskripsi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deskripsi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Upload Images</label>
                            <div class="col-md-6">
                            <input type="file" name="featured_img">
                            @if ($errors->has('featured_img'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('featured_img') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <input type="hidden" name="_method" value="POST">


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
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
