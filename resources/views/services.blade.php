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
  	padding-bottom:280px;
    padding-left: 10px;
    padding-right: 10px;
  }

	.first{
    background-color: white;
    padding: 5% 15% 7% 15%;
  }

  #line{
  width: 3.1%;
  }
  .second{
    padding: 60px 5% 80px 5%;
  }

  #second-head{
    font-family: 'Bungee';
    font-size:30px;
    color: #FF5D5F;
    margin: 10px auto 80px auto;
  }

  .second-hr{
    border-color: #555; border-width: 3px; border-radius: 3px; width: 8%; margin: 8% 0;
  }

  .second h2{
    margin-top: 0;
  }

  .second-content-right{
   padding:0 40px 0 20px; color: #555; font-family: 'Nunito';
  }

  .second img{
      width: 50%;
      border-radius: 5px;
    }  

  #second-row-2-content{
    padding:0 0 0 12%; 
    color: #555; 
    font-family: 'Nunito';
  }

  .second-content{
    font-size: 15px; letter-spacing: 0px; line-height: 27px;
  }

  .content-right{
    padding-right: 15%;
  }

  @media only screen and (max-width: 1300px) {
    .first{
      padding: 5% 10% 7% 10%;
    }
  }

  @media only screen and (max-width: 1150px) {
      #line{
      width: 3.5%;
    }
  }

  @media only screen and (max-width: 950px) {
  .first{
        padding: 5% 3% 7% 3%;
      }
  }

  @media only screen and (max-width: 1106px) and (min-width: 1000px) {
    .second img{
      width: 65%;
    }
  }

  @media only screen and (max-width: 999px) and (min-width: 768px) {
    .second img{
      width: 80%;
    }

  .content-right{
    padding-right: 10%;
  }

  #second-row-2-content{
    padding:0 0 0 5%;
  }

  }


  @media only screen and (max-width: 880px) {
    .second-content-right{
     padding:0 0px 0 10px;
    }

    .second img{
      width: 90%;
    }
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
    <div class="col-sm-5">
      <div style="font-size: 25px; text-align: center; font-family: 'Exo'; margin: 20px 0; color: #FF5D5F;">
        Lorem Ipsum
      </div>
      <div style="font-family: 'Nunito'; font-size: 16px;line-height: 25px;">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <br><br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        <div style="margin-top: 40px; font-size: 17px; font-weight: bold; letter-spacing: 1px; text-align: center; ">
        Dolor Amet consectetur
        </div>
      </div>
    </div>
    <div class="col-sm-2 text-center hidden-xs" style="padding-top: 80px;">
      <img src="{{ asset('images/line.png') }}" alt="New York" id="line">
    </div>
    <div class="col-sm-5">
      <div style="font-size: 25px; text-align: center; font-family: 'Exo'; margin: 20px 0; color: #FF5D5F;">
        Dolor Amey
      </div>
      <div style="font-family: 'Nunito'; font-size: 16px;line-height: 25px;">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        <br><br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        <br>
        <div style=" margin-top: 40px; font-size: 17px; font-weight: bold; letter-spacing: 1px;  text-align: center;">
        Dolor Amet consectetur
        </div>
      </div>
    </div>
  </div>
</div>

<div class="second text-center">
	<div id="second-head">Lorem Ipsum Dolor</div>
  <div class="row">
    <div class="col-sm-6">
      <img src="{{ asset('images/pot2.jpeg') }}" alt="New York">
    </div>
    <div class="col-sm-6 text-left second-content-right">
      <h2>Lorem Ipsum Dolor Amet</h2>
        <hr class="second-hr">
        <div class="second-content content-right">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
    </div>
  </div>

  <hr style="border-color: #555; opacity: 0.5; margin-top: 7%; width: 30%;">

  <div class="row" style="margin: 8% 0 6% 0;">
  	<div class="col-sm-6 text-left" id="second-row-2-content">
      <h2>Lorem Ipsum Dolor Amet</h2>
        <hr class="second-hr">
        <div class="second-content">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
    </div>
    <div class="col-sm-6">
      <img src="{{ asset('images/work6.jpeg') }}" alt="New York">
    </div>    
  </div>

  <hr style="border-color: #555; opacity: 0.5; margin-bottom: 6%; width: 30%;">

  <div class="row">
    <div class="col-sm-6">
      <img src="{{ asset('images/pot2.jpeg') }}" alt="New York">
    </div>
    <div class="col-sm-6 text-left second-content-right">
      <h2>Lorem Ipsum Dolor Amet</h2>
        <hr class="second-hr">
        <div class="second-content content-right">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </div>
    </div>
  </div>
</div>




@endsection