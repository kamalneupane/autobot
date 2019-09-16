@extends ('layouts.app')
@section('content')
    <div class="container-fluid">
    <div class="card">
        <div class="card-header bg-success">
            <h3>{{$user->id}} Update your Profiles</h3>
        </div>
        <div class="card-body">
            <form action="{{route('user.profile.update',['id'=>$user->id])}}" class="form" enctype="multipart/form-date">
                <div class="form-group">
                    {{csrf_field()}}
                    <div class="form-group">
                            <label for="name">User Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" class="form-control" name="password" >
                    </div>
                    <div class="form-group">
                        <label for="avatar">Avatar</label>
                        {{--<input type="file" class="form-control" name="avatar">--}}
                        <div class="input-group">
                          <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                              <i class="fa fa-picture-o"></i> Choose
                            </a>
                          </span>
                            <input id="thumbnail" class="form-control" type="text" name="avatar" value="">
                        </div>
                        <img id="holder" class="img-thumbnail" style="margin-top:15px;max-height:100px;" src="" alt="">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{ $user->phone }}">
                    </div>
                    <div class="form-group">
                        <label for="experience">Experience</label>
                        <input type="text" class="form-control" name="phone" value="{{ $user->experience }}">
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="phone" value="{{ $user->location }}">
                    </div>
                    <div class="form-group">
                        <label for="company_name">Company Name</label>
                        <input type="text" class="form-control" name="phone" value="{{ $user->company_name }}">
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success px-4" type="submit">Update Profile</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
@endsection