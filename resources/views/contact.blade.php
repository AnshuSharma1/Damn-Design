@extends('layouts.layout')

@section('Style')
	#jumbo {
    background: url("{{ asset('images/work7.jpg') }}") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }

    .first{
    margin-top: 50px;
    padding: 30px 15% 70px 15%;
    color: black;
	}

	.first a{
	text-decoration: none;
	}

	.first col-md-4{
	padding:0;
	}

	.first i{
	font-size:20px;
	color: black;
	}

	.second{
	padding: 70px;
	background-color: #e5e5e5;
	color: black;
	}
	.form-control::-webkit-input-placeholder {
	    color: black;
	}
@endsection

@section('content')
@if (Request::isMethod('post'))
        <h3 class="text-center alert alert-success">
           {{ $done }}
        </h3>
@endif
<div id="jumbo" class="text-center" style="padding: 80px 50px 265px 50px; color: black; font-family: 'Nunito';">
    <div style="font-size: 35px;">Lorem Ipsum Dolor</div>
    <div style="margin-top: 30px; font-size: 16px; padding: 5px 25%;">
    	Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
    	<br>
    	<a href="#" style="padding: 18px 40px; color: black; font-size: 15px; font-weight: bold; letter-spacing: 2px; border: 1px black solid; display: inline-block; margin-top: 50px;">
			CLICK HERE
		</a>
    </div>
</div>
<div class="first text-center">
	<div style="font-family: 'Bungee'; color:  #FF5D5F; font-size: 25px;margin-bottom: 30px; ">
		CONTACT US
	</div>

	<div class="row">
		<div class="col-md-4 text-center">
			<h3 style="margin-bottom: 20px;">ADDRESS</h3>
			<div>
				Sed ut perspiciatis unde omnis iste
				<br>natus error sit voluptatem accusantium 
				<br>doloremque laudantium, totam rem aperiam,
				<br>eaque ipsa quae ab illo inventore
			</div>
		</div>
		<div class="col-md-1" style="padding-top: 70px;">
			<hr style="border-color: black; border-width: 2px; width: 50%;">
		</div>
		<div class="col-md-3 text-center">
			<h3 style="margin-bottom: 30px;">PHONE</h3>
			<div>
				Sed ut perspiciatis : <SPAN>1234567890</SPAN>
				<br>Natus error sit : <span>1111111111</span>
			</div>
		</div>
		<div class="col-md-1" style="padding-top: 70px;">
			<hr style="border-color: black; border-width: 2px; width: 50%;">
		</div>
		<div class="col-md-3 text-center">
			<h3 style="margin-bottom: 30px;">SOCIAL</h3>
			<div class="row">
				<div class="col-md-4">
					<a href="#"><i class="fa fa-facebook"></i></a>
            	</div>
				<div class="col-md-4">
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
				<div class="col-md-4">
					 <a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="second text-center">
	<div  style="font-size: 25px; font-family: 'Exo'; letter-spacing: 1px;">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit
	</div>
	<div style="margin-top:30px; padding: 0 25%; font-family: 'Nunito'; font-size: 15px;">
		Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
	</div>
	<hr style="border-color: #2ab27b; border-width: 2px; width: 8%; margin: 30px auto; ">
	<div style="padding: 10px 20%;">
		<form method="POST" action="/contact" >
			{{ csrf_field() }}
			<div class="row">
				<div class="col-md-4" style="padding: 0 20px;">
					<input type="text" name="name" placeholder="Your Name" style="padding:24px ; text-align: center; color: black; border-radius: 5px; border-color: #555; " required class="form-control">
				</div>
				<div class="col-md-4" style="padding: 0 20px;">
					<input type="text" name="email" placeholder="Your Email" style="padding:24px ; text-align: center; color: black; border-radius: 5px; border-color: #555; " required class="form-control">
				</div>
				<div class="col-md-4" style="padding: 0 20px;">
					<input type="number" name="phone" placeholder="Your Phone No" style="padding:24px ; text-align: center; color: black; border-radius: 5px; border-color: #555; " required class="form-control">
				</div>
			</div>
			<div class="text-left" style="padding:0  20px; margin-top: 20px; ">
				<textarea name="text" style="border-radius: 5px; border-color: #555; padding: 10pX; color: black;" rows="10" class="form-control">Your purpose
				</textarea>
			</div>
			<button type="submit" class="btn btn-success" style="margin-top: 30px; padding: 10px 40px;">Submit</button>
		</form>
	</div>
	
</div>
@endsection

