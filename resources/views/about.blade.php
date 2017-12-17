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


@endsection