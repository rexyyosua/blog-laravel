@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if(session('msg'))
                        <div class="alert alert-success">
                            <p>{{session('msg')}}</p>
                        </div>
                    @endif
                    <br>
                    <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th><a href="{{'/home/add'}}">Add</a></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($blog as $a)
                        <tr>
                            <td><a href="/home/{{$a->id}}">{{$a->judul}}</a></td>
                            <td>
                                <a href="/home/{{$a->id}}/edit">Edit</a>
                                <a href="/home/{{$a->id}}/delete">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>

                   <center> {{$blog->links()}} </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
