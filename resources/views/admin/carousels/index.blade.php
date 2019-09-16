@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Carousel</h3>
                <a href="{{route('carousel.create')}}" class="btn btn-info"><i class="fa fa-plus">Create new Carousel</i></a>
            </div>
            <div class="card-body">
                <table class="table"> 
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Title</td>
                            <td>Short Description</td>
                            <td>Image</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @if($carousels->count()>0)
                            @foreach($carousels as $carousel)
                                <tr>
                                    <td>{{ $carousel->id }}</td>
                                    <td>{{ $carousel->title }}</td>
                                    <td>{{ $carousel->short_desc }}</td>
                                    <td>
                                        <img src="{{ $carousel->image }}"  alt="{{ $carousel->image }}" style="max-width: 400px;max-height: 175px" >
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{route('carousel.edit',['id'=>$carousel->id])}}" class="btn btn-info"><i class="fa fa-edit">Edit</i></a>
                                            <a href="{{route('carousel.delete',['id'=>$carousel->id])}}" class="btn btn-danger">
                                                <i class="fa fa-trash">Delete</i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center"><h3>No Carousel</h3></td>
                            </tr>
                        @endif    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection