@extends('layouts.app')


@section('content')
 <div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Team</h3>
            <a href="{{route('team.create')}}" class="btn btn-info"><i class="fa fa-plus">create team</i></a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Name</td>
                        <td>Image</td>
                        <td>Description</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    @if($teams->count()>0)
                    @foreach($teams as $team)
                        <tr>
                            <td>{{ $team->id}}</td>
                            <td>{{ $team->name}}</td>
                            <td>
                                <img src="{{ $team->image }}" alt="{{ $team->name }}" style="max-width:100px;max-height:100px">
                            </td>
                            <td>{{ $team->desc}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{route('team.edit',['id'=>$team->id])}}" class="btn btn-info"><i class="fa fa-edit">Edit</i></a>
                                    <a href="{{route('team.delete',['id'=>$team->id])}}" class="btn btn-danger"><i class="fa fa-trash">Delete</i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="5"><h3>No Team</h3></td>
                        </tr>
                    @endif                            
                </tbody>
            </table>
        </div>
    </div>
 </div>

@endsection