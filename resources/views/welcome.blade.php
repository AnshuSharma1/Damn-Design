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



    .third{
    background-color: white;
    padding: 50px 15% 70px 15%;
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
  <div class="text-center" style="font-size: 25px; margin: 15px 0 40px 0; color: #1d2649; letter-spacing: 1px; font-family: 'Nunito';">Consectetur adipiscing elit</div>
    <hr style="width: 5%; border-color: black; border-width: 2px; margin: 30px auto;">
  <div class="row">
    <div class="col-md-5">
      <div style="font-size: 25px; text-align: center; font-family: 'Exo'; margin: 20px 0; color: #FF5D5F;">
        Lorem Ipsum
      </div>
      <div style="font-family: 'Nunito'; font-size: 16px;line-height: 25px;">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        <br>
        <span style="display: inline-block; margin-top: 40px; padding-left: 25%;font-size: 17px; font-weight: bold; letter-spacing: 1px; ">
        Dolor Amet consectetur
        </span>
      </div>
    </div>
    <div class="col-md-2 text-center" style="padding-top: 80px;">
      <img src="{{ asset('images/line.png') }}" alt="New York" width="3.1%">
    </div>
    <div class="col-md-5">
      <div style="font-size: 25px; text-align: center; font-family: 'Exo'; margin: 20px 0; color: #FF5D5F;">
        Dolor Amey
      </div>
      <div style="font-family: 'Nunito'; font-size: 16px;line-height: 25px;">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        <br><br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        <br>
        <span style="display: inline-block; margin-top: 40px; padding-left: 25%;font-size: 17px; font-weight: bold; letter-spacing: 1px; ">
        Dolor Amet consectetur
        </span>
      </div>
    </div>
  </div>
</div>

<div class="fourth" style="padding: 70px;">
  <div class="text-center" style="font-size: 25px; margin: 0px 0 60px 0; color: #1d2649; letter-spacing: 0.5px; font-family: 'calibri'; font-style: italic;">Consectetur adipiscing elit quo voluptas</div>
  <div class="row" style="color: black;">
    <div class="col-md-4 text-center">
      <img src="{{ asset('images/pot2.jpeg') }}" alt="New York" width="50%" style="border-radius: 5px;">
      <br>
      <div style="margin-top: 30px; font-family: 'Nunito'; font-size: 16px; letter-spacing: 0.5px; padding: 7px 20%;">
        “I have been extremely pleased with the service that the company provides."
      </div>
    </div>

    <div class="col-md-4 text-center">
      <img src="{{ asset('images/pot2.jpeg') }}" alt="New York" width="50%" style="border-radius: 5px;">
      <br>
      <div style="margin-top: 30px; font-family: 'Nunito'; font-size: 16px; letter-spacing: 0.5px; padding: 7px 20%;">
        “I have been extremely pleased with the service that the company provides."
      </div>
    </div>

    <div class="col-md-4 text-center">
      <img src="{{ asset('images/pot2.jpeg') }}" alt="New York" width="50%" style="border-radius: 5px;">
      <br>
      <div style="margin-top: 30px; font-family: 'Nunito'; font-size: 16px; letter-spacing: 0.5px; padding: 7px 20%;">
        “I have been extremely pleased with the service that the company provides."
      </div>
    </div>

  </div>
  
</div>


@endsection