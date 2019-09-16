@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Mechanics</h3>
                <a href="{{route('mechanic.create')}}" class="btn btn-plus"><i class="fa fa-plus">Add new Mechanics</i></a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>name</td>
                            <td>image</td>
                            <td>username</td>
                            <td>email</td>
                            <td>description</td>
                            <td>company_name</td>
                            <td>qualification</td>
                            <td>experience</td>
                            <td>phone</td>
                            <td>location</td>
                            <td>Action</td>
                        </tr>
                        <tbody>
                            @if($mechanics->count()>0)
                                @foreach($mechanics as $mechanic)
                                    <tr>{{$mechanic->id}}</tr>
                                    <tr>{{$mechanic->name}}</tr>
                                    <tr>{{$mechanic->image}}</tr>
                                    <tr>{{$mechanic->username}}</tr>
                                    <tr>{{$mechanic->email}}</tr>
                                    <tr>{{$mechanic->description}}</tr>
                                    <tr>{{$mechanic->company_name}}</tr>
                                    <tr>{{$mechanic->qualification}}</tr>
                                    <tr>{{$mechanic->experience}}</tr>
                                    <tr>{{$mechanic->phone}}</tr>
                                @endforeach
                            @else
                                <tr>
                                    <div class="text-center">
                                    <td colspan="5"><h3>No Mechanics Added</h3></td>
                                    </div>
                                </tr>
                            @endif                    
                        </tbody>
                    </thead>
                </table>
            </div>
        </div>
    </div>
@endsection