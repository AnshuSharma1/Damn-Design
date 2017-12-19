@extends('layouts.layout')

@section('Style')
	#jumbo {
    background: url("{{ asset('images/janko-ferlic-184527.jpg') }}") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 100%;
    }
    .layer{
    	background-color: #000000;
    	opacity: 0.6;
    	width : 40%;
    	text-align: left;
    	padding: 30px 40px 40px 40px;
    	float:right;
    	margin-right: 3%;
    	line-height: 27px;
	}
@endsection

@section('content')
<div id="jumbo" style="padding: 130px 0 35% 60px;color: white;  font-family: 'Nunito', sans-serif; font-size: larger;" class="text-right">
    <div class="layer">
    	<div style="font-size: 35px; font-family: 'Raleway', sans-serif; font-weight: bold; letter-spacing: 2px;">Lorem Ipsum Dolor
    	</div>
	    <div style="font-size: 15px; margin-top: 35px; ">
	  	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
	   	Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	   	<br><br>
	    Auis nostrud exercitation ullamco laboris nisi ut aliquip .
	    </div>
    </div>
</div>
<div class="second" style="padding: 80px 15% 50px 15%; font-family: 'Nunito'; color: black;">
	<div class="row text-center">
		<div style=" font-family: 'Bungee'; font-size:30px; color: #FF5D5F;">Lorem Ipsum Dolor</div>
		<div class="col-md-4 text-center" style="padding: 40px;" >
			<img src="{{ asset('images/nike.png') }}" alt="New York" width="100%">
			<div>
				<h3 style="font-size: 18px; color: #222238; font-weight: bold; letter-spacing: 2px;" >
					VENIAM
				</h3>
				<div>
				Ut enim ad minim veniam.
	   			Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</div>
			</div>
		</div>
		<div class="col-md-4 text-center" style="padding: 40px;" >
			<img src="{{ asset('images/nike.png') }}" alt="New York" width="100%">
			<div>
				<h3 style="font-size: 18px; color: #222238; font-weight: bold; letter-spacing: 2px;" >
					NOSTRUD
				</h3>
				<div>
				Ut enim ad minim veniam.
	   			Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</div>
			</div>
		</div>
		<div class="col-md-4 text-center" style="padding: 40px;"  >
			<img src="{{ asset('images/nike.png') }}" alt="New York" width="100%">
			<div>
				<h3 style="font-size: 18px; color: #222238; font-weight: bold; letter-spacing: 2px;" >
					EXERCIATION
				</h3>
				<div>
				Ut enim ad minim veniam.
	   			Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				</div>
			</div>
		</div>
	</div>
</div>
	

@endsection