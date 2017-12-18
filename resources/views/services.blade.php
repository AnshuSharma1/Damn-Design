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
<div class="first text-center" style="background-color: white; padding: 40px;">
	<div class="row">
		<div class="col-md-6">
			<img src="{{ asset('images/pot2.jpeg') }}" alt="New York" width="80%">
		</div>
		<div class="col-md-6 text-left" style="padding:0 40px; color: black;">
			<h2>Lorem Ipsum Dolor Amet</h2>
	    	<hr style="border-color: black; border-width: 3px; border-radius: 3px; width: 8%; margin: 35px 0;">
	    	<div style="padding-right: 60px; font-size: 15px; letter-spacing: 1px;">
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
<div class="third text-center" style="padding: 30px; background-color: #ffeaea; color: black;">
	<h3>
		Lorem ipsum dolor sit amet consectetur.
	</h3>
</div>
@endsection