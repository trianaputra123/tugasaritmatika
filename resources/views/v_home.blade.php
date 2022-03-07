@extends('layout.v_template')
@section('title')

@section('content')

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Info Harga</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class=""></i>
            </div>
            <a href="/infoharga" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Sewa<sup style="font-size: 20px"></sup></h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="/sewa" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Rekap Sewa </h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="/rekapsewa" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Home</h3>

              <p></p>
            </div>
            <div class="icon">
              <i class="ion"></i>
            </div>
            <a href="/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
<center><br><br><br><br>
<img src="{{asset('template')}}/dist/img/www.jpeg" width="200px height="100px" /> <br><br><br>
<font Size="6" face="Algerian">Potretcreative Bali</font> <br>
<font Size="6" face="Algerian"> </font>
</center>
@endsection