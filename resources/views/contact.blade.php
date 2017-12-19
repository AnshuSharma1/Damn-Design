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
    padding: 30px 15%;
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


@endsection

@section('content')
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
@endsection

