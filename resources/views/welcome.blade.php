<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            body {
                font-family: 'Comfortaa', sans-serif;
            }
        </style>

    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <h2><b><img src="{{asset('img/logo.png')}}" style="width: 50px">HIEROGLIF</b></h2>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="text-sm text-white dark:text-gray-500 text-decoration-none" style="padding-right: 10px" href="{{ route('login')}}"><button class="btn btn-danger rounded-pill">{{ __('Login') }}</button></a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="text-sm text-white dark:text-gray-500 text-decoration-none" href="{{ route('register') }}"><button class="btn btn-danger rounded-pill">{{ __('Register') }}</button></a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="container d-flex justify-content-center">
            <form class="mb-3 mt-4">
                <div class="form-group">
                    <input type="search" name="search" placeholder="Cek Kata" aria-label="Search" style="width: 800px; height: 150px; background-color:#ebebeb" class="form-control rounded " id="exampleInputEmail1" aria-describedby="emailHelp">
                    {{-- <form action="/" method="GET" >
                        <input class="form-control form-control-sidebar" type="search" name="search" placeholder="Cek Kata" aria-label="Search">
                    </form> --}}
                </div>
                <p></p>
                <div class="col">
                    <button type="submit" style="background-color: width:100px" class="btn btn-danger rounded-pill">Submit
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 20">
                            <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                            <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                          </svg>
                    </button>
                </div>
                <p></p>
                <div class="form-group">
                    @if($words != null)
                        @foreach($words as $row)
                            <textarea name="check"  style="width: 800px; height: 150px; background-color:#ebebeb" class="form-control" id="ceck">
                                {{ $row }}
                            </textarea>
                        @endforeach
                    @endif
                </div>
                <p></p>
            </form>
        </div>
    </body>
</html>
