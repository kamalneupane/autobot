@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Pages</h3>
                <a href="{{route('page.create')}}" class="btn btn-info"><i class="fa fa-plus">Add new page</i></a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Pages Title</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                    @if($pages->count()>0)
                        @foreach($pages as $page)
                        <tr>
                            <td>{{ $page->id }}</td>
                            <td>{{ $page->title }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{route('page.edit',['id'=>$page->id])}}" class="btn btn-info"><i class="fa fa-edit">Edit</i></a>
                                    <a href="{{route('page.delete',['id'=>$page->id])}}" class="btn btn-danger"><i class="fa fa-trash">Delete</i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    @else
                            <tr>
                                <td class="text-center" colspan="5">No Pages</td>
                            </tr>
                    @endif        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection