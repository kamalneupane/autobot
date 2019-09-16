@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Create carousels</h3>
            </div>
        <div class="card-body">
            <form action="{{route('carousel.store')}}" class="form" method="Post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Carousel Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="short_desc">Description</label>
                    <input type="text" name="short_desc" class="form-control">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    {{--<input type="file" class="form-control" name="image">--}}
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                            </a>
                        </span>
                        <input id="thumbnail" class="form-control" type="text" name="image">
                    </div>
                    <img id="holder" style="margin-top:15px;max-height:100px;">
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Store</button>
                    </div>
                </div>
            </form>
        </div>
    </div>        
    </div>
@endsection