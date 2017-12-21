@extends('layouts.layout')

@section('Style')
	#jumbo {
    background: url("{{ asset('images/work7.jpg') }}") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }

  	.second{
  	padding: 50px 100px 100px 100px;
  	background-color: white;
    }

    .second .col-md-6{
    padding: 0px 5px;
    }
  
    .second img{
    border-radius: 3px;
    }

@endsection

@section('content')
<div id="jumbo" class="text-center" style="padding: 110px 50px 25% 50px; color: black; font-family: 'Nunito';">
    <div style="font-size: 35px;">Lorem Ipsum Dolor</div>
    <div style="margin-top: 30px; font-size: 16px; padding: 5px 25%;">
    	Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
    	<br>
    	<a href="#" style="padding: 18px 40px; color: black; font-size: 15px; font-weight: bold; letter-spacing: 2px; border: 1px black solid; display: inline-block; margin-top: 50px;">
			CLICK HERE
		</a>
    </div>
</div>

<div class="second text-center">
	<div style=" font-family: 'Bungee'; font-size:30px; color: #FF5D5F; margin-bottom: 20px;">Lorem Ipsum Dolor</div>
	<div style="margin-bottom: 50px; font-size: 16px; font-family: 'Nunito';">Sed ut perspiciatis unde omnis iste natus error . .</div>
		<div class="row" style="padding: 0 50px;">
			<div class="col-md-6" style="padding: 0 70px 0 0;">
  			<div class="row">
        		<div class="col-md-6">
          			<img src="{{ asset('images/work1.jpg') }}" alt="New York" width="100%">
        		</div>
        		<div class="col-md-6">
          			<img src="{{ asset('images/work2.jpeg') }}" alt="New York" width="100%">
        		</div>
	        </div>
	      	<div class="row" style=" margin-top: 10px;">
	       		<div class="col-md-6">
	          		<img src="{{ asset('images/janko-ferlic-184527.jpg') }}" alt="New York" width="100%">
	        	</div>
	        	<div class="col-md-6">
	          		<img src="{{ asset('images/pot.jpg') }}" alt="New York" width="100%">
	        	</div>
		    </div>
			</div>

			<div class="col-md-6 text-left" style="font-family: 'Nunito'; padding-right: 80px; padding-top: 10px; font-size: 16px;">
				Sunt in culpa qui officia deserunt mollit anim id est laborum.
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				<br><br>velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				<br><br>
				Sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
</div>


<div class="text-center three" style="padding: 70px 40px 70px 40px; background-color:#2a2a30;">
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