@extends('layouts.app')

@section('content')
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
        </a>
        <div class="" aria-labelledby="">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </nav>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 text-info">Hi {{auth()->user()->name}}</h1>
        <p class="lead">It is our great pleasure to have you on board! A hearty welcome to you!</p>
    </div>
</div>
@endsection
