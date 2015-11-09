@extends('shared.app')
  
  @section('script')
    @include('admin._AdminHomeJs')
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
            <li class="active"><a href="#">Add Cruise</a></li>
            <li><a href="#">Edit Cruise</a></li>
            <li><a href="#">View Cruise</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right admin-portal">
            <li><a class="nickname">Booking</a></li>
            <li class="active"><a class="logout" href="">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <form>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      
    </form>
  @endsection