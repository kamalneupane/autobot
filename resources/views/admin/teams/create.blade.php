@extends('layouts.app')


@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Create Team</h3>
            </div>
            <div class="card-body">
                <form action="{{route('team.store')}}" class="form" method="POST">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Your team member name">
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
                        <label for="desc">Short Description</label>
                        <textarea name="desc" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-gorup">
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Store</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection