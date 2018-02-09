@extends('layouts.layout')

@section('Style')
	#jumbo {
    background: url("{{ asset('images/work7.jpg') }}") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 100%;
    padding: 8% 0 22% 0;
    color: black; font-family: 'Nunito';
    }

  	.second{
  	padding: 5% 10% 8% 10%;
  	background-color: white;
    }

    .second .col-xs-6{
    padding: 0px 5px;
    }
  
    .second img{
    border-radius: 3px;
    }

    #jumboc{
	margin-top: 30px; font-size: 16px; padding: 5px 25%;
	}

	#jumboa{
	padding: 18px 40px; color: black; font-size: 15px; font-weight: bold; letter-spacing: 2px; border: 1px black solid; display: inline-block; margin-top: 50px;
	}

	#second-content{
	font-family: 'Nunito'; 
	padding-right: 3%;
	font-size: 16px;
	}

	#second-img{
	padding-right: 5%;
	}

	#second-outer{
	padding: 0 50px;
	}

	.three{
		padding-top: 4em;
		padding-bottom: 3em; 
		background-color:#2a2a30;
	}

	#three-content{
	color: #fff7f7; 
	font-family: 'Nunito';
	padding: 4% 17%;
	margin-bottom: 20px;
	font-size: 15px;
	letter-spacing: 1px;
	}

	.fourth{
		padding: 3% 10% 7% 10%;
	}

	#fourth-outer{
		padding: 0 10%; margin-top: 5%;
	}

	#fourth-head{
		font-family: 'Bungee';
		letter-spacing: 2px;
		font-size: 30px;
		color: #af133f;
		margin-left: 20px;
	}

	 @media only screen and (max-width: 1200px) and (min-width: 990px) {
	    #second-content{
		font-family: 'Nunito'; 
		padding-right: 0;
		font-size: 16px;
		}
		#second-outer{
		padding: 0;
		}

		#second-img{
		padding-right: 3%;
		}

		#fourth-outer{
		padding: 0 5%;
		margin-top: 5%;
		}
	  }

	  @media only screen and (max-width: 991px) {
	    #second-content{
		padding-top: 40px;
		padding-right: 0;
		font-size: 15px;
		}
		#second-outer{
		padding: 0;
		}
		#second-img{
		padding-right: 0;
		}
		#three-content{
		padding: 4% 12%;
		margin-bottom: 20px;
		}

		#fourth-outer{
		padding: 0;
		margin-top: 5%;
		}
		.fourth{
			padding: 3% 5% 7% 5%;
		}
	  }


	  @media only screen and (max-width: 767px) {
	   	.fourth2{
	   		margin-top: 30px;
		}
		#fourth-head{
			margin-bottom: 30px;
			text-align: center;
			margin-left: 0;
		}
		.fourth{
				padding: 3% 0% 7% 0%;
			}
		  }

     @media only screen and (max-width: 800px) {
      #jumbo{
      	padding:  10% 0 22% 0;
    	}

    	#jumboc{
		margin-top: 0px;
		}

		#jumboa{
			margin-top: 30px;
		}
  	}

  	 @media only screen and (max-width: 700px) {
      #jumbo{
      	padding:  15% 0 45% 0;
    	}

    	#jumboc{
		padding: 5px 10%;
		}
  	}

  	@media only screen and (max-width: 500px) {
      #jumbo{
      	padding:  30% 0 20% 0;
    	}

    	#jumboc{
		padding: 5px 8%;
		}
  	}
@endsection

@section('content')
<div id="jumbo" class="text-center">
    <div style="font-size: 35px;">Lorem Ipsum Dolor</div>
    <div id="jumboc">
    	Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
    	<br>
    	<a href="#" id="jumboa">
			CLICK HERE
		</a>
    </div>
</div>

<div class="second text-center">
	<div style=" font-family: 'Bungee'; font-size:30px; color: #FF5D5F; margin-bottom: 20px;">Lorem Ipsum Dolor</div>
	<div style="margin-bottom: 50px; font-size: 16px; font-family: 'Nunito';">Sed ut perspiciatis unde omnis iste natus error . .</div>
		<div class="row" id="second-outer">
			<div class=" col-md-6 col-sm-12 col-xs-12" id="second-img">
  			<div class="row">
        		<div class="col-xs-6">
          			<img src="{{ asset('images/5I3A6066.JPG') }}" alt="New York" width="100%">
        		</div>
        		<div class="col-xs-6">
          			<img src="{{ asset('images/5I3A6106.JPG') }}" alt="New York" width="100%">
        		</div>
	        </div>
	      	<div class="row" style=" margin-top: 10px;">
	       		<div class="col-xs-6">
	          		<img src="{{ asset('images/5I3A6353.JPG') }}" alt="New York" width="100%">
	        	</div>
	        	<div class="col-xs-6">
	          		<img src="{{ asset('images/5I3A6477.JPG') }}" alt="New York" width="100%">
	        	</div>
		    </div>
			</div>

			<div class="col-md-6 col-sm-12 col-xs-12 text-left" id="second-content">
				Sunt in culpa qui officia deserunt mollit anim id est laborum.
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
				<br><br>velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				<br>
				Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</div>
		</div>
</div>


<div class="text-center three">
		<span style="font-size: 35px; font-family: 'Bungee';letter-spacing: 2px; color: white;">
		Our Story
		</span>
		<div class="text-left" id="three-content">
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

<div class="fourth">
	<h2 id="fourth-head">THE TEAM</h2>
	<div class="row" id="fourth-outer">
		<div class="col-sm-6 text-center" >
			<img src="{{ asset('images/1H5A5132.JPG') }}" alt="New York" width="50%" style=" border-radius: 5px;">
			<br>
			<div style="margin-top: 30px; padding-left: 10px; color: black; font-family: 'Nunito';" class="text-center">
				<h4 style="font-weight: bold;">ABHISHEK JOSHI</h4>
				<span>Founder & Managing Director</span>
			</div>
		</div>
		<div class="col-sm-6 text-center fourth2">
			<img src="{{ asset('images/IMG_8726.JPG') }}" alt="New York" width="50%" style=" border-radius: 5px;" >
			<br>
			<div style="margin-top: 30px; padding-left: 10px; color: black; font-family: 'Nunito';" class="text-center">
				<h4 style="font-weight: bold;">KANCHAN SHARMA</h4>
				<span>Co-Founder & Director</span>
			</div>
		</div>
	</div>
	
</div>



@endsection