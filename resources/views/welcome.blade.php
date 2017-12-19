@extends('layouts.layout')

@section('Style')
  #jumbo {
    background: url("{{ asset('images/work5.jpeg') }}") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    opacity:0.84;
    height: 100%;
    }

  #head2{
      font-family: Impact ; 
      color: #555555;
      font-size: 36px;
      letter-spacing: 4px; 
  }

  #myCarousel2{
      background: #1b1c1c;
      color: white; 
      padding: 100px 0;
      font-family: 'Nunito';
      letter-spacing: 1px;
      font-size: larger;
    }

    
@endsection

@section('content')
<div id="jumbo" style="padding: 130px 60px 200px 60px;color: white;  font-family: 'Dosis', sans-serif; font-size: larger;" class="text-center">
    <div class="row">
      <div class="col-md-3 text-left">
        <h3 style="font-size: 35px; font-family: 'Raleway', sans-serif; font-weight: bold; letter-spacing: 2px;">Lorem Ipsum Dolor</h3>
        <div style="margin-top: 30px; color: #ffe5f3; letter-spacing: 1px;">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
          <br><br>
           Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
</div>

<div id="first" class="row text-center" style="padding: 50px 50px 80px 50px;">
  <div class="col-md-8 col-md-offset-2">
    <h3 style="font-family: 'Dosis'; color: black; font-size: 35px;">
      Perspiciatis unde,&nbsp omnis-iste natus
    </h3>
    <hr style="width: 10%; border-color: #FF5D5F; border-width: 2px; margin: 30px auto;">
    <div style="color: black; font-family: 'Nunito'; padding: 0 100px;margin-bottom: 20px; font-size: 15px;">
      Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum.
    </div>
    <div style="color: #353434;font-size: 17px; font-weight: bold; font-style: italic; margin-bottom: 20px;">
      "Consequatur vel illum qui dolorem eum fugiat quo voluptas nulla pariatur"
    </div>
    <br>
    <a href="#" style="padding: 18px 40px; background-color: #FF5D5F; color: white; border-radius: 50px; font-size: 16px; font-weight: bold; letter-spacing: 2px;">
      CLICK HERE
    </a>
  </div>
</div>

<div id="second" style="margin-bottom: 100px; ">
  <div class="row">
    <div style="margin-left: -60px; ">
      <div class="col-md-3 col-md-offset-2 text-right">
        <img src="{{ asset('images/work1.jpg') }}" alt="New York" width="80%">
      </div>
      <div class="col-md-3 text-left">
        <img src="{{ asset('images/pot2.jpeg') }}" alt="New York" width="80%" style="padding-left: 12px;">
      </div>
      <div class="col-md-3">
        <img src="{{ asset('images/work3.jpeg') }}" alt="New York" width="80%" style="margin-left: -57px;">
      </div>
      <div class="col-md-3 col-md-offset-2 text-right" style="margin-top: -70px;">
        <img src="{{ asset('images/r1.jpeg') }}" alt="New York" width="80%">
      </div>
      <div class="col-md-3 text-left" style="margin-top: 10px;">
        <img src="{{ asset('images/r4.jpeg') }}" alt="New York" width="80%" style="padding-left: 12px;">
      </div>
      <div class="col-md-3" style="margin-top: -70px;">
        <img src="{{ asset('images/pot2.jpeg') }}" alt="New York" width="80%" style="margin-left: -57px;">
      </div>
    </div>
  </div>
</div>

<div class="third">
  <div class="row">
    <div class="col-md-6">
      
    </div>
    <div class="col-md-6">
      
    </div>
  </div>
</div>

<div>
  <div id="myCarousel2" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel2" data-slide-to="1"></li>
      <li data-target="#myCarousel2" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner row text-center" >
      <div class="item active">
        <div class="col-md-8 col-md-offset-2 text-left" style="padding: 0 20px;">
            “I have been extremely pleased with the service that Oyster provides. I was impressed by their ability to manage complex processes within limited time, without compromising the quality of the deliverable.”
            <div style="margin-top: 30px;color: #D8EDF3">Soria Bendoumia, Marketing Communications Manager, GE</div>
            <hr style="width: 57%;" class="pull-left">
        </div>
      </div>

      <div class="item ">
        <div class="col-md-8 col-md-offset-2 text-left" style="padding: 0 20px;">
            “I have been extremely pleased with the service that Oyster provides. I was impressed by their ability to manage complex processes within limited time, without compromising the quality of the deliverable.”
            <div style="margin-top: 30px;color: #D8EDF3">Soria Bendoumia, Marketing Communications Manager, GE</div>
            <hr style="width: 57%;" class="pull-left">
        </div>
      </div>

      <div class="item">
        <div class="col-md-8 col-md-offset-2 text-left" style="padding: 0 20px;">
            “I have been extremely pleased with the service that Oyster provides. I was impressed by their ability to manage complex processes within limited time, without compromising the quality of the deliverable.”
            <div style="margin-top: 30px;color: #D8EDF3">Soria Bendoumia, Marketing Communications Manager, GE</div>
            <hr style="width: 57%;" class="pull-left">
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
      <span  class="caro">
      <i class="fa fa-chevron-left chevron" aria-hidden="true"></i>
      <span class="sr-only" >Previous</span>
      </span>
    </a>
    <a class="right carousel-control" href="#myCarousel2" data-slide="next">
      <span class="caro">
      <i class="fa fa-chevron-right chevron" aria-hidden="true"></i>
      <span class="sr-only">Next</span>
      </span>
    </a>
  </div>
</div>
@endsection