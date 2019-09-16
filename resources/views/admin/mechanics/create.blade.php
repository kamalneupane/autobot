@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3>Create new Mechanics</h3>
            </div>
        
            <div class="card-body">
                <form action="{{route('mechanic.store')}}" method="POST" class="form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image">image</label>
                        <input type="tet" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="usernmae">UserNmae</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="company_name">Company Name</label>
                        <input type="text" name="company_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="qualification">Qualification</label>
                        <input type="text" name="qualification" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="experience">experience</label>
                        <input type="text" name="experience" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="location">location</label>
                        <input type="text" name="location" class="form-control">
                    </div>
                    <div class="text-center">
                        <input type="submit" value="Store" class="btn btn-primary">
                    </div>    
                </form>
            </div>
        </div>    
    </div>
@endsection