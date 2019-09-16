@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Update Tag</h3>
            </div>
            <div class="card-body">
                <form action="{{route('tag.update',['id'=>$tag->id])}}" class="form" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Tag Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter tag name" value={{$tag->name}}>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success px-4" type="submit">Update Tag</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection