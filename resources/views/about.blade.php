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

<div class="text-center three" style="padding: 70px 40px 70px 40px; margin-top: 50px;  background-color:#2a2a30;">
		<span style="font-size: 35px; font-family: 'Bungee';letter-spacing: 2px; color: white;">
		Our Story
		</span>
		<div style="color: #fff7f7; font-family: 'Nunito'; padding: 35px 17%;margin-bottom: 20px; font-size: 15px; letter-spacing: 1px;" class="text-left">
			Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum. Dolorem eum fugiat quo voluptas nulla pariatur.
			<br><br>
			Dolorem eum fugiat quo voluptas nulla pariatur. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum. Dolorem eum fugiat quo voluptas nulla pariatur at vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium.
			<br><br>
			Blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
			<div style="font-size: 16px; font-weight: bold; margin-top: 50px; color:  yellow;" class="text-center">
			"Consequatur vel illum qui dolorem eum fugiat quo voluptas nulla pariatur"
			</div>
		</div>
</div>

<div class="row fourth" style="padding: 50px 100px 80px 100px;">
	<h2 style="font-family: 'Bungee'; letter-spacing: 2px; font-size: 30px;  color: #af133f; ">THE TEAM</h2>
	<div class="text-center" style=" margin-bottom:50px; color: black; font-family: 'Nunito'; letter-spacing: 1px; font-size: 16px; margin-top: 20px; margin-bottom: 70px; ">
	Consequatur vel illum qui dolorem eum fugiat quo
	</div>
	<div style="margin-left: 15%; ">
		<div class="col-md-3" >
			<img src="{{ asset('images/pot2.jpeg') }}" alt="New York" width="90%" style=" border-radius: 5px;">
			<br>
			<div style="margin-top: 30px; padding-left: 10px; color: black; font-family: 'Nunito';" class="text-center">
				<h4 style="font-weight: bold;">LOREM IPSUM</h4>
				<span>Principal & Chief Creative Officer</span>
			</div>
		</div>
		<div class="col-md-3" style="margin: auto 50px;">
			<img src="{{ asset('images/pot2.jpeg') }}" alt="New York" width="90%" style=" border-radius: 5px;" >
			<br>
			<div style="margin-top: 30px; padding-left: 10px; color: black; font-family: 'Nunito';" class="text-center">
				<h4 style="font-weight: bold;">LOREM IPSUM</h4>
				<span>Principal & Chief Creative Officer</span>
			</div>
		</div>
		<div class="col-md-3">
			<img src="{{ asset('images/pot2.jpeg') }}" alt="New York" width="90%" style=" border-radius: 5px;">
			<br>
			<div style="margin-top: 30px; padding-left: 10px; color: black; font-family: 'Nunito';" class="text-center">
				<h4 style="font-weight: bold;">LOREM IPSUM</h4>
				<span>Principal & Chief Creative Officer</span>
			</div>
		</div>
	</div>
	
</div>



@endsection