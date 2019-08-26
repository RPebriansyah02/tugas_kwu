@extends('layouts.view')

@section('content')
<div class="container">
<div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Assalamu'alaikum Wr.Wb<small>SELAMAT DATANG DI <h3>Identitas - KU</h3></small></h2>
      <div class="clearfix"></div>
    </div>
</div>
<div class="row">
<!-- start of weather widget -->
<div class="col-md-12 col-sm-6 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Prediksi Cuaca<small>Hari Ini</small></h2>
      <ul class="nav navbar-right panel_toolbox">
        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"></a>
        </li>
        <li><a class="close-link"><i class="fa fa-close"></i></a>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <div class="row">
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="weather-icon">
            <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="weather-text">
            <h2><i class="fa fa-map-marker"></i> Kab.Kuningan, Jawa Barat <br><i>Sebagian Berawan</i></h2>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div class="weather-text pull-right">
          <h3 class="degrees">17</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row weather-days">
        <div class="col-sm-2">
          <div class="daily-weather">
            <h2 class="day">Sen</h2>
            <h3 class="degrees">25</h3>
            <canvas id="clear-day" width="32" height="32"></canvas>
            <h5>15 <i>km/h</i></h5>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="daily-weather">
            <h2 class="day">Sel</h2>
            <h3 class="degrees">25</h3>
            <canvas height="32" width="32" id="rain"></canvas>
            <h5>12 <i>km/h</i></h5>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="daily-weather">
            <h2 class="day">Rab</h2>
            <h3 class="degrees">27</h3>
            <canvas height="32" width="32" id="snow"></canvas>
            <h5>14 <i>km/h</i></h5>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="daily-weather">
            <h2 class="day">Kam</h2>
            <h3 class="degrees">28</h3>
            <canvas height="32" width="32" id="sleet"></canvas>
            <h5>15 <i>km/h</i></h5>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="daily-weather">
            <h2 class="day">Jum</h2>
            <h3 class="degrees">28</h3>
            <canvas height="32" width="32" id="wind"></canvas>
            <h5>11 <i>km/h</i></h5>
          </div>
        </div>
        <div class="col-sm-2">
          <div class="daily-weather">
            <h2 class="day">Sab</h2>
            <h3 class="degrees">26</h3>
            <canvas height="32" width="32" id="cloudy"></canvas>
            <h5>10 <i>km/h</i></h5>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

</div>
</div>
@endsection
