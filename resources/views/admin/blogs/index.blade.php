@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Blog</h3>
                <a href="{{route('blog.create')}}" class="btn btn-info"><i class="fa fa-plus">create blog</i></a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Image</td>
                            <td>Name</td>
                            <td>Title</td>
                            <td>Description</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @if($blogs->count()>0)
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $blog->id}}</td>
                                <td> 
                                    <img src="{{$blog->image}}" alt="{{$blog->name}}"style="max-width: 200px;max-height: 100px"> 
                                </td>
                                <td>{{ $blog->name}}</td>
                                <td>{{ $blog->title}}</td>
                                <td>{{ $blog->desc}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('blog.edit',['id'=>$blog->id])}}" class="btn btn-info"><i class="fa fa-edit">Edit</i></a>
                                        <a href="{{route('blog.delete',['id'=>$blog->id])}}" class="btn btn-danger"><i class="fa fa-trash">Delete</i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center"><h3>No Blogs</h3></td>
                            </tr>
                        @endif        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection