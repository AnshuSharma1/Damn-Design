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
<div class="first text-center" style=" padding: 60px 50px 0 50px;">
	<div class="row">
		<div class="col-md-6" style="padding: 30px 0 50px 50px;">
			<img src="{{ asset('images/pot2.jpeg') }}" alt="New York" width="80%" style="border-radius: 5px;">
		</div>
		<div class="col-md-6 text-left" style="padding:20px 40px 0 40px; color: #555; font-family: 'Nunito';">
			<h2>Lorem Ipsum Dolor Amet</h2>
	    	<hr style="border-color: #555; border-width: 3px; border-radius: 3px; width: 8%; margin: 35px 0;">
	    	<div style="padding-right: 60px; font-size: 15px; letter-spacing: 0px; line-height: 27px; ">
	    		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
	    		<br><br>
	    		Voluptate velit esse cillum dolore eu fugiat nulla pariatur nulla pariatur.
	    	</div>
	    	<a href="#" style="padding: 18px 40px; color: black; font-size: 15px; font-weight: bold; letter-spacing: 2px; border: 1px black solid; display: inline-block; margin-top: 50px;">
			CLICK HERE
			</a>
		</div>
	</div>
</div>
<div class="third" style="background-color: #343451; color: white; padding: 60px 100px 130px 100px; font-family: 'Nunito';">
	<div class="row text-center" style="opacity: 0.9;">
		<div style="font-size: 18px; font-weight: bold; color:  yellow; margin-bottom: 100px;letter-spacing: 1px;" class="text-center">
			Consequatur vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
			</div>
		<div class="col-md-3">
			<i class="fa fa-globe" aria-hidden="true" style="font-size: 60px;"></i>
			<div style="margin-top: 20px; font-size: 17px; font-family: calibri;">
				Lorem Ipsum dolor <br> sit amet sed do
			</div>
		</div>
		<div class="col-md-3">
			<i class="fa fa-cogs" aria-hidden="true" style="font-size: 60px;"></i>
			<div style="margin-top: 20px; font-size: 17px; font-family: calibri;">
				Consectetur adipiscing elit <br> sed do eiusmod tempor
			</div>
		</div>
		<div class="col-md-3">
			<i class="fa fa-users" aria-hidden="true" style="font-size: 60px;"></i>
			<div style="margin-top: 20px; font-size: 17px; font-family: calibri;">
				Lorem Ipsum dolor <br> sit amet sed do
			</div>
		</div>
		<div class="col-md-3">
			<i class="fa fa-pie-chart" aria-hidden="true" style="font-size: 60px;"></i>
			<div style="margin-top: 20px; font-size: 17px; font-family: calibri;">
				Consectetur adipiscing elit <br> sed do eiusmod tempor
			</div>
		</div>
	</div>
</div>
<div class="second text-center" style="padding: 30px;color: black; ">
	<h3 style="margin: 30px auto 30px auto; letter-spacing: 2px; font-size: 30px; font-family: 'calibri';">OUR SERVICES</h3>
	<hr style="width: 7%; border-color: black; margin-bottom: 70px;">
	<div class="row " style="margin-top: 50px;">
		<div class="col-md-6 row" style="padding-left: 120px;">
			<img src="{{ asset('images/consult.png') }}"  class="col-md-6" alt="New York" style="border-radius: 5px; width: 30%; margin-right: 20px;">
			<span style="font-family: 'Nunito';" class="text-left col-md-6">
				<h3 style="margin-top: 5px;">Lorem Ipsum Dolor</h3>
				<div style="padding-right: 10%; padding-top: 2%;">
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.
				</div>
			</span>
		</div>
		<div class="col-md-6 row" style="padding-left: 80px;">
			<img src="{{ asset('images/icon.png') }}"  class="col-md-6" alt="New York" style="border-radius: 5px; width: 28%; margin-right: 20px;">
			<span style="font-family: 'Nunito';" class="text-left col-md-6">
				<h3 style="margin-top: 5px;">Lorem Ipsum Dolor</h3>
				<div style="padding-right: 15%; padding-top: 2%;">
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.
				</div>
			</span>
		</div>
	</div>
	<div class="row " style="margin-top: 100px; margin-bottom: 50px;">
		<div class="col-md-6 row" style="padding-left: 120px;">
			<img src="{{ asset('images/globe.png') }}"  class="col-md-6" alt="New York" style="border-radius: 5px; width: 27%; margin-right: 35px; margin-top: 10px;" >
			<span style="font-family: 'Nunito';" class="text-left col-md-6">
				<h3 style="margin-top: 5px;">Lorem Ipsum Dolor</h3>
				<div style="padding-right: 10%; padding-top: 2%;">
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.
				</div>
			</span>
		</div>
		<div class="col-md-6 row" style="padding-left: 80px;">
			<img src="{{ asset('images/bulb.png') }}"  class="col-md-6" alt="New York" style="border-radius: 5px; width: 28%; margin-right: 20px;">
			<span style="font-family: 'Nunito';" class="text-left col-md-6">
				<h3 style="margin-top: 5px;">Lorem Ipsum Dolor</h3>
				<div style="padding-right: 15%; padding-top: 2%;">
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.
				</div>
			</span>
		</div>
	</div>
</div>


@endsection