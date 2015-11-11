@extends('shared.app')
  

  @section('script')
    @include('_indexJs')
  @endsection

  @section('content')
    @include('shared.menu-bar')
    
    <div class="container-fluid">
      <div class="col-md-10 col-md-offset-1">
        <ol class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li><a href="/booking">Seacrh Cruise Package</a></li>
          <li class="active">Select Cabin</li>
        </ol>
        <hr/>
        @foreach($classes as $class)
        <div class="panel panel-primary">
          <!-- Default panel contents -->
          <div class="panel-heading">{!! $class->class !!} - RM {!! $class->price !!}</div>
          <!-- Table -->
          <?php $count = 0?>
          <table class="table">
            @foreach($cabins as $cabin)
              <?php $checkReserved = false;?>
              @if($reservations != null)
                @foreach($reservations as $reservation)
                  @if($reservation->cruise_cabin == $cabin->id)
                    <? $checkReserved = true; ?>
                  @endif
                @endforeach
              @endif
              @if($cabin->cabinClass_id == $class->cabinClass_id && $checkReserved == false)
                @if($count%5 == 0)
                  <tr>
                @endif
                <?php $count++?>
                <td><a class="cabin" href="/booking/{!! $package_id !!}/{!! $cabin->id !!}">{!! $cabin->cruise_cabin !!}</a></td>
                @if($count%5 == 0)
                  </tr>
                @endif
              @endif
            @endforeach
          </table>
        </div>
        @endforeach
       
      </div>
    </div>
    
  @endsection