@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Tags</h3>
                <a href="{{route('tag.create')}}" class="btn btn-info"><i class="fa fa-plus">Create Tag</i></a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Tag Name</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @if($tags->count()>0)
                            @foreach($tags as $tag)
                                <tr>
                                    <td>{{ $tag->id }}</td>
                                    <td>{{ $tag->name }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('tag.edit',['id'=>$tag->id])}}" class="btn btn-info"><i class="fa fa-edit">Edit</i></a>
                                            <a href="{{route('tag.delete',['id'=>$tag->id])}}" class="btn btn-danger"><i class="fa fa-trash">Delete</i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="5">No Tags</td>
                            </tr>
                        @endif            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection