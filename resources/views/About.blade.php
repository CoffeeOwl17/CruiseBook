@extends('shared.app')
  
  @section('script')
    @include('_indexJs')
  @endsection

  @section('content')
    @include('shared.menu-bar')
    <div class="container-fluid">
      <div class="col-md-10 col-md-offset-1">
        <h2>About</h2>
        <hr/>
        <p>
        Princess Cruises and its British-based counterpart, the Cunard Line, are two of the largest cruise
        operators in the world, carrying over 1.5 million passengers per year on almost 20 luxury ships.
        Princess Cruises offers more than 115 cruise itineraries that sail to all seven continents and call
        at 350 ports located around the globe, while Cunard focuses on travel in the Atlantic Ocean
        and Mediterranean Sea. Both are owned by Carnival Corporation and are headquartered in
        Valencia, California.
        </p>
      </div>
    </div>
    
  @endsection