@extends('layouts.layout')

@section('Style')
	#jumbo {
    background: url("{{ asset('images/work3.jpeg') }}") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 100%;
    }

    .layer{
    	background-color: #000000;
    	opacity: 0.6;
    	position: relative;
    	top :0;
    	width : 100%;
    	padding-top: 150px;
    	padding-bottom:330px;

	}

	.first{
    background-color: white;
    padding: 50px 15% 70px 15%;
    }

@endsection


@section('content')
<div id="jumbo" style=" color: white;  font-family: 'Dosis', sans-serif; font-size: larger;" class="text-center">
    <div class="layer">
	   	<h1 style="font-size: 48px; font-weight: bolder; letter-spacing: 2px;">
       	See Value from lorem ipsum
	    </h1>
	    <hr style="border-color: white; border-width: 3px; border-radius: 3px; width: 8%;">
	    <div style="font-size: 20px; letter-spacing: 1px;">
	      	Lorem ipsum dolor sit amet, consectetur adipiscing elit,
	      	<br> sed do eiusmod tempor incididunt ut labore et dolore
	    </div>
	</div>
</div>


<div class="first">
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

<div class="second text-center" style=" padding: 60px 50px 80px 50px;">
	<div style=" font-family: 'Bungee'; font-size:30px; color: #FF5D5F; margin: 10px auto 80px auto;">Lorem Ipsum Dolor</div>
  <div class="row">
    <div class="col-md-6">
      <img src="{{ asset('images/pot2.jpeg') }}" alt="New York" width="50%" style="border-radius: 5px;">
    </div>
    <div class="col-md-6 text-left" style="padding:0 40px 0 20px; color: #555; font-family: 'Nunito';">
      <h2>Lorem Ipsum Dolor Amet</h2>
        <hr style="border-color: #555; border-width: 3px; border-radius: 3px; width: 8%; margin: 35px 0;">
        <div style="padding-right: 60px; font-size: 15px; letter-spacing: 0px; line-height: 27px; ">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
    </div>
  </div>

  <hr style="border-color: #555; opacity: 0.5; margin-top: 7%; width: 30%;">

  <div class="row" style="margin: 8% 0 6% 0;">
  	<div class="col-md-6 text-left" style="padding:0 0 0 160px; color: #555; font-family: 'Nunito';">
      <h2>Lorem Ipsum Dolor Amet</h2>
        <hr style="border-color: #555; border-width: 3px; border-radius: 3px; width: 8%; margin: 35px 0;">
        <div style="font-size: 15px; letter-spacing: 0px; line-height: 27px; ">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
    </div>
    <div class="col-md-6">
      <img src="{{ asset('images/work6.jpeg') }}" alt="New York" width="50%" style="border-radius: 5px;">
    </div>    
  </div>

  <hr style="border-color: #555; opacity: 0.5; margin-bottom: 6%; width: 30%;">

  <div class="row">
    <div class="col-md-6">
      <img src="{{ asset('images/pot2.jpeg') }}" alt="New York" width="50%" style="border-radius: 5px;">
    </div>
    <div class="col-md-6 text-left" style="padding:0 40px 0 20px; color: #555; font-family: 'Nunito';">
      <h2>Lorem Ipsum Dolor Amet</h2>
        <hr style="border-color: #555; border-width: 3px; border-radius: 3px; width: 8%; margin: 35px 0;">
        <div style="padding-right: 60px; font-size: 15px; letter-spacing: 0px; line-height: 27px; ">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
    </div>
  </div>
</div>




@endsection