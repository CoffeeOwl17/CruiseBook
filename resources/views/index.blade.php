@extends('shared.app')
  
  @section('script')
    @include('_indexJs')
  @endsection

  <style>
    body { padding-top: 70px; }
  </style>

  @section('content')
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Pricess Cruise</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">Booking</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @if($token != "") 
              <li><a href="./">{!! $nickname !!}</span></a></li>
              <li class="active"><a href="/logout">Logout</a></li>
            @else
              <form class="navbar-form navbar-left" role="search" method="post">
                <button type="submit" class="btn btn-default btn-login">Organization Login</button>
              </form>
              <!-- <li class="active"><a href="" class="btn-login">Organization Login<span class="sr-only">(current)</span></a></li> -->
              <!-- <input type="submit" class="btn-login" /> -->
            @endif

            <!-- <li class="active"><a href="./">Organization Login<span class="sr-only">(current)</span></a></li> -->
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <form>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      
    </form>
  @endsection