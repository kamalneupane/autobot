@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Create New Post</h3>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('post.store')}}" method="post" class="form">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="category">Select Category:</label>
                    <select name="category_id" id="category">
                        @foreach($pages as $page)
                            <optgroup label="{{ $page->title }}">
                                @foreach($categories as $category)
                                    @if($category->page_id == $page->id)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </optgroup>
                        @endforeach
                        {{--@foreach($categories as $categories)--}}
                            {{--<option value="{{ $categories->id }}">--}}
                                {{--{{ $categories->name }}--}}
                            {{--</option>--}}
                        {{--@endforeach--}}
                    </select>    
                </div>
                <div class="form-group">
                    <label for="tags">Select Tags</label><br>
                    @foreach($tags as $tag)
                        <label>
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tag->name }}
                        </label>
                    @endforeach
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success px-4" type="submit">Store Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection