@extends('layouts.app')

@section('content')
    <div class="conatiner-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Create Blogs</h3>
            </div>
            <div class="card-body">
                <form action="{{route('blog.store')}}" class="form" class="form" method="POST" enctype="mutlipart/form-date">
                {{csrf_field()}}
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
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea name="desc" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Create Blogs</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection