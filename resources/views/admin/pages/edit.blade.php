@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h3>Update Page</h3>
            </div>
            <div class="card-body">
                <form action="{{route('page.store',['id'=>$page->id])}}" class="form" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" placeholder="Page Title" class="form-control" value={{ $page->title}}>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success px-4" type="submit">Update Page</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection