@extends('shared.app')
  
  @section('script')
    @include('_indexJs')
  @endsection

  @section('content')
    @include('shared.menu-bar')
    <div class="container-fluid">
      <div class="col-md-10 col-md-offset-1">
        <h2>Contact</h2>
        <hr/>
        <div class="row">
          <div class="col-md-6">
            <h3>Pricess Cruise</h3>
            <hr/>
            <ul>
              <li>Brunei</li>
              <ul>
                <li>Tel: 673222866</li>
                <li>Tel: 6732228979</li>
                <li>Tel: 6732221747</li>
              </ul>
              <li>Indonesia</li>
              <ul>
                <li>Tel: 62778421351</li>
                <li>Tel: 62216344278</li>
                <li>Tel: 62215673222</li>
              </ul>
              <li>Malaysia</li>
              <ul>
                <li>Tel: 052541244</li>
                <li>Tel: 6052532766</li>
                <li>Tel: 052417100</li>
              </ul>
              <li>Singapore</li>
              <ul>
                <li>Tel: 6569084233</li>
                <li>Tel: 65336911</li>
                <li>Tel: 63035316</li>
              </ul>
              <li>Vietnam</li>
              <ul>
                <li>Tel: 84838239779</li>
                <li>Tel: 84839483477</li>
              </ul>
            </ul>
          </div>
          <div class="col-md-6" >
            <h3>Cunard Line</h3>
            <hr/>
            <ul>
              <li>(800) 468-7752</li>
              <li>(800) 728-6273</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
  @endsection