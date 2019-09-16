<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AutoBot') }}</title>

    <!-- Scripts -->
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/custome.css')}}">
    <link rel="stylesheet" href="{{asset('css/main2.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> -->
</head>
<body>
<!-- Toast Popup -->
@if(Session::has('success'))
    <div class="toast bg-success">
        <div class="toast-body text-light">
            {{ Session::get('success') }}
        </div>
    </div>
@endif
@if(Session::has('info'))
    <div class="toast bg-info">
        <div class="toast-body text-light">
            {{ Session::get('info') }}
        </div>
    </div>
@endif
@if(Session::has('warning'))
    <div class="toast bg-danger">
        <div class="toast-body text-light">
            {{ Session::get('warning') }}
        </div>
    </div>
@endif
<!-- End toast popup -->
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Autobot ') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li> -->
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register As Mechanics') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{route('user.profile')}}">Profile</a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <div class="row mr-0">
                @if(Auth::check())
                <div class="col-md-3">
                    <aside class="main-sidebar" id="sidebar-1">
                        <h3 class="title">Dashboard</h3>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading"  >
                                    <a  href="{{route('media')}}">Medias</a>
                                </div>
                            </div>
                            @if(auth()->user()->admin==0)
                            <div class="panel panel-default">
                                <div class="panel-heading"  >
                                        <a  href="{{ route('pages') }}">Pages</a>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"  >
                                    <a href="{{ route('posts') }}">Posts</a>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"  >
                                    <a href="{{ route('tags') }}">Tags</a>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading"  >
                                    <a href="{{ route('carousels') }}">Carousels</a>
                                </div>
                            </div>
                            <!-- <div class="panel panel-default">
                                <a href="{{route('users')}}">Users</a>
                            </div> -->
                            <div class="panel panel-default">
                                <a href="{{route('mechanics')}}">Mechanics</a>
                            </div>
                            <div class="panel panel-default">
                                <a href="{{route('teams')}}">Team</a>
                            </div>
                            <div class="panel panel-default">
                                <a href="{{route('blogs')}}">Blog</a>
                            </div>
                            <div class="panel panel-default">
                                <a href="{{route('contacts')}}">Contact</a>
                            </div>
                            @endif
                            <!-- @if(auth()->user()->admin==1)
                            
                            @endif -->
                        </div>
                    </aside>
                </div>
                @endif
                <div class="col-md-9 p-3">
                    @yield('content')
                 </div>
            </div>
        </main>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="{{ asset('js/app.js') }}"></script>
    <script>
   var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
  </script>
  <!-- CKEditor init -->
  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
  <script>
    $('textarea[name=ce]').ckeditor({
      height: 100,
      filebrowserImageBrowseUrl: route_prefix + '?type=Images',
      filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
      filebrowserBrowseUrl: route_prefix + '?type=Files',
      filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
    });
  </script>
  
  <script>
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/lfm.js')) !!}
  </script>
  <script>
    $('#lfm').filemanager('image', {prefix: route_prefix});
    $('#lfm2').filemanager('file', {prefix: route_prefix});
  </script>
</body>
</html>
