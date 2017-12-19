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

	.first{
		padding: 70px 100px 100px 100px;
		background-color: #ededed;
	}	
	.col-md-3{
	padding: 0 5px;
	}
	
	.first img{
	border-radius: 3px;
	}

	.third{
	padding: 50px;
	background-color: white;
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
<div class="first">
	<h3 class="text-center" style="margin-top: 0; color: black; font-family: 'Nunito';">Lorem ipsum dolor sit amet, consectetur adipiscing</h3>
	<hr style="width: 10%; border-color: black; margin: 40px auto 50px auto;">
	<div class="row">
		<div class="col-md-3">
			<img src="{{ asset('images/work1.jpg') }}" alt="New York" width="100%">
		</div>
		<div class="col-md-3">
			<img src="{{ asset('images/work2.jpeg') }}" alt="New York" width="100%">
		</div>
		<div class="col-md-3">
			<img src="{{ asset('images/work3.jpeg') }}" alt="New York" width="100%">
		</div>
		<div class="col-md-3">
			<img src="{{ asset('images/work5.jpeg') }}" alt="New York" width="100%">
		</div>
	</div>
	<div class="row" style=" margin-top: 10px;">
		<div class="col-md-3">
			<img src="{{ asset('images/janko-ferlic-184527.jpg') }}" alt="New York" width="100%">
		</div>
		<div class="col-md-3">
			<img src="{{ asset('images/pot.jpg') }}" alt="New York" width="100%">
		</div>
		<div class="col-md-3">
			<img src="{{ asset('images/r4.jpeg') }}" alt="New York" width="100%">
		</div>
		<div class="col-md-3">
			<img src="{{ asset('images/corinne-kutz-211251.jpg') }}" alt="New York" width="100%">
		</div>
	</div>
</div>	

@endsection